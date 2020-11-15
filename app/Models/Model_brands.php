<?php 
 
namespace App\Models;
 
use CodeIgniter\Model;
use CodeIgniter\Database\Query;

class Model_brands extends Model
{
	 protected $table = 'brands';
	 protected $primaryKey = 'id';
	 protected $returnType = 'object';
	 protected $allowedFields = [
        'name', 'active'
    ];
	
	/*get the active brands information*/
	public function getActiveBrands()
	{
		return $this->where('active', 1)->findAll();
	}

	/* get the brand data */
	public function getBrandData($id = null)
	{
		if($id) {
			$sql = "SELECT * FROM brands WHERE id = ?";
			$query = $this->db->query($sql, array($id));
			return $query->getRow();
		}

		$sql = "SELECT * FROM brands";
		$query = $this->db->query($sql);
		return $query->getResult();
	}

	public function create($data)
	{
		if($data) {
			$builder = $this->db->table('brands');
			return $builder->insert($data);
		}
	}

	public function up($data, $id)
	{
		if($data && $id) {
			$builder = $this->db->table('brands');
			$builder->where('id', $id);
			return $builder->update($data);	
		}
	}

	public function remove($id)
	{
		if($id) {
			$builder = $this->db->table('brands');
			$builder->where('id', $id);
			return $builder->delete();
		}
	}

}