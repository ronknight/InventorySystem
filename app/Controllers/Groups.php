<?php namespace App\Controllers;


use App\Models\Model_groups;

class Groups extends Admin_Controller 
{
	public function __construct()
	{
		parent::__construct();


		$this->data['page_title'] = 'Groups';
		

		$this->model_groups = new Model_groups();
		$this->validation =  \Config\Services::validation();
	}

	/* 
	* It redirects to the manage group page
	* As well as the group data is also been passed to display on the view page
	*/
	public function index()
	{
		if(!in_array('viewGroup', $this->permission)) {
			return redirect()->to(base_url('dashboard'));
		}

		$groups_data = $this->model_groups->getGroupData();
		$this->data['groups_data'] = $groups_data;

		$this->render_template('groups/index', $this->data);
	}	

	/*
	* If the validation is not valid, then it redirects to the create page.
	* If the validation is for each input field is valid then it inserts the data into the database 
	* and it stores the operation message into the session flashdata and display on the manage group page
	*/
	public function create()
	{

		if(!in_array('createGroup', $this->permission)) {
			return redirect()->to(base_url('dashboard'));
		}

		$this->validation->setRule('group_name', 'Group name', 'required');

        if ($this->validate($this->validation->getRules()) == TRUE) {
            // true case
            $permission = serialize($this->request->getPost('permission'));
            
        	$data = array(
        		'group_name' => $this->request->getPost('group_name'),
        		'permission' => $permission
        	);

        	$create = $this->model_groups->insert($data);
        	if($create == true) {
        		$this->session->setFlashdata('success', lang('Main.createdOK'));
        		return redirect()->to(base_url('groups/'));
        	}
        	else {
        		$this->session->setFlashdata('errors', lang('Main.error'));
        		return redirect()->to(base_url('groups/create'));
        	}
        }
        else {
            // false case
			if($this->request->getMethod()=="post") $this->data['validation'] = $this->validation;
            $this->render_template('groups/create', $this->data);
        }	
	}

	/*
	* If the validation is not valid, then it redirects to the edit group page 
	* If the validation is successfully then it updates the data into the database 
	* and it stores the operation message into the session flashdata and display on the manage group page
	*/
	public function edit($id = null)
	{

		if(!in_array('updateGroup', $this->permission)) {
			return redirect()->to(base_url('dashboard'));
		}

		if($id) {
			if($id==1){
				$this->session->setFlashdata('error', lang('Main.error'));
				return redirect()->to(base_url('users/'));
			}
			$this->validation->setRule('group_name', 'Group name', 'required');

			if ($this->validate($this->validation->getRules()) == TRUE) {
	            // true case
	            $permission = serialize($this->request->getPost('permission'));
	            
	        	$data = array(
	        		'group_name' => $this->request->getPost('group_name'),
	        		'permission' => $permission
	        	);

	        	$update = $this->model_groups->update($id, $data);
	        	if($update == true) {
	        		$this->session->setFlashdata('success', lang('Main.updatedOK'));
	        		return redirect()->to(base_url('groups/'));
	        	}
	        	else {
	        		$this->session->setFlashdata('errors', lang('Main.error'));
	        		return redirect()->to(base_url('groups/edit/'.$id));
	        	}
	        }
	        else {
	            // false case
	            $group_data = $this->model_groups->find($id);
				$this->data['group_data'] = $group_data;
				$this->render_template('groups/edit', $this->data);	
	        }	
		}
	}

	/*
	* It removes the removes information from the database 
	* and it stores the operation message into the session flashdata and display on the manage group page
	*/
	public function delete($id)
	{

		if(!in_array('deleteGroup', $this->permission)) {
			return redirect()->to(base_url('dashboard'));
		}

		if($id) {
			if($id==1){
				$this->session->setFlashdata('error', lang('Main.error'));
				return redirect()->to(base_url('users/'));
			}
			if($this->request->getPost('confirm')) {

				$check = $this->model_groups->existInUserGroup($id);
				if($check == true) {
					$this->session->setFlashdata('error', 'Group exists in the users');
	        		return redirect()->to(base_url('groups/'));
				}
				else {
					$delete = $this->model_groups->delete($id);
					if($delete == true) {
		        		$this->session->setFlashdata('success', 'Successfully removed');
		        		return redirect()->to(base_url('groups/'));
		        	}
		        	else {
		        		$this->session->setFlashdata('error', lang('Main.error'));
		        		return redirect()->to(base_url('groups/delete/'.$id));
		        	}
				}	
			}	
			else {
				$this->data['id'] = $id;
				$this->render_template('groups/delete', $this->data);
			}	
		}
	}


}