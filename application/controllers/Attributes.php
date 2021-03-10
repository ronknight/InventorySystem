<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Attributes extends Admin_Controller 
{
	public function __construct()
	{
		parent::__construct();

		$this->not_logged_in();

		$this->data['page_title'] = 'Attributes';

		$this->load->model('model_attributes');
	}

	/* 
	* redirect to the index page 
	*/
	public function index()
	{
		if(!in_array('viewAttribute', $this->permission)) {
			redirect('dashboard', 'refresh');
		}

		$this->render_template('attributes/index', $this->data);	
	}

	/* 
	* fetch the attribute data through attribute id 
	*/
	public function fetchAttributeDataById($id) 
	{
		if($id) {
			$data = $this->model_attributes->getAttributeData($id);
			echo json_encode($data);
		}
	}

	/* 
	* gets the attribute data from data and returns the attribute 
	*/
	public function fetchAttributeData()
	{
		$result = array('data' => array());

		$data = $this->model_attributes->getAttributeData();

		foreach ($data as $key => $value) {

			$count_attribute_value = $this->model_attributes->countAttributeValue($value['id']);

			// button
			$buttons = '<a href="'.base_url('attributes/addvalue/'.$value['id']).'" class="btn btn-default"><i class="fa fa-plus"></i> Add Value</a> 
			<button type="button" class="btn btn-default" onclick="editFunc('.$value['id'].')" data-toggle="modal" data-target="#editModal"><i class="fa fa-pencil"></i></button>
			<button type="button" class="btn btn-default" onclick="removeFunc('.$value['id'].')" data-toggle="modal" data-target="#removeModal"><i class="fa fa-trash"></i></button>
			';

			$status = ($value['active'] == 1) ? '<span class="label label-success">Active</span>' : '<span class="label label-warning">Inactive</span>';

			$result['data'][$key] = array(
				$value['name'],
				$count_attribute_value,
				$status,
				$buttons
			);
		} // /foreach

		echo json_encode($result);
	}

	/* 
	* create the new attribute value 
	*/
	public function create()
	{
		if(!in_array('createAttribute', $this->permission)) {
			redirect('dashboard', 'refresh');
		}

		$response = array();

		$this->form_validation->set_rules('attribute_name', 'Attribute name', 'trim|required');
		$this->form_validation->set_rules('active', 'Active', 'trim|required');

		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

        if ($this->form_validation->run() == TRUE) {
        	$data = array(
        		'name' => $this->input->post('attribute_name'),
        		'active' => $this->input->post('active'),	
        	);

        	$create = $this->model_attributes->create($data);
        	if($create == true) {
        		$response['success'] = true;
        		$response['messages'] = 'Succesfully created';
        	}
        	else {
        		$response['success'] = false;
        		$response['messages'] = 'Error in the database while creating the brand information';			
        	}
        }
        else {
        	$response['success'] = false;
        	foreach ($_POST as $key => $value) {
        		$response['messages'][$key] = form_error($key);
        	}
        }

        echo json_encode($response);
	}

	/* 
	* update the attribute value via attribute id 
	*/
	public function update($id)
	{
		if(!in_array('updateAttribute', $this->permission)) {
			redirect('dashboard', 'refresh');
		}

		$response = array();

		if($id) {
			$this->form_validation->set_rules('edit_attribute_name', 'Attribute name', 'trim|required');
			$this->form_validation->set_rules('edit_active', 'Active', 'trim|required');

			$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

	        if ($this->form_validation->run() == TRUE) {
	        	$data = array(
	        		'name' => $this->input->post('edit_attribute_name'),
	        		'active' => $this->input->post('edit_active'),	
	        	);

	        	$update = $this->model_attributes->update($data, $id);
	        	if($update == true) {
	        		$response['success'] = true;
	        		$response['messages'] = 'Succesfully updated';
	        	}
	        	else {
	        		$response['success'] = false;
	        		$response['messages'] = 'Error in the database while updated the brand information';			
	        	}
	        }
	        else {
	        	$response['success'] = false;
	        	foreach ($_POST as $key => $value) {
	        		$response['messages'][$key] = form_error($key);
	        	}
	        }
		}
		else {
			$response['success'] = false;
    		$response['messages'] = 'Error please refresh the page again!!';
		}

		echo json_encode($response);
	}

	/* 
	* remove the attribute value via attribute id 
	*/
	public function remove()
	{
		if(!in_array('deleteAttribute', $this->permission)) {
			redirect('dashboard', 'refresh');
		}

		$attribute_id = $this->input->post('attribute_id');

		$response = array();
		if($attribute_id) {
			$delete = $this->model_attributes->remove($attribute_id);
			if($delete == true) {
				$response['success'] = true;
				$response['messages'] = "Successfully removed";	
			}
			else {
				$response['success'] = false;
				$response['messages'] = "Error in the database while removing the brand information";
			}
		}
		else {
			$response['success'] = false;
			$response['messages'] = "Refersh the page again!!";
		}

		echo json_encode($response);
	}

	/* ATTRIBUTE VALUE SECTION */

	/* 
	* this function redirects to the addvalue page with the parent attribute id 
	*/
	public function addvalue($attribute_id = null)
	{
		if(!$attribute_id) {
			redirect('dashboard', 'refersh');
		}

		$this->data['attribute_data'] = $this->model_attributes->getAttributeData($attribute_id);

		$this->render_template('attributes/addvalue', $this->data);	
	}


	/* 
	* fetch the attribute value based on the attribute parent id 
	*/
	public function fetchAttributeValueData($attribute_parent_id)
	{
		$result = array('data' => array());

		$data = $this->model_attributes->getAttributeValueData($attribute_parent_id);

		foreach ($data as $key => $value) {

			// button
			$buttons = '
			<button type="button" class="btn btn-default" onclick="editFunc('.$value['id'].')" data-toggle="modal" data-target="#editModal"><i class="fa fa-pencil"></i></button>
			<button type="button" class="btn btn-default" onclick="removeFunc('.$value['id'].')" data-toggle="modal" data-target="#removeModal"><i class="fa fa-trash"></i></button>
			';

			$result['data'][$key] = array(
				$value['value'],
				$buttons
			);
		} // /foreach

		echo json_encode($result);
	}

	/* 
	* fetch the attribute value by the attritute value id  
	*/
	public function fetchAttributeValueById($id) 
	{
		if($id) {
			$data = $this->model_attributes->getAttributeValueById($id);
			echo json_encode($data);
		}
	}

	/* 
	* this function only creates the value 
	*/ 
	public function createValue()
	{
		$response = array();

		$this->form_validation->set_rules('attribute_value_name', 'Attribute value', 'trim|required');

		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

        if ($this->form_validation->run() == TRUE) {
        	$attribute_parent_id = $this->input->post('attribute_parent_id');

        	$data = array(
        		'value' => $this->input->post('attribute_value_name'),
        		'attribute_parent_id' => $attribute_parent_id
        	);

        	$create = $this->model_attributes->createValue($data);
        	if($create == true) {
        		$response['success'] = true;
        		$response['messages'] = 'Succesfully created';
        	}
        	else {
        		$response['success'] = false;
        		$response['messages'] = 'Error in the database while creating the brand information';			
        	}
        }
        else {
        	$response['success'] = false;
        	foreach ($_POST as $key => $value) {
        		$response['messages'][$key] = form_error($key);
        	}
        }

        echo json_encode($response);
	}

	/* 
	* It updates the attribute value based on the attribute value id 
	*/
	public function updateValue($id)
	{

		$response = array();

		if($id) {
			$this->form_validation->set_rules('edit_attribute_value_name', 'Attribute value', 'trim|required');

			$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

	        if ($this->form_validation->run() == TRUE) {
	        	$attribute_parent_id = $this->input->post('attribute_parent_id');
	        	$data = array(
	        		'value' => $this->input->post('edit_attribute_value_name'),
		    		'attribute_parent_id' => $attribute_parent_id
	        	);

	        	$update = $this->model_attributes->updateValue($data, $id);
	        	if($update == true) {
	        		$response['success'] = true;
	        		$response['messages'] = 'Succesfully updated';
	        	}
	        	else {
	        		$response['success'] = false;
	        		$response['messages'] = 'Error in the database while updated the brand information';			
	        	}
	        }
	        else {
	        	$response['success'] = false;
	        	foreach ($_POST as $key => $value) {
	        		$response['messages'][$key] = form_error($key);
	        	}
	        }
		}
		else {
			$response['success'] = false;
    		$response['messages'] = 'Error please refresh the page again!!';
		}

		echo json_encode($response);
	}

	/* 
	* it removes the attribute value id based on the attribute value id 
	*/
	public function removeValue()
	{

		$attribute_value_id = $this->input->post('attribute_value_id');

		$response = array();
		if($attribute_value_id) {
			$delete = $this->model_attributes->removeValue($attribute_value_id);
			if($delete == true) {
				$response['success'] = true;
				$response['messages'] = "Successfully removed";	
			}
			else {
				$response['success'] = false;
				$response['messages'] = "Error in the database while removing the brand information";
			}
		}
		else {
			$response['success'] = false;
			$response['messages'] = "Refersh the page again!!";
		}

		echo json_encode($response);
	}

}