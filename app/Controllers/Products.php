<?php namespace App\Controllers;


use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;

use App\Models\Model_products;
use App\Models\Model_brands;
use App\Models\Model_category;
use App\Models\Model_stores;
use App\Models\Model_attributes;

class Products extends Admin_Controller 
{
	public function __construct()
	{
		parent::__construct();


		$this->data['page_title'] = 'Products';

		$this->model_products = new Model_products();
		$this->model_brands = new Model_brands();
		$this->model_category = new Model_category();
		$this->model_stores = new Model_stores();
		$this->model_attributes = new Model_attributes();

		$this->validation =  \Config\Services::validation();
	}

    /* 
    * It only redirects to the manage product page
    */
	public function index()
	{
        if(!in_array('viewProduct', $this->permission)) {
			$this->response->redirect(base_url('/dashboard'));
        }
		
		$this->data['locale'] = $this->request->getLocale();

		$this->render_template('products/index', $this->data);	
	}

    /*
    * It Fetches the products data from the product table 
    * this function is called from the datatable ajax function
    */
	public function fetchProductData()
	{
		$result = array('data' => array());

		$data = $this->model_products->findAll();

		foreach ($data as $key => $value) {

            $store_data = $this->model_stores->find($value->store_id);
			// button
            $buttons = '';
            if(in_array('updateProduct', $this->permission)) {
    			$buttons .= '<a href="'.base_url('products/update/'.$value->id).'" class="btn btn-default"><i class="fa fa-pencil"></i></a>';
            }

            if(in_array('deleteProduct', $this->permission)) {
    			$buttons .= ' <button type="button" class="btn btn-default" onclick="removeFunc('.$value->id.')" data-toggle="modal" data-target="#removeModal"><i class="fa fa-trash"></i></button>';
            }
			
			if($value->image!=""){
				$img = '<img src="'.base_url($value->image).'" alt="'.$value->name.'" class="img-circle" height="50" />';
			}else{
				$img = '';
			}

            $availability = ($value->availability == 1) ? '<span class="label label-success">Active</span>' : '<span class="label label-warning">Inactive</span>';

            $qty_status = '';
            if($value->qty <= 10) {
                $qty_status = '<span class="label label-warning">Low !</span>';
            } else if($value->qty <= 0) {
                $qty_status = '<span class="label label-danger">Out of stock !</span>';
            }


			$result['data'][$key] = array(
				$img,
				$value->sku,
				$value->name,
				$value->price,
                $value->qty . ' ' . $qty_status,
                $store_data->name,
				$availability,
				$buttons
			);
		} // /foreach

		echo json_encode($result);
	}	

    /*
    * If the validation is not valid, then it redirects to the create page.
    * If the validation for each input field is valid then it inserts the data into the database 
    * and it stores the operation message into the session flashdata and display on the manage product page
    */
	public function create()
	{
		if(!in_array('createProduct', $this->permission)) {
            $this->response->redirect(base_url('/dashboard'));
        }

			if ($this->validate([
			'product_name' => ['label' => 'Product', 'rules' => 'trim|required'],
			'sku' => ['label' => 'SKU', 'rules' => 'trim|required'],
			'price' => ['label' => 'Price', 'rules' => 'trim|required'],
			'qty' => ['label' => 'Qty', 'rules' => 'trim|required'],
			'store' => ['label' => 'Store', 'rules' => 'trim|required'],
			'availability' => ['label' => 'Availability', 'rules' => 'trim|required']
		])) {
            // true case
        	$upload_image = $this->upload_image();

        	$data = array(
        		'name' => $this->request->getPost('product_name'),
        		'sku' => $this->request->getPost('sku'),
        		'price' => $this->request->getPost('price'),
        		'qty' => $this->request->getPost('qty'),
        		'image' => $upload_image,
        		'description' => $this->request->getPost('description'),
        		'attribute_value_id' => json_encode($this->request->getPost('attributes_value_id')),
        		'brand_id' => json_encode($this->request->getPost('brands')),
        		'category_id' => json_encode($this->request->getPost('category')),
                'store_id' => $this->request->getPost('store'),
        		'availability' => $this->request->getPost('availability'),
        	);

        	$create = $this->model_products->insert($data);
        	if($create == true) {
        		$this->session->setFlashdata('success', lang('Main.createdOK'));
        		// redirect('products/'));
				// header("location: /products/");
				$this->response->redirect(base_url('/products/'));
        	}
        	else {
        		$this->session->setFlashdata('errors', lang('Main.error'));
        		// redirect('products/create'));
				// header("location: /products/create");
				$this->response->redirect(base_url('/products/create'));
        	}
        }
        else {
            // false case

        	// attributes 
        	$attribute_data = $this->model_attributes->getActiveAttributeData();

        	$attributes_final_data = array();
        	foreach ($attribute_data as $k => $v) {
        		$attributes_final_data[$k]['attribute_data'] = $v;

        		$value = $this->model_attributes->getAttributeValueData($v->id);

        		$attributes_final_data[$k]['attribute_value'] = $value;
        	}

        	$this->data['attributes'] = $attributes_final_data;
			$this->data['brands'] = $this->model_brands->getActiveBrands();        	
			$this->data['category'] = $this->model_category->getActiveCategroy();        	
			$this->data['stores'] = $this->model_stores->getActiveStore();     
			if($this->request->getMethod()=="post") $this->data['validation'] = $this->validation;	

            $this->render_template('products/create', $this->data);
        }	
	}

