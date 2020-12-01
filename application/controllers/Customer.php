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
class Customer extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('user_id')) {
        } else {

 
            redirect(base_url() . 'index.php/Users/login');

        }

    }

 
    // Add Customer Form
    public function add_customer()
    {
        $Page = $this->General->check_url_permission_single();
        $this->header($title = 'Add Customer');

        $this->load->view('customer/add_customer');

        $this->footer();

    }
    // List Customers
    public function list_customers()
    {
        $group_id = $this->session->userdata("group_id");
        if($group_id !=1){
            $Page = $this->General->check_url_permission_single();
        }
        $data['customers'] = $this->General->fetch_records("customer");
        $this->header($title = 'Customers List');
        $this->load->view('customer/list_customers', $data);
        $this->footer();


    }
    // Customer Details
    public function customer_detail()
    {
        $Page = $this->General->check_url_permission_single();
        $this->header($title = 'Customer Detail');

        $this->load->view('customer/cust_details');

        $this->footer();
    }
    // Insert new Customer to Databse
    public function insert_customer()
    {
        extract($_POST);
        $data = array(
            'customer_name' => $this->input->post("customer_name"),
            'phone_no' => $this->input->post("phone_no"),
            'fax_no' => $this->input->post("fax_no"),
            'email' => $this->input->post("email"),
            'address' => $this->input->post("address"),
            'trn' => $this->input->post("trn"),
        );
        
        $response = $this->Main_model->add_record('customer', $data);
        if ($response) {
            $this->session->set_flashdata('msg', 'Customer added Successfully..!');
            redirect(base_url() . 'index.php/customer/list_customers');
        }
    }
    // Update Customer Details
    public function update_customer()
    {
        $custid = $this->input->post('cid');

        $cust_info = array(
            'customer_name' => $this->input->post('cname'),
            'phone_no' => $this->input->post('caddress'),
            'fax_no' => $this->input->post('coldno'),
            'email' => $this->input->post('ccell')
        );


        $where = array('customer_id' => $custid);
        $this->load->model('Main_model');
        $response = $this->Main_model->update_record('customer', $cust_info, $where);
        if ($response) {
            $this->session->set_flashdata('msg', 'Customer Updated Successfully..!');
            redirect(base_url() . 'index.php/customer/list_customers');
        } else {
            $this->session->set_flashdata('warning', 'Customer didnt updated..!');
            redirect(base_url() . 'index.php/customer/list_customers');


        }
    }

    public function sale_index()
    {
        $this->Main_model->bps_table('sales', 'sales_no');

    }

    public function history()
    {
        $id = $this->uri->segment(3);
        $this->sale_index();
        $dat = array(
            "customer " => " customer.customer_id = sales.customer_id",
            "receipt" => "receipt.receipt_id=sales.payment"
        );

        $data['sales'] = $this->Main_model->get_join($dat);
        $data['receipt'] = $this->Main_model->select('receipt');
        $data['total_purchase'] = $this->Main_model->total_purchase($id);
        $data['total_payment'] = $this->Main_model->total_payment($id);
        $data['total_balance'] = $this->Main_model->total_balance($id);


        $this->header();
        $this->load->view('customer/customer_purchase', $data);
        $this->footer();
    } 

    public function history_detail()
    { 
        $id = $this->uri->segment(3);
        $data['salesHist'] = $this->Main_model->getSales_history($id);
        $data['changeReceipt'] = $this->Main_model->getSales_receipt($id);
        $this->header();
        $data['category'] = $this->Main_model->select('category');
        $data['amount'] = $this->Main_model->getSale_Details($id);
        $data['company_info'] = $this->General->get_company_info();
        $this->load->view('sales/item_sales_historynew', $data);
        $this->footer();
        // print_r('hello');
    }

    public function sales_report()
    {   
        $uri = $this->uri->segment(3);
        $data['items'] = $this->Main_model->select('item');
        $this->header($title = 'Statement of Account');
        $this->load->view('customer/pre_charge_report',$data);
        $this->footer();

    }

    public function salesReport() 
    {      

        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');
        $uri = $this->input->post('uri');
        $start_date1 = date('Y-m-d', strtotime($start_date));
        $end_date1 = date('Y-m-d', strtotime($end_date));
        $customer_name = $this->Main_model->select('customer');
        
        // $data['start'] = $start_date;
        // $data['end'] = $end_date;
        // $data['uri']    = $uri;
        // $data['customer'] = $this->Main_model->select('customer');
        // $data['invoice'] = $this->Main_model->invoice_get($start_date1, $end_date1, $uri);
        $start = $start_date;
        $end = $end_date;
        $customer = $this->Main_model->select('customer');
        $invoice = $this->Main_model->invoice_get($start_date1, $end_date1, $uri);
        // $this->header();
        // //print_r($data);
        // $this->load->view('customer/charge_report',$data);
        // $this->footer();
        foreach($customer as $cust) {
            if($uri == $cust->customer_id){
        $fileName = $cust->customer_name.'.xlsx';
        }}  
    // load excel library
        $this->load->library('excel');
        // $empInfo = $this->Main_model->employeeList();
        $objPHPExcel = new PHPExcel();
        $objPHPExcel->setActiveSheetIndex(0);
        // set Header
        $style = array(
            'alignment' => array(
                'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
            )
        );

        $objPHPExcel->getDefaultStyle()->applyFromArray($style);
        $objPHPExcel->getActiveSheet()->mergeCells('A1:C1');

        $objPHPExcel->getActiveSheet()->SetCellValue('A1', 'Category');
        // $objPHPExcel->getActiveSheet()->SetCellValue('B1', 'Size');
        // $objPHPExcel->getActiveSheet()->SetCellValue('C1', 'Brand');
        // $objPHPExcel->getActiveSheet()->SetCellValue('D1', 'Type');
        // $objPHPExcel->getActiveSheet()->SetCellValue('E1', 'Purchase Rate');       
        // set Row
        // $rowCount = 2;
        // foreach ($empInfo as $element) {
        //     $objPHPExcel->getActiveSheet()->SetCellValue('A' . $rowCount, $element['category_name']);
        //     $objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, $element['item_name']);
        //     $objPHPExcel->getActiveSheet()->SetCellValue('C' . $rowCount, $element['size']);
        //     $objPHPExcel->getActiveSheet()->SetCellValue('D' . $rowCount, $element['color']);
        //     $objPHPExcel->getActiveSheet()->SetCellValue('E' . $rowCount, $element['purchase_rate']);
        //     $rowCount++;
        // }
        $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
        $objWriter->save('C:/Users/Jeanica Hy Trad/Downloads/' . $fileName);
    // download file
        header("Content-Type: application/vnd.ms-excel");
        redirect(base_url() . 'index.php/customer/sales_report/' . $fileName);
    }

    public function bps_table()
    {   
       $this->Main_model->bps_table('sales_detail','sales_id');
    }

    public function collection_receipt()
    {
        $uri = $this->uri->segment(3);
        // $data['purchase'] = $this->Main_model->item_cat();
        $data['sales'] = $this->Main_model->select_unique('sales', 'customer_id', $uri);
        // $data['receipt'] = $this->Main_model->select('receipt');
        $data['customers'] = $this->Main_model->select_unique('customer', 'customer_id', $uri);
        // $data['companies'] = $this->Main_model->select123('company', 'company_name');
        // $data['category'] = $this->Main_model->select123('category', 'category_name');
        $record = $this->Main_model->get_sales_max();
        $ddd = $record->sales_no;
        $data['sales_no'] = $ddd + 1;
        $this->header($title = 'Collection Receipt');
        $this->load->view('customer/collection_receipt', $data);
        $this->footer();


    }

    public function get_data_for_purchased()
    {
        $sales_no = $this->input->post('id');
        $count = $this->input->post('total');
        $this->load->model('Main_model');

        $where = array('sales_no' => $sales_no);
        $data = $this->Main_model->get_purchased($sales_no);

        if ($sales_no != 0) {
            $output = '';
            $output .= '<tr id="entry_row_' . $count . '">';
            $output .= '<td id="serial_' . $count . '">' . $count . '</td>';
            $output .= '<td><input type="hidden" name="date[]" value="' . $data->sales_date . '">' . date('M-d-Y',strtotime($data->sales_date)) . '</td>';
            $output .= '<td><input type="hidden" name="payment_mode[]" value="' . $data->payment_mode . '">' . $data->payment_mode . '</td>';
            $output .= '<td><input type="hidden" name="po_number[]" value="' . $data->po_number . '">' . $data->po_number . '</td>';
     //        $output .= '<td><div id="spinner4">

     // <input type="text" name="quantity[]" tabindex="1" id="quantity_' . $count . '" onclick="calculate_single_entry_sum(' . $count . ')" size="2" value="1" class="form-control col-lg-2" onkeyup="calculate_single_entry_sum(' . $count . ')">

     //                            </div>
     //                        </div></td>';
            $output .= '<td><input type="text" name="unit_price[]"  id="unit_price_' . $count . '" size="6" value="' . $data->sales_amount_total . '"></td>';
            $output .= '<td>
        <input type="text" name="purchase_amount[]" readonly="readonly" id="single_entry_total_' . $count . '" size="6" value="' . $data->sales_amount_total . '">
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

    function insert_purchase()
    {
        // $this->load->helper('date');
        // $item_id = $this->input->post('item_id');
        // $category_id = $this->input->post('category_id');
        // $itemID = $this->input->post('unit_price');
        // $unit_price = $this->input->post('unit_price_');
        // $quantity = $this->input->post('quantity');
        // $purchase_code = $this->input->post('purchase_code');
        // $purchase_amount = $this->input->post('purchase_amount');
        // $timezone = 'Asia/Karachi';
        // date_default_timezone_set($timezone);

        // $date_arr = explode('/', $this->input->post('purchase_date'));
        // $date = $date_arr[2] . "-" . $date_arr[0] . "-" . $date_arr[1];

        // for ($i = 0; $i < count($itemID); $i++) {
        //     extract($_POST);

        //     if (strlen($unit_price[$i]) > 0) {
        //         $data1 = $this->Main_model->check_stock_record($item_id[$i], $category_id[$i]);
        //         if ($data1) {
        //             //////////////////////////////////////////////////////////////////////////////////////////
        //             $data = $this->Main_model->get_stock_qty($item_id[$i], $category_id[$i]);
        //             $id = $data->stock_qty;
        //             $new_id = $id + $quantity[$i];

        //             $data = array(
        //                 "stock_qty" => $new_id,
        //                 "purchase_rate" => $unit_price[$i],

        //             );

                    

        //             $where = array('item_id' => $item_id[$i], 'category_id' => $category_id[$i]);
        //             $this->Main_model->update_record('stock', $data, $where);

        //             $data121 = array(
        //                 "purchase_rate" => $unit_price[$i],
        //             );
        //             $where121 = array(
        //                 "item_id" => $item_id[$i],
        //             );

        //             $this->Main_model->update_record('item', $data121, $where121);

        //         } else {
        //             $data = array(
        //                 "item_id" => $item_id[$i],
        //                 "category_id" => $category_id[$i],
        //                 "stock_qty" => $quantity[$i],
        //                 "purchase_rate" => $unit_price[$i],
        //             );
        //             $this->Main_model->add_record('stock', $data);
        //         }
        //     }

        //     // $maxID = $this->Main_model->get_purchase_max1();
        //     // $max = $maxID->purchase_id;
        //     // $pu_id = $max + 1;
        //     $purchase_data = array(
        //         'purchase_id' => $pu_id,
        //         'purchase_no' => $purchase_code,
        //         'item_id' => $item_id[$i],
        //         'category_id' => $category_id[$i],
        //         'purchase_qty' => $quantity[$i],
        //         'purchase_amount' => $purchase_amount[$i],
        //         'purchase_rate' => $unit_price[$i],
        //         'expire_date' => date('Y-m-d')
        //     );


        //     $data_entry = $this->Main_model->add_record('purchase', $purchase_data);

        // }//for loop
        $this->load->helper('date');
        $timezone = 'Asia/Karachi';
        date_default_timezone_set($timezone);
        $date_arr = explode('/', $this->input->post('purchase_date'));
        $date = $date_arr[2] . "-" . $date_arr[0] . "-" . $date_arr[1];
        $customer_id = $this->input->post('customer_id');
        $company_id = $this->input->post('company_id');
        $paymentTotal = $this->input->post('paymentTotal');
        $discount = $this->input->post('discount');
        $itemID = $this->input->post('unit_price');
        $due_amount = $this->input->post('due_amount');
        $sub_total = $this->input->post('amount');
        $payment = $this->input->post('payment');
        $sales_date = $this->input->post('sales_date');
        $pur = $this->input->post('purchase_code');
        $post_data = array(
            // 'sales' => $purchase_code,
            'payment_mode' => $this->input->post('purchase_code'),
            'sales_date' => $date,
            'customer_id' => $this->input->post('customer_id'),
            'company_id' => "1",
            'sales_amount_total' => $sub_total,
            'sales_status' => 1,
            'sales_discount' => $discount,
            'paid' => $paymentTotal,
            'balance' => $due_amount,
            'grand_total' => $sub_total,
            'payment' => $payment,
            // 'purchase_status' => 1,
            // 'purchase_user_id' => $this->session->userdata('user_id')
        );

        if (!empty($invoice_id) && $invoice_id) {
            $this->db->update('invoice', $post_data, ['id' => $invoice_id]);
            $this->db->where('invoice_id', $invoice_id)->delete('invoice_details');
        } else {
            $invoice_no = rand(10000000, 99999);
            $post_data['invoice_no'] = $invoice_no;
            $this->db->insert("sales", $post_data);
            $invoice_id = $this->db->insert_id();
        }

        for ($i = 0; $i < count($itemID); $i++) {
            extract($_POST);

            $row1['paid'] = $unit_price[$i];
            $row1['balance'] = 0;
            $data1 = $row1;
            $where['payment_mode'] = $payment_mode[$i];
            $this->load->model('Main_model');
            $this->Main_model->update_record('sales', $data1, $where);

        $row['details'] = $payment_mode[$i];
        $row['sales_no'] = $invoice_id;
        $row['item_id'] = 100003025;
        $row['sales_qty'] = 1;
        $row['sales_discount'] = 0;
        $row['sales_rate'] = $unit_price[$i];
        $row['category_id'] = 57;
        $row['sales_amount'] = $purchase_amount[$i];
        $data = $row;
        $res = $this->db->insert("sales_detail", $data);


        


    }



    

        $this->session->set_flashdata("message", "Invoice #($invoice_id) Added Successfully!");
        redirect(base_url() . "index.php/Sales/sales_history");

        //  $purchase_data = array(
        //         'purchase_id' => $pu_id,
        //         'purchase_no' => $purchase_code,
        //         'item_id' => $item_id[$i],
        //         'category_id' => $category_id[$i],
        //         'purchase_qty' => $quantity[$i],
        //         'purchase_amount' => $purchase_amount[$i],
        //         'purchase_rate' => $unit_price[$i],
        //         'expire_date' => date('Y-m-d')
        //     );
        // // $data_entry = $this->Main_model->add_record('purchase_company', $Purchase_comp_Ins);

        // if ($data_entry) {
        //     $this->session->set_flashdata('success', 'Record added Successfully..!');
        //     redirect(Base_url() . 'index.php/Purchase/show_purchase_history/' . $purchase_code . '');
        // }

    }

     function update_paid()
    {    
        $id = $this->uri->segment(3);
        $amount = $this->Main_model->getSale_Details($id);
        $sales_no = $this->input->post('sales_no');
        // $category_id = $this->input->post('category_id');
        $cust_info = array(
            'paid' => $this->input->post('paid'),
            'balance' => $id - $this->input->post('paid')
        );
        $where = array('sales_no' => $sales_no);
        $this->load->model('Main_model');
        $this->Main_model->update_record('sales', $cust_info, $where);

        $this->session->set_flashdata('info', 'Product Updated Successfully..!');

        redirect(base_url() . 'index.php/Sales/sales_history');
    }



}