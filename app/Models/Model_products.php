<?php 
 
namespace App\Models;
 
use CodeIgniter\Model;
use CodeIgniter\Database\Query;

class Model_products extends Model
{
	 protected $table = 'products';
	 protected $primaryKey = 'id';
	 protected $returnType = 'object';
	 protected $allowedFields = [
        'name', 'sku','price','qty','image','description','attribute_value_id','brand_id','category_id','store_id','availability'
    ];

	public function getActiveProductData()
	{
		return $this->where('availability', 1)->findAll();
	}

	public function countTotalProducts()
	{
		$sql = "SELECT COUNT(*) as Count FROM products";
		$query = $this->db->query($sql);
		$row = $query->getRow();
		return $count = $row->Count;
	}

}