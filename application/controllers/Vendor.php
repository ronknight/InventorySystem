<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 *	@author : Imran Shah
 *  @support: shahmian@gmail.com
 *	date	: 18 April, 2018
 *	Kandi Inventory Management System
 *  website: kelextech.com
 *  version: 1.0
 */
class Vendor extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('user_id')) {
        } else {
            
            redirect(base_url() . 'index.php/Users/login');

        }
    }

    // Vendor Add Form
    public function add_vendor()
    {
        $this->header($title = 'Add New Vendor');

        $this->load->view('vendor/add_vendor');

        $this->footer();

    }

    // Get Vendor Table
    public function vend_index()
    {
        $this->Main_model->bps_table('vendor', 'vendor_id');

    }

    // List of Vendors
    public function list_vendors()
    {
        $this->vend_index();
        $dat = array("company " => " company.company_id  = vendor.company_id");
        $data['vendor'] = $this->Main_model->get_join($dat);
        $data['company'] = $this->Main_model->select('company');
        $this->header($title = 'Vendors List');
        $this->load->view('vendor/list_vendor', $data);
        $this->footer();


    }

    // Insert new Vendor to Database
    public function insert_vendor()
    {
        $data = array(
            'vendor_name' => $this->input->post("vendor_name"),
            'phone_no' => $this->input->post("phone_no"),
            'fax_no' => $this->input->post("fax_no"),
            'email' => $this->input->post("email"),
            'company_id' => $this->input->post("company_id"),

        );
        $this->load->model('Main_model');
        $response = $this->Main_model->add_record('vendor', $data);
        if ($response) {
            $this->session->set_flashdata('success', 'Record added Successfully..!');
            redirect(base_url() . 'index.php/Vendor/list_vendors');
        }
    }

    // Update Vendor Details
    public function update_vendor()
    {
        $comp_id = $this->input->post('cid');

        $comp_info = array(
            'vendor_name' => $this->input->post('vendor_name'),
            'phone_no' => $this->input->post('phone_no'),
            'fax_no' => $this->input->post('fax_no'),
            'email' => $this->input->post('email'),
            'company_id' => $this->input->post('company_id')
        );

        $where = array('vendor_id' => $comp_id);
        $this->load->model('Main_model');
        $response = $this->Main_model->update_record('vendor', $comp_info, $where);
        if ($response) {
            $this->session->set_flashdata('update', 'Record Updated Successfully..!');
            redirect(base_url() . 'index.php/Vendor/list_vendors');
        }
    }


}