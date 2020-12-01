<?php


if (!defined('BASEPATH'))

    exit('No direct script access allowed');

/*
 *	@author : Imran Shah
 *  @support: shahmian@gmail.com
 *	date	: 18 October, 2017
 *	Kandi Inventory Management System
 *	http://kelextech.com
 *  version: 1.0
 */

class Menus extends CI_Model
{
    function index()
    {


    }

    //fetch parent menu
    public function fetch_parent_menu()
    {


        $where = array(

            "PARENT_ID" => 0

        );


        $this->db->select()->from('usr_menu')->where($where)->order_by('MENU_ID', 'asc');

        $query = $this->db->get();

        return $query->result();

    }

    //FETCH CHILD MENU
    public function fetch_child_menu($menu_id)
    {


        $where = array(

            "PARENT_ID" => $menu_id,


        );

        $this->db->select()->from('usr_menu')->where($where)->order_by('MENU_ID', 'asc');
        $query = $this->db->get();
        return $query->result();
    }


    //fetch permissions for navigations (menus)
    public function fetch_permission_navi()
    {

        $this->db->select()->from('usr_menu');

        $query = $this->db->get();

        return $query->result();


    }

    //fetch parent menus
    public function fetch_parent_navi()
    {


        if ($this->session->userdata('group_id') == 1) {


            $query = $this->db->query("SELECT * FROM usr_menu WHERE PARENT_ID =0 AND SHOW_IN_MENU = 1 ORDER BY SORT_ORDER ASC");


        }


        if ($this->session->userdata('group_id') != 1) {

            $group = $this->session->userdata('group_id');


            $query = $this->db->query("SELECT * FROM usr_menu AS UM , usr_permission AS UP

                                        WHERE

                                        UM.MENU_ID = UP.MENU_ID

                                        AND 

                                        UP.PER_SELECT =1 

                                        AND

                                        UP.GROUP_ID =$group      

                                        AND

                                        UM.PARENT_ID =0 AND SHOW_IN_MENU = 1 ORDER BY UM.SORT_ORDER ASC");


        }

        return $query->result();


    }

    //fetch child menus
    public function fetch_child_navi()
    {


        if ($this->session->userdata('group_id') == 0) {


            $query = $this->db->query("SELECT * FROM usr_menu WHERE PARENT_ID !=0 AND SHOW_IN_MENU = 1 ORDER BY SORT_ORDER ASC");


        }


        if ($this->session->userdata('group_id') != 0) {

            $group = $this->session->userdata('group_id');

            $query = $this->db->query("SELECT * FROM usr_menu AS UM , usr_permission UP

                                        WHERE

                                        UM.MENU_ID = UP.MENU_ID

                                        AND 

                                        UP.PER_SELECT =1 

                                        AND

                                        UP.GROUP_ID = $group

                                        AND

                                        UM.PARENT_ID !=0 AND SHOW_IN_MENU = 1 ORDER BY SORT_ORDER ASC");


        }


        return $query->result();


    }

}


?>