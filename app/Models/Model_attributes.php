<?php 
 
namespace App\Models;
 
use CodeIgniter\Model;
use CodeIgniter\Database\Query; 

class Model_attributes extends Model
{
	 protected $table = 'attributes';
	 protected $primaryKey = 'id';
	 protected $returnType = 'object';
	 protected $allowedFields = [
        'name', 'active'
    ];
	
	// get the active atttributes data 
	public function getActiveAttributeData()
	{
		return $this->where('active', 1)->findAll();
	}

	public function countAttributeValue($id = null)
	{
		if($id) {
			$sql = "SELECT COUNT(*) as Count FROM attribute_value WHERE attribute_parent_id = ?";
			$query = $this->db->query($sql, array($id));
			$row = $query->getRow();
			return $count = $row->Count;
		}
	}

	/* get the attribute value data */
	// $id = attribute_parent_id
	public function getAttributeValueData($id = null)
	{
		$sql = "SELECT * FROM attribute_value WHERE attribute_parent_id = ?";
		$query = $this->db->query($sql, array($id));
		return $query->getResult();
	}

	public function getAttributeValueById($id = null)
	{
		$sql = "SELECT * FROM attribute_value WHERE id = ?";
		$query = $this->db->query($sql, array($id));
		return $query->getRow();
	}

	public function createValue($data)
	{
		if($data) {
			$builder = $this->db->table('attribute_value');
			return $builder->insert($data);
		}
	}

	public function updateValue($data, $id)
	{
		if($data && $id) {
			$builder = $this->db->table('attribute_value');
			$builder->where('id', $id);
			return $builder->update($data);
		}
	}

	public function removeValue($id)
	{
		if($id) {
			$builder = $this->db->table('attribute_value');
			$builder->where('id', $id);
			return $builder->delete();
		}
	}

}