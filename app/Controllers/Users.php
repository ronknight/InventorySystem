<?php namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;

use App\Models\Model_users;
use App\Models\Model_groups;

class Users extends Admin_Controller 
{
	public function __construct()
	{
		parent::__construct();

		
		$this->data['page_title'] = 'Users';
		
		
		$this->model_users = new Model_users();
		$this->model_groups = new Model_groups();
		$this->validation =  \Config\Services::validation();
	}

	
	public function index()
	{
		if(!in_array('viewUser', $this->permission)) {
			return redirect()->to(base_url('dashboard'));
		}

		$user_data = $this->model_users->getUserData();

		$result = array();
		foreach ($user_data as $k => $v) {

			$result[$k]['user_info'] = $v;

			$group = $this->model_users->getUserGroup($v->id);
			$result[$k]['user_group'] = $group;
		}

		$this->data['user_data'] = $result;

		$this->render_template('users/index', $this->data);
	}

	public function create()
	{
		if(!in_array('createUser', $this->permission)) {
			return redirect()->to(base_url('dashboard'));
		}

		$this->validation->setRule('groups', 'Group', 'required');
		$this->validation->setRule('username', 'Username', 'trim|required|min_length[5]|max_length[12]|is_unique[users.username]');
		$this->validation->setRule('email', 'Email', 'trim|required|is_unique[users.email]');
		$this->validation->setRule('password', 'Password', 'trim|required|min_length[8]');
		$this->validation->setRule('cpassword', 'Confirm password', 'trim|required|matches[password]');
		$this->validation->setRule('fname', 'First name', 'trim|required');

        if ($this->validate($this->validation->getRules()) == TRUE) {
            // true case
            $password = $this->password_hash($this->request->getPost('password'));
        	$data = array(
        		'username' => $this->request->getPost('username'),
        		'password' => $password,
        		'email' => $this->request->getPost('email'),
        		'firstname' => $this->request->getPost('fname'),
        		'lastname' => $this->request->getPost('lname'),
        		'phone' => $this->request->getPost('phone'),
        		'gender' => $this->request->getPost('gender'),
        	);

        	$create = $this->model_users->create($data, $this->request->getPost('groups'));
        	if($create == true) {
        		$this->session->setFlashdata('success', lang('Main.createdOK'));
        		return redirect()->to(base_url('users/'));
        	}
        	else {
        		$this->session->setFlashdata('errors', lang('Main.error'));
        		return redirect()->to(base_url('users/create'));
        	}
        }
        else {
            // false case
			if($this->request->getMethod()=="post") $this->data['validation'] = $this->validation;
        	$group_data = $this->model_groups->getGroupData();
        	$this->data['group_data'] = $group_data;

            $this->render_template('users/create', $this->data);
        }	

		
	}

	public function password_hash($pass = '')
	{
		if($pass) {
			$password = password_hash($pass, PASSWORD_DEFAULT);
			return $password;
		}
	}

	public function edit($id = null)
	{
		if(!in_array('updateUser', $this->permission)) {
			return redirect()->to(base_url('dashboard'));
		}

		if($id) {
			if($id==1){
				$this->session->setFlashdata('error', lang('Main.error'));
				return redirect()->to(base_url('users/'));
			}
			$this->validation->setRule('groups', 'Group', 'required');
			$this->validation->setRule('username', 'Username', 'trim|required|min_length[5]|max_length[12]');
			$this->validation->setRule('email', 'Email', 'trim|required');
			$this->validation->setRule('fname', 'First name', 'trim|required');


			if ($this->validate($this->validation->getRules()) == TRUE) {
	            // true case
		        if(empty($this->request->getPost('password')) && empty($this->request->getPost('cpassword'))) {
		        	$data = array(
		        		'username' => $this->request->getPost('username'),
		        		'email' => $this->request->getPost('email'),
		        		'firstname' => $this->request->getPost('fname'),
		        		'lastname' => $this->request->getPost('lname'),
		        		'phone' => $this->request->getPost('phone'),
		        		'gender' => $this->request->getPost('gender'),
		        	);

		        	$update = $this->model_users->edit($data, $id, $this->request->getPost('groups'));
		        	if($update == true) {
		        		$this->session->setFlashdata('success', 'Successfully edited');
		        		return redirect()->to(base_url('users/'));
		        	}
		        	else {
		        		$this->session->setFlashdata('errors', lang('Main.error'));
		        		return redirect()->to(base_url('users/edit/'.$id));
		        	}
		        }
		        else {
		        	$this->validation->setRule('password', 'Password', 'trim|required|min_length[8]');
					$this->validation->setRule('cpassword', 'Confirm password', 'trim|required|matches[password]');

					if($this->validate($this->validation->getRules()) == TRUE) {

						$password = $this->password_hash($this->request->getPost('password'));

						$data = array(
			        		'username' => $this->request->getPost('username'),
			        		'password' => $password,
			        		'email' => $this->request->getPost('email'),
			        		'firstname' => $this->request->getPost('fname'),
			        		'lastname' => $this->request->getPost('lname'),
			        		'phone' => $this->request->getPost('phone'),
			        		'gender' => $this->request->getPost('gender'),
			        	);

			        	$update = $this->model_users->edit($data, $id, $this->request->getPost('groups'));
			        	if($update == true) {
			        		$this->session->setFlashdata('success', lang('Main.updatedOK'));
			        		return redirect()->to(base_url('users/'));
			        	}
			        	else {
			        		$this->session->setFlashdata('errors', lang('Main.error'));
			        		return redirect()->to(base_url('users/edit/'.$id));
			        	}
					}
			        else {
			            // false case
			        	$user_data = $this->model_users->find($id);
			        	$groups = $this->model_users->getUserGroup($id);

			        	$this->data['user_data'] = $user_data;
			        	$this->data['user_group'] = $groups;
						if($this->request->getMethod()=="post") $this->data['validation'] = $this->validation;

			            $group_data = $this->model_groups->getGroupData();
			        	$this->data['group_data'] = $group_data;

						$this->render_template('users/edit', $this->data);	
			        }	

		        }
	        }
	        else {
	            // false case
	        	$user_data = $this->model_users->find($id);
	        	$groups = $this->model_users->getUserGroup($id);

	        	$this->data['user_data'] = $user_data;
	        	$this->data['user_group'] = $groups;
				if($this->request->getMethod()=="post") $this->data['validation'] = $this->validation;

	            $group_data = $this->model_groups->getGroupData();
	        	$this->data['group_data'] = $group_data;

				$this->render_template('users/edit', $this->data);	
	        }	
		}	
	}

