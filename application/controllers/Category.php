<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 *	@author : Imran Shah
 *  @support: shahmian@gmail.com
 *	date	: 18 April, 2018
 * website: kelextech.com
 *	Kandi Inventory Management System
 *  version: 1.0
 */
class Category extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Check if user is logged in or id exists in session
        if ($this->session->userdata('user_id')) {

        } else {

            redirect(base_url() . 'index.php/Users/login');

        }
    }

    // List Categories
    public function list_category()
    {
        $group_id = $this->session->userdata("group_id");
        if($group_id !=1){
            $Page = $this->General->check_url_permission_single();
        }
        $data['category'] = $this->General->fetch_records("category");
        $this->header($title = 'Category List');

        $this->load->view('category/list_category', $data);

        $this->footer();

    }

    // Add new category to Databse
    public function insert_category()
    {
        extract($_POST);
        $data = array(
            'category_name' => $category_name
        );
        $response = $this->Main_model->add_record('category', $data);
        if ($response) {
            $this->session->set_flashdata('success', 'Record added Successfully..!');
            redirect(base_url() . 'index.php/category/list_category');
        }
    }

    // Update category Details
    public function update_category()
    {
        $cat_id = $this->input->post('cid');

        $category = array(
            'category_name' => $this->input->post('category_name'),
        );
        $where = array('category_id' => $cat_id);
        $this->load->model('Main_model');
        $response = $this->Main_model->update_record('category', $category, $where);
        if ($response) {
            $this->session->set_flashdata('info', 'Record Updated Successfully..!');
            redirect(base_url() . 'index.php/category/list_category');
        }
    }


}