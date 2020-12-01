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
class Purchase extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Main_model');
        if ($this->session->userdata("user_id")) {

        } else {
            redirect(base_url() . 'users/login');
        }


    }

    // Get item by search
    function get_items()
    {
        if (isset($_GET['term'])) {
            $q = strtolower($_GET['term']);

        }
        $results = $this->Main_model->get_search_results();
        echo $results;

    } 

     // Loading New Purchase form
    public function new_purchase()
    {
        $data['purchase'] = $this->Main_model->item_cat();
        $data['products'] = $this->Main_model->select('item');
        // $data['products'] = $this->db->query("SELECT * FROM stock AS s, item AS i WHERE  s.stock_qty > 0 AND i.`item_id` = s.`item_id`")->result();
        $data['vendors'] = $this->Main_model->select('vendor');
        $data['companies'] = $this->Main_model->select('company');
        $data['category'] = $this->Main_model->select('category');
        $record = $this->Main_model->get_purchase_max();
        $ddd = $record->purchase_no;
        $data['purchase_no'] = $ddd + 1;
        $this->header($title = 'New Purchase');
        $this->load->view('purchase/list_purchases', $data);
        $this->footer();


    }

    // Daily Purchase Report
    public function daily_purchase_report()
    {
        $id = $this->uri->segment(3);
        $data["purchase_item_daily"] = $this->Main_model->get_purchase_daily_report($id);
        $this->header($title = 'Daily Purchase report');
        $this->load->view('purchase/daily_purchase_report', $data);
        $this->footer();
    }

    // Daily Purchases on Dashboard
    public function daily_dash_board_purchase()
    {
        $this->header($title = 'Daily Dashboard Purchase');
        $data["daily_p"] = $this->Main_model->daily_dash_board_purchase();
        $this->load->view('purchase/daily_dash_board_purchase', $data);
        $this->footer();
    }

    // Get Products by Search
    public function get_products()
    {
        $keyword = $this->input->post('keyword');
        $keyword = strtolower($keyword);
        $data = $this->Main_model->GetRow($keyword);
        echo json_encode($data);
    }

    // Daily Dashboard Stock
    public function daily_dash_board_stock()
    {
        $this->header($title = 'Daily Dashboard Stock');
        $data["daily_st"] = $this->inventory_model->daily_dash_board_stock();
        $this->load->view('daily_dash_board_stock', $data);
        $this->footer();
    }

    // Get data for purchased
    public function get_data_for_purchased()
    {
        $item_id = $this->input->post('id');
        $count = $this->input->post('total');
        $this->load->model('Main_model');

        $where = array('item_id' => $item_id);
        $data = $this->Main_model->get_purchased1($item_id);

        if ($item_id != 0) {
            $output = '';
            $output .= '<tr id="entry_row_' . $count . '">';
            $output .= '<td id="serial_' . $count . '">' . $count . '</td>';
            $output .= '<td><input type="hidden" name="item_id[]" value="' . $data->item_id . '"> ' . $data->item_id . '</td>';
            $output .= '<input type="hidden" name="category_id[]" value="' . $data->category_id . '">';
            $output .= '<td style = "text-transform:uppercase;">'. $data->category_name .' '. $data->item_name .' '. $data->size .' '. $data->color .' #'. $data->article_no . '</td>';
            $output .= '<td><div id="spinner4">

     <input type="text" name="quantity[]" tabindex="1" id="quantity_' . $count . '" onclick="calculate_single_entry_sum(' . $count . ')" size="2" value="1" class="form-control col-lg-2" onkeyup="calculate_single_entry_sum(' . $count . ')">

                                </div>
                            </div></td>';
            $output .= '<td><input type="text" name="unit_price[]"  id="unit_price_' . $count . '" size="6" value="' . $data->purchase_rate . '"></td>';
            $output .= '<td>
        <input type="text" name="purchase_amount[]" readonly="readonly" id="single_entry_total_' . $count . '" size="6" value="' . $data->purchase_rate . '">
        </td>';
            $output .= '<td>
<i style="cursor: pointer;" id="delete_button_' . $count . '" onclick="delete_row(' . $count . ')" class="fa fa-trash"></i>
				</td>';
            $output .= '</tr>';

            echo $output;
        } else {
            echo $output = 0;
        }

    }

     // Insert new Purchase to Database
    function insert_purchase()
    {
        $this->load->helper('date');
        $item_id = $this->input->post('item_id');
        $category_id = $this->input->post('category_id');
        $itemID = $this->input->post('unit_price');
        $unit_price = $this->input->post('unit_price_');
        $quantity = $this->input->post('quantity');
        $purchase_code = $this->input->post('purchase_code');
        $purchase_amount = $this->input->post('purchase_amount');
        $timezone = 'Asia/Karachi';
        date_default_timezone_set($timezone);

        $date_arr = explode('/', $this->input->post('purchase_date'));
        $date = $date_arr[2] . "-" . $date_arr[0] . "-" . $date_arr[1];

        for ($i = 0; $i < count($itemID); $i++) {
            extract($_POST);

            if (strlen($unit_price[$i]) > 0) {
                $data1 = $this->Main_model->check_stock_record($item_id[$i], $category_id[$i]);
                if ($data1) {
                    //////////////////////////////////////////////////////////////////////////////////////////
                    $data = $this->Main_model->get_stock_qty($item_id[$i], $category_id[$i]);
                    $id = $data->stock_qty;
                    $new_id = $id + $quantity[$i];

                    $data = array(
                        "stock_qty" => $new_id,
                        "purchase_rate" => $unit_price[$i],

                    );

                    

                    $where = array('item_id' => $item_id[$i], 'category_id' => $category_id[$i]);
                    $this->Main_model->update_record('stock', $data, $where);

                    $data121 = array(
                        "purchase_rate" => $unit_price[$i],
                    );
                    $where121 = array(
                        "item_id" => $item_id[$i],
                    );

                    $this->Main_model->update_record('item', $data121, $where121);

                } else {
                    $data = array(
                        "item_id" => $item_id[$i],
                        "category_id" => $category_id[$i],
                        "stock_qty" => $quantity[$i],
                        "purchase_rate" => $unit_price[$i],
                    );
                    $this->Main_model->add_record('stock', $data);
                }
            }

            $maxID = $this->Main_model->get_purchase_max1();
            $max = $maxID->purchase_id;
            $pu_id = $max + 1;
            $purchase_data = array(
                'purchase_id' => $pu_id,
                'purchase_no' => $purchase_code,
                'item_id' => $item_id[$i],
                'category_id' => $category_id[$i],
                'purchase_qty' => $quantity[$i],
                'purchase_amount' => $purchase_amount[$i],
                'purchase_rate' => $unit_price[$i],
                'expire_date' => date('Y-m-d')
            );


            $data_entry = $this->Main_model->add_record('purchase', $purchase_data);

        }//for loop
        $vendor_id = $this->input->post('vendor_id');
        $company_id = $this->input->post('company_id');
        $paymentTotal = $this->input->post('paymentTotal');
        $discount = $this->input->post('discount');
        $due_amount = $this->input->post('due_amount');
        $sub_total = $this->input->post('sub_total');
        $pur = "PUR-" . $purchase_code;
        $Purchase_comp_Ins = array(
            'purchase_no' => $purchase_code,
            'pur_no' => $pur,
            'purchase_date' => $date,
            'vendor_id' => $vendor_id,
            'company_id' => $company_id,
            'purchase_amount_total' => $paymentTotal,
            'purchase_discount' => $discount,
            'due_amount' => $due_amount,
            'grand_total' => $sub_total,
            'purchase_status' => 1,
            'purchase_user_id' => $this->session->userdata('user_id')
        );
        $data_entry = $this->Main_model->add_record('purchase_company', $Purchase_comp_Ins);

        if ($data_entry) {
            $this->session->set_flashdata('success', 'Record added Successfully..!');
            redirect(Base_url() . 'index.php/Purchase/show_purchase_history/' . $purchase_code . '');
        }

    }
 
    // Purchase History
    public function purchase_history()
    {
        $this->header($title = 'Purchase History');
        $data['purchase'] = $this->Main_model->select_purchases();
        $this->load->view('purchase/purchase_history', $data);
        $this->footer();
    }

    // Show single Purchase Invoice details
    public function show_purchase_history()
    {
        $id = $this->uri->segment(3);
        $this->header($title = "Invoice");
        $data['history'] = $this->Main_model->get_purchaseHistory($id);
        $sql = $this->db->query("select * from purchase_company as p, company as c where purchase_no=$id AND c.company_id = p.company_id");
        $data['amount'] = $sql->row();
        $this->load->view('purchase/item_purchase_history', $data);
        $this->footer();
    }

    // Take Payments if due
    public function take_payments()
    {
        $id = $this->input->post('id');
        $p_no = $this->input->post('p_no');

        if ($id == 2) {
            $query = $this->db->query("select grand_total, due_amount from purchase_company where purchase_no = $p_no")->row();
            $grand = $query->grand_total;
            $due = $query->due_amount;
            $update = $this->db->query("update purchase_company set due_amount = '0.00', grand_total = $grand + $due where purchase_no = $p_no");
            $data = '';
            if ($update) {
                $data = array("status" => 1, "confirm" => "Record Updated");
            }
            echo json_encode($data);
            exit;
        }


    }

    public function item_purchase()
    {
        $this->header($title = 'Item Purchase History');
        $data['purchase'] = $this->Main_model->select('purchase');
        $data['category'] = $this->Main_model->select('category');
        $data['item'] = $this->Main_model->select('item');
        $data['purchase_company'] = $this->Main_model->select('purchase_company');
        $data['company'] = $this->Main_model->select('company');
        $this->load->view('purchase/item_history', $data);
        $this->footer();
    }

}