    /*
    * This function is invoked from another function to upload the image into the assets folder
    * and returns the image path
    */
	public function upload_image()
    {
    	//// assets/images/product_image
        $config['upload_path'] = 'assets/images/product_image';
        // $config['file_name'] =  uniqid();
        // $config['allowed_types'] = 'gif|jpg|png';
        // $config['max_size'] = '1000';

        //// $config['max_width']  = '1024';s
        //// $config['max_height']  = '768';

        // $this->load->library('upload', $config);
        // if ( ! $this->upload->do_upload('product_image'))
        // {
            // $error = $this->upload->display_errors();
            // return $error;
        // }
        // else
        // {
            // $data = array('upload_data' => $this->upload->data());
            // $type = explode('.', $_FILES['product_image']['name']);
            // $type = $type[count($type) - 1];
            
            // $path = $config['upload_path'].'/'.$config['file_name'].'.'.$type;
            // return ($data == true) ? $path : false;            
        // }
		$input = $this->validate([
            'product_image' => [
                'uploaded[product_image]',
                'mime_in[product_image,image/jpg,image/jpeg,image/png]',
                'max_size[product_image,1000]',
            ]
        ]);
    
        if (!$input) {
            return false;
        } else {
			$file = $this->request->getFile('product_image');

			// Generate a new secure name
			$name = $file->getRandomName();

			// Move the file to it's new home
			$file->move(WRITEPATH . 'uploads', $name);

			// echo $file->getSize('mb');      // 1.23
			// echo $file->getExtension();     // jpg
			// echo $file->getType();          // image/jpg
			return '/file/'.$name;
		
		}
    }

    /*
    * If the validation is not valid, then it redirects to the edit product page 
    * If the validation is successfully then it updates the data into the database 
    * and it stores the operation message into the session flashdata and display on the manage product page
    */
	public function update($product_id)
	{
        if(!in_array('updateProduct', $this->permission)) {
            $this->response->redirect(base_url('/dashboard'));
        }

        if(!$product_id) {
            $this->response->redirect(base_url('/dashboard'));
        }

		if ($this->validate([
		'product_name' => ['label' => 'Product', 'rules' => 'trim|required'],
		'sku' => ['label' => 'SKU', 'rules' => 'trim|required'],
		'price' => ['label' => 'Price', 'rules' => 'trim|required'],
		'qty' => ['label' => 'Qty', 'rules' => 'trim|required'],
		'store' => ['label' => 'Store', 'rules' => 'trim|required'],
		'availability' => ['label' => 'Availability', 'rules' => 'trim|required']
		])) {
            // true case
            
            $data = array(
                'name' => $this->request->getPost('product_name'),
                'sku' => $this->request->getPost('sku'),
                'price' => $this->request->getPost('price'),
                'qty' => $this->request->getPost('qty'),
                'description' => $this->request->getPost('description'),
                'attribute_value_id' => json_encode($this->request->getPost('attributes_value_id')),
                'brand_id' => json_encode($this->request->getPost('brands')),
                'category_id' => json_encode($this->request->getPost('category')),
                'store_id' => $this->request->getPost('store'),
                'availability' => $this->request->getPost('availability'),
            );

            
            if($_FILES['product_image']['size'] > 0) {
                $upload_image = $this->upload_image();
                $upload_image = array('image' => $upload_image);
                
                $this->model_products->update($product_id, $upload_image);
            }

            $update = $this->model_products->update($product_id, $data);
            if($update == true) {
                $this->session->setFlashdata('success', lang('Main.updatedOK'));
            $this->response->redirect(base_url('/products'));
            }
            else {
                $this->session->setFlashdata('errors', lang('Main.error'));
            $this->response->redirect(base_url('/products/update/'.$product_id));
            }
        }
        else {
            // attributes 
            $attribute_data = $this->model_attributes->getActiveAttributeData();

            $attributes_final_data = array();
            foreach ($attribute_data as $k => $v) {
                $attributes_final_data[$k]['attribute_data'] = $v;

                $value = $this->model_attributes->getAttributeValueData($v->id);

                $attributes_final_data[$k]['attribute_value'] = $value;
            }
            
            // false case
            $this->data['attributes'] = $attributes_final_data;
            $this->data['brands'] = $this->model_brands->getActiveBrands();         
            $this->data['category'] = $this->model_category->getActiveCategroy();           
            $this->data['stores'] = $this->model_stores->getActiveStore();          

            $product_data = $this->model_products->find($product_id);
            $this->data['product_data'] = $product_data;
			if($this->request->getMethod()=="post") $this->data['validation'] = $this->validation;
            $this->render_template('products/edit', $this->data); 
        }   
	}

    /*
    * It removes the data from the database
    * and it returns the response into the json format
    */
	public function remove()
	{
        if(!in_array('deleteProduct', $this->permission)) {
            $this->response->redirect(base_url('/dashboard'));
        }
        
        $product_id = $this->request->getPost('product_id');

        $response = array();
        if($product_id) {
            $delete = $this->model_products->delete($product_id);
            if($delete == true) {
                $response['success'] = true;
                $response['messages'] = "Successfully removed"; 
            }
            else {
                $response['success'] = false;
                $response['messages'] = "Error in the database while removing the product information";
            }
        }
        else {
            $response['success'] = false;
            $response['messages'] = "Refersh the page again!!";
        }

        echo json_encode($response);
	}

}