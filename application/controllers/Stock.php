<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
/*
 *	@author : Imran Shah
 *  @support: shahmian@gmail.com
 *	date	: 18 April, 2018
 *	Kandi Inventory Management System
 * website: kelextech.com
 *  version: 1.0
 */
class Stock extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('Excel');
        if ($this->session->userdata('user_id')) {
        } else {


            redirect(base_url() . 'index.php/Users/login');

        }

    }


    // company detail form

    public function list_stock()
    {

        $data['stock'] = $this->Main_model->stock_cat();
        $data['category'] = $this->Main_model->select('category');
        $this->header();
        $this->load->view('stock/list_stock', $data);
        $this->footer();

    }

    public function print_stock()
    {

        $data['item'] = $this->Main_model->item_cat();
        $data['category'] = $this->Main_model->select123('category', 'category_name');
        // $this->header();
        $this->load->view('reports/print', $data);
        // $this->footer();

    }


    public function update_stock()
    {
        error_reporting(E_ALL);
        $stock_id = $this->input->post('stock_no');

        $stock = array(
            'stock_qty' => $this->input->post('stock_qty'),
            // 'purchase_rate' => $this->input->post('purchase_rate'),
            'stock_rate' => $this->input->post('stock_rate'),
        );
        $where = array('stock_no' => $stock_id);
        $this->load->model('Main_model');
        $response = $this->Main_model->update_record('stock', $stock, $where);
        if ($response) {
            $this->session->set_flashdata('success', '<div class="alert alert-success alert-dismissable">
   <button type="button" class="close" data-dismiss="alert"
      aria-hidden="true">
      &times;
   </button>
   <span>Record Updated Successfully..!</span>
</div>');

        }
        redirect(base_url() . 'index.php/Stock/list_stock');
    }

    public function createXLS() {
    // create file name
        $fileName = 'JHT Price List'.'.xlsx';  
    // load excel library
        $this->load->library('excel');
        $empInfo = $this->Main_model->employeeList();
        $stock = $this->Main_model->select('stock');
        $objPHPExcel = new PHPExcel();
        $objPHPExcel->setActiveSheetIndex(0);
        // set Header
        $objPHPExcel->getActiveSheet()->SetCellValue('A1', 'Category');
        $objPHPExcel->getActiveSheet()->SetCellValue('B1', 'Size');
        $objPHPExcel->getActiveSheet()->SetCellValue('C1', 'Brand');
        $objPHPExcel->getActiveSheet()->SetCellValue('D1', 'Type');
        $objPHPExcel->getActiveSheet()->SetCellValue('E1', 'Purchase Rate'); 
        $objPHPExcel->getActiveSheet()->SetCellValue('F1', 'Sale Rate');      
        // set Row
        $rowCount = 2;
        foreach ($empInfo as $element) {
            foreach($stock as $stock_rate) {
                if($element['item_id'] == $stock_rate->item_id){
            $objPHPExcel->getActiveSheet()->SetCellValue('A' . $rowCount, $element['category_name']);
            $objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, $element['item_name']);
            $objPHPExcel->getActiveSheet()->SetCellValue('C' . $rowCount, $element['size']);
            $objPHPExcel->getActiveSheet()->SetCellValue('D' . $rowCount, $element['color']);
            $objPHPExcel->getActiveSheet()->SetCellValue('E' . $rowCount, $element['purchase_rate']);
            $objPHPExcel->getActiveSheet()->SetCellValue('F' . $rowCount, $stock_rate->stock_rate);
            $rowCount++;
        }}}
        $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
        $objWriter->save('C:/Users/Jeanica Hy Trad/Downloads/' . $fileName);
    // download file
        header("Content-Type: application/vnd.ms-excel");
        redirect(base_url() . 'index.php/Stock/list_stock/' . $fileName);        
    }


}
?>