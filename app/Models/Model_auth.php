<?php 
 
namespace App\Models;
 
use CodeIgniter\Model;
use CodeIgniter\Database\Query;

class Model_auth extends Model
{
	public function __construct()
	{
		parent::__construct();
		$db = \Config\Database::connect();
	}

	/* 
		This function checks if the email exists in the database
	*/
	public function check_email($email) 
	{
		if($email) {
			$sql = 'SELECT * FROM users WHERE email = ?';
			$query = $this->db->query($sql, array($email));
			$row = $query->getRow();
			return isset($row);
		}

		return false;
	}

	/* 
		This function checks if the email and password matches with the database
	*/
	public function login($email, $password) {
		if($email && $password) {
			$sql = "SELECT * FROM users WHERE email = ?";
			$query = $this->db->query($sql, array($email));

			$result = $query->getRow();
			if(isset($result->password)) {

				$hash_password = password_verify($password, $result->password);
				if($hash_password === true) {
					return $result;	
				}
				else {
					return false;
				}
			}
			else {
				return false;
			}
		}
	}
}