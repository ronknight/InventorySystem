<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class dashboard
 *
 * @property CI_Session session
 * @property user User
 * @property General General
 * @property Menus menus 
 * @property Main_model Main_model
 */
class MY_Controller extends CI_Controller
{
    var $savePermission;

    var $editPermission;

    var $deletePermission;

    public function __construct()
    {
        parent::__construct();

        $this->load->database();
        //Load Models.............
        $this->load->model('Menus');
        $this->load->model('General');
        $this->load->model('User');
        $this->load->model('Main_model');
        $this->load->helper("url");
        $this->load->library("pagination");
        $this->load->library('ciqrcode');


    }

    //Header for Applications...................................
    public function header($title = '')
    {

        $data['parent_nav'] = $this->Menus->fetch_parent_navi();

        $data['My_Controller'] = $this;
        $data['company'] = $this->db->get_where('company_information', array('id' => 1))->row();
        $data['title'] = $data['company']->name;
        $data['content'] = "";

        $data['users'] = $this->General->fetch_CoustomQuery("SELECT uu.USER_ID, uu.logged_in, uu.CREATED_DATE,
                    uu.USER_NAME,uu.USER_ID, ug.GROUP_NAME,ug.GROUP_ID, uu.IS_ACTIVE FROM usr_group  as ug,
                    usr_user as uu
                   
                    WHERE ug.GROUP_ID	= uu.GROUP_ID");

        $data['content'] .= $this->load->view('members_table_view', $data, TRUE);
        $data['ajax_url'] = base_url() . 'members_online/';
        $this->load->view('_template/header', $data);


    }   
 
    //main dashboard (Main COntent)
    public function main_content()
    {
        $month = date('m');
        $today = date('Y-m-d');

        $data['total_users'] = $this->General->count_all('item');
        $data['active_users'] = $this->General->active_users();
        $data['total_employees'] = $this->General->total_employees();
        $data['inactive_users'] = $this->General->inactive_users();
        $data['users_list'] = $this->User->usersList();
        $data['this_cash_invoices'] = $this->Main_model->this_day_invoices(3);
        $data['this_or_invoices'] = $this->Main_model->this_day_invoices(2);
        $data['today_invoices'] = $this->Main_model->today_invoices();
        $data['thisMonth_invoices'] = $this->Main_model->thisMonth_invoices(2);
        $data['today_sales'] = $this->Main_model->thisMonth_invoices(3);
        $data['month_sales'] = $this->Main_model->thisMonth_invoices(4);
        $data['due_amounts'] = $this->Main_model->recent_purchases();
        $data["daily_st"] = $this->Main_model->get_daily_stock();
        $data['oilseal'] = $this->Main_model->topsales(1);
        $data['monoseal'] = $this->Main_model->topsales(2);
        $data['wiperseal'] = $this->Main_model->topsales(3);
        $data['dkb'] = $this->Main_model->topsales(5);
        $data['topSalesYear'] = $this->Main_model->topSalesYear();

         $data['ip_address'] = $this->input->ip_address();
        $this->load->view('_template/main', $data);
    }

    // Footer for Application
    public function footer()
    {

        $this->load->view('_template/footer');

    }

    //Fetch child Menus for sidebar by Menu Id
    public function fetchsidebar_childMenuById($child_id)
    {


        if ($this->session->userdata('group_id') == 1) {

            $query = $this->db->query("SELECT * FROM usr_menu WHERE PARENT_ID =$child_id AND SHOW_IN_MENU = 1 ORDER BY SORT_ORDER ASC");

        }


        if ($this->session->userdata('group_id') != 1) {

            $group = $this->session->userdata('group_id');

            $query = $this->db->query("SELECT * FROM usr_menu AS UM , usr_permission UP

                                        WHERE

                                        UM.MENU_ID = UP.MENU_ID

                                        AND 

                                        UP.PER_SELECT =1 

                                        AND

                                        UP.GROUP_ID = $group

                                        AND

                                        UM.PARENT_ID =$child_id AND SHOW_IN_MENU = 1 ORDER BY SORT_ORDER ASC");

        }


        return $query->result();


    }

    //SET SAVE, DELETE, UPDATE, PERMISSIONS FOR PAGES.........................
    public function Getsave_up_delPermissions()
    {


        $menu_id = $this->session->userdata("MENU_ID");

        if (!empty($menu_id) && $this->session->userdata("group_id") != 1) {

            $group_id = $this->session->userdata("group_id");

            $permissionResult = $this->General->fetch_CoustomQuery("SELECT * FROM `usr_permission`

												  WHERE GROUP_ID=$group_id AND 

												  MENU_ID=$menu_id");

            foreach ($permissionResult as $permissionResults) {


                //SET SAVE BUTTON PERMISSION...............................................................

                if ($permissionResults->PER_INSERT == 1) {


                    $this->savePermission = "<input type='submit' value='Save' class='btn btn-success btn-large' >";


                } elseif ($permissionResults->PER_INSERT == 0) {


                    $this->savePermission = "<input type='button' value='Restricted' class='btn btn-warning' >";


                }


                //SET UPDATE BUTTON PERMISSION...............................................................

                if ($permissionResults->PER_UPDATE == 1) {


                    $this->editPermission = "";


                } elseif ($permissionResults->PER_UPDATE == 0) {


                    $this->editPermission = "style='display:none;'";


                }


                //SET DELETE BUTTON PERMISSION...............................................................

                if ($permissionResults->PER_DELETE == 1) {


                    $this->deletePermission = "";


                } elseif ($permissionResults->PER_DELETE == 0) {


                    $this->deletePermission = "style='display:none;'";


                }


            }


        } elseif ($this->session->userdata("group_id") == 1) {


            $this->savePermission = "<input type='submit' value='save' class='btn btn-success' >";

            $this->editPermission = "";

            $this->deletePermission = "";


        }//End Condition......


    }


}


?>