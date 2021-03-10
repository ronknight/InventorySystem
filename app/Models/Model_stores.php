<?php 
 
namespace App\Models;
 
use CodeIgniter\Model;
use CodeIgniter\Database\Query;

class Model_stores extends Model
{
	 protected $table = 'stores';
	 protected $primaryKey = 'id';
	 protected $returnType = 'object';
	 protected $allowedFields = [
        'name', 'active'
    ];
	
	/* get the active store data */
	public function getActiveStore()
	{
		return $this->where('active', 1)->findAll();
	}

	public function countTotalStores()
	{
		$sql = "SELECT COUNT(*) as Count FROM stores WHERE active = ?";
		$query = $this->db->query($sql, array(1));
		$row = $query->getRow();
		return $count = $row->Count;
	}

}