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
/**
 * Class dashboard
 *
 * @property CI_Session session
 * @property Main_model Main_model
 */
//Extending all Controllers from Core Controller (MY_Controller)
class Employees extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('user_id')) {

        } else {
            redirect(base_url() . 'index.php/Users/login');

        }

    }

    // A view function for add new employee
    public function add_employee()
    {
        $this->header();

        $this->load->view('employee/add_employee');

        $this->footer();

    }

    // Adding new employees
    public function insert_employee()
    {
        $uploaddir = "uploads/images/";
        if ($_FILES['file_picture']['name'] != '') {

            $data_upload = $uploaddir . basename($_FILES['file_picture']['name']);
            $imageFileType = strtolower(pathinfo($data_upload,PATHINFO_EXTENSION));
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif" ) {
                $this->session->set_flashdata('msg', '<div class="alert alert-warning alert-dismissable">
   <button type="button" class="close" data-dismiss="alert"
      aria-hidden="true">
      &times;
   </button>
   <span>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</span>
</div>');
                //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
                redirect(base_url().'index.php/employees/add_employee');

            }

            if (move_uploaded_file($_FILES['file_picture']['tmp_name'], $data_upload)) {

                $picture = $data_upload;
            } else {
                $picture = '';


            }
        } else {

            $picture = 'uploads/images/no_avatar.jpg';
        }


        extract($_POST);

        $this->load->model('Main_model');
        $record = $this->Main_model->fetch_maxid("employee_profile");
        foreach ($record as $record) {

            $Maxtype = $record->EMP_ID;
        }
        $EMP_ID = $Maxtype + 1;
        $user_id = $this->session->userdata('user_id');
        $data = array(
            'EMP_ID' => $EMP_ID,
            'EMP_NAME' => $emp_name,
            'EMP_EMAIL' => $fname,
            'EMP_ADDRESS' => $curr_address,
            'EMP_GENDER' => $per_address,
            'EMP_PHONE' => $contact_no,
            'EMP_CELL' => $mobile_no,
            'EMP_DATE' => date('Y-m-d'),
            'CREATED_DATE' => date('Y-m-d'),
            'CREATED_USERID' => $user_id

        );
        if ($picture != '') {

            $data['EMP_PIC'] = $picture;
        }

        $this->db->insert('employee_profile', $data);
        $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissable">
   <button type="button" class="close" data-dismiss="alert"
      aria-hidden="true">
      &times;
   </button>
   <span>Record added Successfully..!</span>
</div>');
        redirect(base_url() . 'index.php/employees/employee_list');


    }


    // Updating employee information
    public function update_employee()
    {
        extract($_POST);


        $uploaddir = "uploads/images/";
        if ($_FILES['file_picture']['name'] != '') {
            $picture = '';
            $data_upload = $uploaddir . basename($_FILES['file_picture']['name']);
            if (move_uploaded_file($_FILES['file_picture']['tmp_name'], $data_upload)) {

                $picture = $data_upload;
            } else {
                $picture = '';
            }
        } else {

            $picture = '';
        }
        $user_id = $this->session->userdata('user_id');
        $data = array(
            'EMP_NAME' => $emp_name,
            'EMP_EMAIL' => $emp_email,
            'EMP_ADDRESS' => $caddress,
            'EMP_GENDER' => $emp_gender,
            'EMP_PHONE' => $emp_phone,
            'EMP_CELL' => $emp_cell,
            'EMP_DATE' => date('Y-m-d'),
            'CREATED_DATE' => date('Y-m-d'),
            'CREATED_USERID' => $user_id

        );
        if ($picture != '') {

            $data['EMP_PIC'] = $picture;
        }

        $where = array('EMP_ID' => $emp_id);
        $this->db->update('employee_profile', $data, $where);
        $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissable">
   <button type="button" class="close" data-dismiss="alert"
      aria-hidden="true">
      &times;
   </button>
   <span>Record Updated Successfully..!</span>
</div>');

        redirect(base_url() . 'index.php/employees/employee_list');


    }

    // List of all employees
    public function employee_list()
    {
        $data['employees'] = $this->General->fetch_records("employee_profile");
        $this->header($title = 'Employees List');
        $this->load->view('employee/employee_list', $data);
        $this->footer();

    }
    // Employee details
    public function employee_detail()
    {
        $id = $this->uri->segment(3);
        $where = array('EMP_ID' => $id);
        $this->header();
        $data['empDetail'] = $this->Main_model->single_row('employee_profile', $where, 's');
        $this->load->view('employee/emp_details', $data);
        $this->footer();
    }
    // Edit employee form
    public function edit_employee($id)
    {
       $data['record'] = $this->General->select_where('employee_profile',array('EMP_ID'=>$id));
        $this->header();
        $this->load->view('employee/edit_employee',$data);
        $this->footer();

    }

}