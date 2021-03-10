<?php 
 
namespace App\Models;
 
use CodeIgniter\Model;
use CodeIgniter\Database\Query;

class Model_category extends Model
{
	 protected $table = 'categories';
	 protected $primaryKey = 'id';
	 protected $returnType = 'object';
	 protected $allowedFields = [
        'name', 'active'
    ];
	
	/* get active brand infromation */
	public function getActiveCategroy()
	{
		return $this->where('active', 1)->findAll();
	}

}