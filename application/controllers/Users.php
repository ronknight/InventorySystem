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
 * Class users
 *
 * @property CI_Session session
 * @property User User
 * @property General General
 * @property Main_model Main_model
 * @property CI_Input input
 * @property CI_URI uri
 */
//Extending all Controllers from Core Controller (MY_Controller)
class Users extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();

    }

    /*
     * when the software is installed
     * it redirects to this function
     * */
    public function login()
    {

        $this->load->view('users/login');

    }

    /*
     * Logging Out the user or Sign Out the user
     * logout function is in user model
     * */
    public function Logout()
    {

        $this->User->logout();

    }

    /*
     * Authentication function when user try's to login to his system.
     *
     * */
    public function loginauthen()
    {
        $email = $this->input->post('u_email');
        $password = $this->input->post('u_password');
        $login = $this->User->AuthLogin($email, $password);
        // $ip_address = $this->input->ip_address();
        $blockIP = array("::1");
        if(in_array($_SERVER['REMOTE_ADDR'], $blockIP))
        {
            if ($login) {
                $this->load->library('session');
                $this->session->set_userdata("user_id", $login['USER_ID']);
                $this->session->set_userdata("group_id", $login['GROUP_ID']);
                $this->session->set_userdata("username", $login['USER_NAME']);
                $user_id = $this->session->userdata("user_id");
                $response = $this->Main_model->getUserDetails($user_id);
                if ($this->session->userdata('group_id') == 1) {
                    $this->session->set_userdata("employee", "SUPERADMIN");
                } else {
                    $this->session->set_userdata("employee", $response->EMP_NAME);
                    $this->session->set_userdata("emp_pic", $response->EMP_PIC);
                }
                if ($login['GROUP_ID'] == 1) {
                    redirect(base_url() . 'index.php/Dashboard');
                } else {
                    redirect(base_url() . 'index.php/Dashboard');
                }
            }
             else {
                $this->session->set_flashdata('msg', 'Username Or Password is Invalid');
                redirect(base_url() . 'index.php/Users/login');
            }
        }
        else {
            // $this->session->set_flashdata('msg', 'Internet Protocol Address is Invalid');
            redirect(base_url() . 'index.php/errors/html/error_404');
        }
    }

    //Load View Form For User Creation.........
    public function add_user()
    {

        //Get employee list for drop down menu..................................
        $data['employeelist'] = $this->General->fetch_records("employee_profile");
        $data['grouplist'] = $this->General->fetch_records("usr_group");
        //Get user's list........................................................
        $data['userlist'] = $this->General->fetch_CoustomQuery("SELECT * FROM employee_profile AS emp,
		                                                            usr_group AS ug, usr_user AS uu
																	WHERE uu.GROUP_ID = ug.GROUP_ID
																	AND uu.EMP_NO = emp.EMP_ID");


        $this->header($title = 'Add User');
        $this->load->view('users/add_user', $data);
        $this->footer();

    }

    //Get values and Create User................
    public function create_user()
    {

        $record = $this->General->fetch_maxid("usr_user");
        foreach ($record as $record) {
            $MaxGroup = $record->USER_ID;
        }
        $user_no = $MaxGroup + 1;
        $dt = date("Y-m-d H:i:s");
        $userid = $this->session->userdata('user_id');
        $password = $this->input->post('password');
        $username = $this->input->post('username');
        $data_user = array(

            'USER_ID' => $user_no,
            "USER_NAME" => $username,
            "U_PASSWORD" => $password,
            "EMP_NO" => $this->input->post('emp_no'),
            "GROUP_ID" => $this->input->post('group_no'),
            "IS_ACTIVE" => 1,
            "CREATED_USERID" => $userid,
            "CREATED_DATE" => $dt

        );

        $this->db->insert('usr_user', $data_user);
        $this->session->set_flashdata('msg', 'Add Successfully');
        redirect(base_url() . "index.php/Users/add_user");

    }

    // List all users
    public function list_users()
    {
        $this->header($title = 'Users List');
        $this->load->view();
        $this->footer();

    }

    // Delete specific user
    public function delete_users($id)
    {
        $this->db->where('USER_ID', $id);
        $this->db->delete('usr_user');

        $this->session->set_userdata('msg', 'User has been deleted successfully');
        redirect(base_url() . 'index.php/Users/add_user');

    }

    //status of user (Active)
    public function activeStatus()
    {
        $id = $this->uri->segment(3);
        $update = array(
            'IS_ACTIVE' => '1'

        );
        $where = array(
            'USER_ID' => $id

        );
        $data['users'] = $this->General->update_record($update, $where, 'usr_user');
        redirect(base_url() . "index.php/Users/add_user");
    }

    //status of user (In-active)
    public function deactiveStatus()
    {

        $id = $this->uri->segment(3);
        $update = array(
            'IS_ACTIVE' => '0'

        );
        $where = array(
            'USER_ID' => $id

        );
        $data['users'] = $this->General->update_record($update, $where, 'usr_user');
        redirect(base_url() . "index.php/Users/add_user");
    }

    // Registering a new User Form
    public function register()
    {
        $this->load->view('users/register');

    }

    // Registering User Insert
    public function registration()
    {
        extract($_POST);
        $full_name = $this->input->post('full_name');
        $user_name = $this->input->post('user_name');
        $password = $this->input->post('password');

        $data2 = array(
            'EMP_NAME' => $full_name,
            'CREATED_DATE' => date('Y-m-d')
        );
        $this->db->insert('employee_profile', $data2);

        $maxEmp = $this->General->find_maxid('EMP_ID', 'employee_profile');

        $record = $this->General->fetch_maxid("usr_user");
        foreach ($record as $record) {
            $MaxGroup = $record->USER_ID;
        }
        $user_no = $MaxGroup + 1;
        $data = array(
            'USER_ID' => $user_no,
            'USER_NAME' => $user_name,
            'U_PASSWORD' => sha1(md5($password)),
            'EMP_NO' => $maxEmp->EMP_ID,
            'GROUP_ID' => 2,
            'IS_ACTIVE' => 0,
            'CREATED_DATE' => date('Y-m-d')
        );
        $this->db->insert('usr_user', $data);
        $this->session->set_flashdata('register', 'Registration is successful. You Can now Log in using your credentials');
        redirect(base_url() . 'index.php/Users/login');
    }

    // Change Password View
    public function change_password()
    {
        $userid = $this->session->userdata('userid');
        $this->header();
        $this->load->view('users/user_change_password');
        $this->footer();
    }

    // Changing password by user
    public function changePasswordByUser()
    {
        extract($_POST);
        $userid = $this->session->userdata('user_id');
        $time = date("Y-m-d H:i:s");


        $old_pass = sha1(md5($this->input->post('old_pass'))); // ab perfect ha acha sabr chor ,mouse sabko krta hun
        $new_pass = sha1(md5($this->input->post('new_pass')));
        $new_pass2 = sha1(md5($this->input->post('new_pass2')));

        $check_old_pass = "SELECT `U_PASSWORD` FROM `usr_user` WHERE `USER_ID` = $userid";
        $check_cout = $this->General->fetch_CoustomQuery($check_old_pass);
        foreach ($check_cout as $check) {
            $count = $check->U_PASSWORD;
        }
        if ($new_pass == $new_pass2) {
            if ($count == $old_pass) {
                $tbl = "usr_user";
                $update = array(
                    "U_PASSWORD" => $new_pass,
                    "UPDATED_USERID" => $userid,
                    "UPDATED_DATE" => $time
                );
                $where = array(
                    "USER_ID" => $userid
                );
                $this->General->update_record($update, $where, $tbl);
                $msg = "Password Changed Successfully. Please Login again with your new password.";
                $this->General->set_msg($msg, 1);
                redirect(base_url() . "index.php/Users/change_password");
            } else {
                $msg = "Password cannot be changed. Old password does not match with existing password.";
                $this->General->set_msg($msg, 2);
                redirect(base_url() . "index.php/Users/change_password");
            }
        } else {

            $msg = "Password cannot be changed. Please enter a valid new password twice.";
            $this->General->set_msg($msg, 2);
            redirect(base_url() . "index.php/Users/chage_password");
        }
    }

    // Changing password by admin
    public function change_pass_by_admin($id)
    {

        $userid = $this->session->userdata('userid');
        $userlog_id = $this->session->userdata('userlog_id');
        $time = date("Y-m-d H:i:s");

        $username = "SELECT `USER_NAME` FROM `usr_user` WHERE `USER_ID` = $id";
        $check_cout = $this->General->fetch_CoustomQuery($username);
        foreach ($check_cout as $check) {
            $count = $check->USER_NAME;
        }
        $pass = sha1(md5($count));
        $tbl = "usr_user";
        $update = array(
            "U_PASSWORD" => $pass,
            "U_USER_ID" => $userid,
            "U_DATE_TIME" => $time,
            'UUSERLOG_ID' => $userlog_id
        );
        $where = array(
            "USER_ID" => $id
        );
        $this->General->update_record($update, $where, $tbl);
        $msg = "Password has been reset for the user. New Password is similar to the username.";
        $this->General->set_msg($msg, 1);

        if ($this->session->userdata('group_id') == 17) {
            redirect(base_url() . 'index.php/Users/add_districtuser');
        } else {
            redirect(base_url() . "index.php/Users/user_list");
        }
    }
}
