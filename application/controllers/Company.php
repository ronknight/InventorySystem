<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 *	@author : Imran Shah
 *  @support: shahmian@gmail.com
 *	date	: 18 April, 2018
 *	Kandi Inventory Management System
 * website: kelextech.com
 *  version: 1.0
 */
class Company extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('user_id')) {
        } else {


            redirect(base_url() . 'index.php/Users/login');

        }

    }


    // company detail form

    public function add_company()
    {

        $Page = $this->General->check_url_permission_single();

        $this->header();

        $this->load->view('company/add_company');

        $this->footer();

    }

    // List companies
    public function list_company()
    {
        $group_id = $this->session->userdata("group_id");
        if($group_id !=1){
            $Page = $this->General->check_url_permission_single();

        }

        $data['company'] = $this->General->fetch_records("company");
        $this->header();
        $this->load->view('company/list_company', $data);
        $this->footer();


    }

    // Add company to database
    public function insert_company()
    {
        $data = array(
            'company_name' => $this->input->post("company_name"),
            'phone_no' => $this->input->post("phone_no"),
            'fax_no' => $this->input->post("fax_no"),
            'email' => $this->input->post("email"),
        );
        $this->load->model('Main_model');
        $response = $this->Main_model->add_record('company', $data);
        if ($response) {
            $this->session->set_flashdata('success', 'Record added Successfully..!');
            redirect(base_url() . 'index.php/company/list_company');
        }
    }

    // Update Company details
    public function update_company()
    {
        $comp_id = $this->input->post('cid');

        $comp_info = array(
            'company_name' => $this->input->post('company_name'),
            'phone_no' => $this->input->post('phone_no'),
            'fax_no' => $this->input->post('fax_no'),
            'email' => $this->input->post('email')
        );

        $where = array('company_id' => $comp_id);
        $this->load->model('Main_model');
        $response = $this->Main_model->update_record('company', $comp_info, $where);
        if ($response) {
            $this->session->set_flashdata('update', 'Record Updated Successfully..!');
            redirect(base_url() . 'index.php/company/list_company');
        }
    }
}