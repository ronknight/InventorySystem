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
class Item extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('user_id')) {
        } else {


            redirect(base_url() . 'index.php/Users/login');

        }

    } 

    // Create Barcodes Form
    public function create_barcodes()
    {
        $data['items'] = $this->Main_model->item_cat();
        $this->load->view('item/print_barcodes', $data);
    }

    // Getting Specific Item by Id
    public function get_items()
    {
        $item_id = $this->input->post('id');
        $data['items'] = $this->Main_model->items($item_id);
        $this->load->view('item/pop_item', $data);

    }

    public function delete_item($item_id) {
       $item_id = $this->uri->segment(3);
       $this->Main_model->delete_record('item', 'item_id', $item_id);
       $this->Main_model->delete_record('stock', 'item_id',$item_id);
       redirect(base_url() . 'index.php/Item/list_items');
    }

    // Getting data for barcodes
    public function get_data_for_barcodes()
    {
        $item_id = $this->uri->segment(3);
        $count = $this->uri->segment(4);
        $this->load->model('Main_model');

        $where = array('item_id' => $item_id);
        $data = $this->Main_model->get_purchased($item_id);
        if ($item_id != 0) {
            $output = '';
            $output .= '<tr id="entry_row_' . $count . '">';
            $output .= '<td id="serial_' . $count . '">' . $count . '</td>';
            $output .= '<td><input type="hidden" name="item_id" value="' . $data->item_id . '"> ' . $data->item_id . '</td>';
            $output .= '<input type="hidden" name="category_id[]" value="' . $data->category_id . '">';
            $output .= '<td>' . $data->item_name . '</td>';
            $output .= '<td><div id="spinner4">

     <input type="text" name="quantity" tabindex="1"  id="quantity_' . $count . '" size="2" value="1" class="form-control col-lg-2">

                                </div>
                            </div></td>';
            $output .= '<td><input type="text" class="form-control"  name="unit_price[]" readonly="readonly" id="unit_price_' . $count . '" size="6" value="' . $data->purchase_rate . '"></td>';
            $output .= '<td>
        <input type="text" name="purchase_amount[]" class="form-control" readonly="readonly" id="single_entry_total_' . $count . '" size="6" value="' . $data->purchase_rate . '">
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

    // Printing Barcodes
    public function printBarcodes()
    {
        $item = $this->input->post('item_id');
        $qty = $this->input->post('quantity');
        $data['barcodes'] = $this->db->query("select * from item where item_id = $item")->result();
        $data['quantity'] = $qty;
        $data['products'] = $this->db->query("SELECT * FROM stock AS s, item AS i WHERE  s.stock_qty > 0 AND i.`item_id` = s.`item_id`")->result();
        $data['items'] = $this->Main_model->item_cat();
        $this->load->view('item/print_barcodesItems', $data);

    }

    // Generate Barcodes
    public function generate_barcodes()
    {
        $data['products'] = $this->db->query("SELECT * FROM stock AS s, item AS i WHERE  s.stock_qty > 0 AND i.`item_id` = s.`item_id`")->result();
        $data['items'] = $this->Main_model->item_cat();
        $this->load->view('item/print_barcodesItems', $data);
    }

    // Get Category wise Items
    public function get_catItems()
    {
        $cat = $this->input->post('category');
        $data['items'] = $this->Main_model->item_cat1($cat);
        $this->load->view('item/print_barcodes', $data);

    }

    // List Items
    public function list_items()
    {

        $data['item'] = $this->Main_model->item_cat();
        $data['category'] = $this->Main_model->select('category');
        $data['purchase'] = $this->Main_model->select('purchase');
        $this->header();
        $this->load->view('item/list_items', $data);
        $this->footer();

 
    }

    // Inserting new Item to Database
    public function insert_item()
    {
        $item_name = $this->input->post('item_name');
        $color = $this->input->post('color');
        $size = $this->input->post('size');
        $article_no = $this->input->post('article_no');
        $category_id = $this->input->post('category_id');
        $qrCode = $this->input->post('qrCode');
        $this->load->model('Main_model');
        $result = $this->Main_model->select_same($item_name, $category_id, $color, $size, $article_no);
        if ($result) {
            $this->session->set_flashdata('warning', 'Product already Exists. Please try something different.');
            redirect(base_url() . 'index.php/Item/list_items');
        } else {
            if ($qrCode == '') {
                $abc = "SELECT LPAD(IFNULL(MAX(`item_id`),'100000000')+1,9,0) AS qrcode FROM `item` where flag = 1";
                $query = $this->db->query($abc);
                $qrCode = $query->row();
                $id = $qrCode->qrcode;
            } else {

                $id = $this->input->post('qrCode');
            }
            $data = array(
                'item_id' => $id,
                'item_name' => $this->input->post("item_name"),
                'size' => $this->input->post("size"),
                'color' => $this->input->post("color"),
                'flag' => 1,
                'article_no' => $this->input->post("article_no"),
                'category_id' => $this->input->post("category_id"),
                'purchase_rate' => $this->input->post('purchase_rate')

            );
            $data2 = array(
                'item_id' => $id,
                'category_id' => $this->input->post('category_id'),
                'stock_qty' => $this->input->post('stock_qty'),
                'purchase_rate' => $this->input->post('purchase_rate'),
                'stock_rate' => $this->input->post('stock_rate')

            );
            $response = $this->Main_model->add_record('item', $data);
            $stock = $this->Main_model->add_record('stock', $data2);
            if ($response) {
                $barc = $id;
                $params['data'] = $barc;
                $params['level'] = 'H';
                $params['size'] = 10;
                $params['savename'] = FCPATH . 'uploads/images/qrcodes/' . $id . '.png';
                $params = $this->ciqrcode->generate($params);

                $this->session->set_flashdata('success', 'Product added Successfully');
                redirect(base_url() . 'index.php/Item/list_items');

            }
        }
    }

    // Update existing item details
    public function update_item()
    {
        $custid = $this->input->post('cid');
        $category_id = $this->input->post('category_id');
        $cust_info = array(
            'item_name' => $this->input->post('item_name'),
            'article_no' => $this->input->post('article_no'),
            'size' => $this->input->post('size'),
            'purchase_rate' => $this->input->post('purchase_rate'),
            'color' => $this->input->post('color'),
            'category_id' => $this->input->post('category_id')
        );
        $where = array('item_id' => $custid);
        $this->load->model('Main_model');
        $this->Main_model->update_record('item', $cust_info, $where);

        $cat_data = array('category_id' => $category_id,
                          'purchase_rate' => $this->input->post('purchase_rate'),);
        $this->Main_model->update_record('stock', $cat_data, $where);
        $this->session->set_flashdata('info', 'Product Updated Successfully..!');

        redirect(base_url() . 'index.php/Item/list_items');
    }


}