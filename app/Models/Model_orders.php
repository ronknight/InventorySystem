<?php 
 
namespace App\Models;
 
use CodeIgniter\Model;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Database\Query;
use App\Models\Model_products;

class Model_orders extends Model
{
	 protected $table = 'orders';
	 protected $primaryKey = 'id';
	 protected $returnType = 'object';
	 protected $allowedFields = [
        'bill_no','customer_name','customer_address','customer_phone','date_time','gross_amount','service_charge_rate','service_charge','vat_charge_rate','vat_charge','net_amount','discount','paid_status','user_id'
    ];

	// get the orders item data
	public function getOrdersItemData($order_id = null)
	{
		if(!$order_id) {
			return false;
		}

		$sql = "SELECT * FROM orders_item WHERE order_id = ?";
		$query = $this->db->query($sql, array($order_id));
		return $query->getResult();
	}

	public function create()
	{
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$user_id = $session->id;
		$bill_no = 'BILPR-'.strtoupper(substr(md5(uniqid(mt_rand(), true)), 0, 4));
    	$data = array(
    		'bill_no' => $bill_no,
    		'customer_name' => $request->getPost('customer_name'),
    		'customer_address' => $request->getPost('customer_address'),
    		'customer_phone' => $request->getPost('customer_phone'),
    		'date_time' => strtotime(date('Y-m-d h:i:s a')),
    		'gross_amount' => $request->getPost('gross_amount_value'),
    		'service_charge_rate' => $request->getPost('service_charge_rate'),
    		'service_charge' => ($request->getPost('service_charge_value') > 0) ?$request->getPost('service_charge_value'):0,
    		'vat_charge_rate' => $request->getPost('vat_charge_rate'),
    		'vat_charge' => ($request->getPost('vat_charge_value') > 0) ? $request->getPost('vat_charge_value') : 0,
    		'net_amount' => $request->getPost('net_amount_value'),
    		'discount' => $request->getPost('discount'),
    		'paid_status' => 2,
    		'user_id' => $user_id
    	);

		$order_id = $this->insert($data,true);

		$this->model_products = new Model_products();

		$count_product = count($request->getPost('product'));
    	for($x = 0; $x < $count_product; $x++) {
    		$items = array(
    			'order_id' => $order_id,
    			'product_id' => $request->getPost('product')[$x],
    			'qty' => $request->getPost('qty')[$x],
    			'rate' => $request->getPost('rate_value')[$x],
    			'amount' => $request->getPost('amount_value')[$x],
    		);

			$builder = $this->db->table('orders_item');
			$builder->insert($items);

    		// now decrease the stock from the product
    		$product_data = $this->model_products->find($request->getPost('product')[$x]);
    		$qty = (int) $product_data->qty - (int) $request->getPost('qty')[$x];

    		$update_product = array('qty' => $qty);


    		$this->model_products->update($request->getPost('product')[$x], $update_product);
    	}

		return ($order_id) ? $order_id : false;
	}

	public function countOrderItem($order_id)
	{
		if($order_id) {
			$sql = "SELECT COUNT(*) as Count FROM orders_item WHERE order_id = ?";
			$query = $this->db->query($sql, array($order_id));
			$row = $query->getRow();
			return $count = $row->Count;
		}
	}

	public function up($id)
	{
		if($id) {
			$session = \Config\Services::session();
			$request = \Config\Services::request();
			$user_id = $session->id;
			// fetch the order data 

			$data = array(
				'customer_name' => $request->getPost('customer_name'),
	    		'customer_address' => $request->getPost('customer_address'),
	    		'customer_phone' => $request->getPost('customer_phone'),
	    		'gross_amount' => $request->getPost('gross_amount_value'),
	    		'service_charge_rate' => $request->getPost('service_charge_rate'),
	    		'service_charge' => ($request->getPost('service_charge_value') > 0) ? $request->getPost('service_charge_value'):0,
	    		'vat_charge_rate' => $request->getPost('vat_charge_rate'),
	    		'vat_charge' => ($request->getPost('vat_charge_value') > 0) ? $request->getPost('vat_charge_value') : 0,
	    		'net_amount' => $request->getPost('net_amount_value'),
	    		'discount' => $request->getPost('discount'),
	    		'paid_status' => $request->getPost('paid_status'),
	    		'user_id' => $user_id
	    	);

			$update = $this->update($id, $data);

			// now the order item 
			// first we will replace the product qty to original and subtract the qty again
			$this->model_products = new Model_products();
			$get_order_item = $this->getOrdersItemData($id);
			foreach ($get_order_item as $k => $v) {
				$product_id = $v->product_id;
				$qty = $v->qty;
				// get the product 
				$product_data = $this->model_products->find($product_id);
				if(isset($product_data)){
					$update_qty = $qty + $product_data->qty;
					$update_product_data = array('qty' => $update_qty);
					
					// update the product qty
					$this->model_products->update($product_id, $update_product_data);
				}
			}

			// now remove the order item data
			$builder = $this->db->table('orders_item');
			$builder->where('order_id', $id);
			$builder->delete();

			// now decrease the product qty
			$count_product = count($request->getPost('product'));
	    	for($x = 0; $x < $count_product; $x++) {
	    		$items = array(
	    			'order_id' => $id,
	    			'product_id' => $request->getPost('product')[$x],
	    			'qty' => $request->getPost('qty')[$x],
	    			'rate' => $request->getPost('rate_value')[$x],
	    			'amount' => $request->getPost('amount_value')[$x],
	    		);
				$builder = $this->db->table('orders_item');
				$builder->insert($items);

	    		// now decrease the stock from the product
	    		$product_data = $this->model_products->find($request->getPost('product')[$x]);
	    		$qty = (int) $product_data->qty - (int) $request->getPost('qty')[$x];

	    		$update_product = array('qty' => $qty);
	    		$this->model_products->update($request->getPost('product')[$x], $update_product);
	    	}

			return true;
		}
	}



	public function remove($id)
	{
		if($id) {
			$builder = $this->db->table('orders');
			$builder->where('id', $id);
			$delete = $builder->delete();
			$builder = $this->db->table('orders_item');
			$builder->where('order_id', $id);
			$delete_item = $builder->delete();
			return ($delete == true && $delete_item) ? true : false;
		}
	}

	public function countTotalPaidOrders()
	{
		$sql = "SELECT COUNT(*) as Count FROM orders WHERE paid_status = ?";
		$query = $this->db->query($sql, array(1));
		$row = $query->getRow();
		return $count = $row->Count;
	}

}