	public function delete($id)
	{
		if(!in_array('deleteUser', $this->permission)) {
			return redirect()->to(base_url('dashboard'));
		}

		if($id) {
			if($id==1){
				$this->session->setFlashdata('error', lang('Main.error'));
				return redirect()->to(base_url('users/'));
			}
			if($this->request->getPost('confirm')) {
					$delete = $this->model_users->delete($id);
					if($delete == true) {
		        		$this->session->setFlashdata('success', 'Successfully removed');
		        		return redirect()->to(base_url('users/'));
		        	}
		        	else {
		        		$this->session->setFlashdata('error', lang('Main.error'));
		        		return redirect()->to(base_url('users/'));
		        	}

			}	
			else {
				$this->data->id = $id;
				$this->render_template('users/delete', $this->data);
			}	
		}
	}

	public function profile()
	{
		if(!in_array('viewProfile', $this->permission)) {
			return redirect()->to(base_url('dashboard'));
		}

		$user_id = $this->session->id;

		$user_data = $this->model_users->find($user_id);
		$this->data['user_data'] = $user_data;

		$user_group = $this->model_users->getUserGroup($user_id);
		$this->data['user_group'] = $user_group;

        $this->render_template('users/profile', $this->data);
	}

	public function setting()
	{	
		if(!in_array('updateSetting', $this->permission)) {
			return redirect()->to(base_url('dashboard'));
		}

		$id = $this->session->id;

		if($id) {
			$this->validation->setRule('username', 'Username', 'trim|required|min_length[5]|max_length[12]');
			$this->validation->setRule('email', 'Email', 'trim|required');
			$this->validation->setRule('fname', 'First name', 'trim|required');

			if ($this->validate($this->validation->getRules()) == TRUE) {
	            // true case
		        if(empty($this->request->getPost('password')) && empty($this->request->getPost('cpassword'))) {
		        	$data = array(
		        		'username' => $this->request->getPost('username'),
		        		'email' => $this->request->getPost('email'),
		        		'firstname' => $this->request->getPost('fname'),
		        		'lastname' => $this->request->getPost('lname'),
		        		'phone' => $this->request->getPost('phone'),
		        		'gender' => $this->request->getPost('gender'),
		        	);

		        	$update = $this->model_users->edit($data, $id);
		        	if($update == true) {
		        		$this->session->setFlashdata('success', lang('Main.updatedOK'));
		        	}
		        	else {
		        		$this->session->setFlashdata('errors', lang('Main.error'));
		        	}
					return redirect()->to(base_url('users/setting/'));
		        }
		        else {
					$this->validation->reset();
		        	$this->validation->setRule('password', 'Password', 'trim|required|min_length[8]');
					$this->validation->setRule('cpassword', 'Confirm password', 'trim|required|matches[password]');

					if($this->validate($this->validation->getRules()) == TRUE) {

						$password = $this->password_hash($this->request->getPost('password'));

						$data = array(
			        		'username' => $this->request->getPost('username'),
			        		'password' => $password,
			        		'email' => $this->request->getPost('email'),
			        		'firstname' => $this->request->getPost('fname'),
			        		'lastname' => $this->request->getPost('lname'),
			        		'phone' => $this->request->getPost('phone'),
			        		'gender' => $this->request->getPost('gender'),
			        	);

			        	$update = $this->model_users->edit($data, $id, $this->request->getPost('groups'));
			        	if($update == true) {
			        		$this->session->setFlashdata('success', lang('Main.updatedOK'));
			        	}
			        	else {
			        		$this->session->setFlashdata('errors', lang('Main.error'));
			        	}
						return redirect()->to(base_url('users/setting/'));
					}
			        else {
			            // false case
			        	$user_data = $this->model_users->find($id);
			        	$groups = $this->model_users->getUserGroup($id);

			        	$this->data['user_data'] = $user_data;
			        	$this->data['user_group'] = $groups;
						if($this->request->getMethod()=="post") $this->data['validation'] = $this->validation;

			            $group_data = $this->model_groups->getGroupData();
			        	$this->data['group_data'] = $group_data;

						$this->render_template('users/setting', $this->data);	
			        }	

		        }
	        }
	        else {
	            // false case
	        	$user_data = $this->model_users->find($id);
	        	$groups = $this->model_users->getUserGroup($id);

	        	$this->data['user_data'] = $user_data;
	        	$this->data['user_group'] = $groups;
				if($this->request->getMethod()=="post") $this->data['validation'] = $this->validation;

	            $group_data = $this->model_groups->getGroupData();
	        	$this->data['group_data'] = $group_data;

				$this->render_template('users/setting', $this->data);	
	        }	
		}
	}


}