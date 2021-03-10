<?php 
 
namespace App\Models;
 
use CodeIgniter\Model;
use CodeIgniter\Database\Query;

class Model_users extends Model
{
	 protected $table = 'users';
	 protected $primaryKey = 'id';
	 protected $returnType = 'object';
	 protected $allowedFields = [
        'name', 'active'
    ];

	public function getUserData($userId = null) 
	{
		if($userId) {
			$sql = "SELECT * FROM users WHERE id = ?";
			$query = $this->db->query($sql, array($userId));
			$result = $query->getRow();
		}

		$sql = "SELECT * FROM users WHERE id != ?";
		$query = $this->db->query($sql, array(1));
		return $query->getResult();
	}
	
	public function getUserGroup($userId = null) 
	{
		if($userId) {
			$builder = $this->db->table("user_group");
			$builder->where("user_id", $userId);
			$query = $builder->get();
			$result = $query->getRow();

		$group_id = $result->group_id;
			$g_sql = "SELECT * FROM groups WHERE id = ?";
			$g_query = $this->db->query($g_sql, array($group_id));
			$q_result = $g_query->getRow();
			return $q_result;
		}
	}

	public function create($data = '', $group_id = null)
	{

		if($data && $group_id) {
			$builder = $this->db->table('users');
			$create = $builder->insert($data);
			$user_id = $this->db->insertID();

			$group_data = array(
				'user_id' => $user_id,
				'group_id' => $group_id
			);
			$builder = $this->db->table('user_group');
			$group_data =  $builder->insert($group_data);

			return ($create == true && $group_data) ? true : false;
		}
	}

	public function edit($data = array(), $id = null, $group_id = null)
	{
		$builder = $this->db->table('users');
		$builder->where('id', $id);
		$update = $builder->update($data);

		if($group_id) {
			// user group
			$update_user_group = array('group_id' => $group_id);
			$builder = $this->db->table('user_group');
			$builder->where('user_id', $id);
			$user_group = $builder->update($update_user_group);
			return ($update == true && $user_group == true) ? true : false;	
		}
			
		return ($update == true) ? true : false;	
	}

	public function countTotalUsers()
	{
		$sql = "SELECT COUNT(*) as Count FROM users";
		$query = $this->db->query($sql);
		$row = $query->getRow();
		return $count = $row->Count;
	}
	
}