<?php


/*
 *	@author : Imran Shah
 *  @support: shahmian@gmail.com
 *	date	: 18 October, 2017
 *	Kandi Inventory Management System
 *	http://kelextech.com
 *  version: 1.0
 */
class Main_model extends MY_Model
{

    public $cms_db;
    public function __construct()
    {
        parent::__construct();
       // $this->cms_db = $this->load->database('forum', TRUE);
    }

    public function test()
    {
        $sql = "select * from usr_users";
        $query = $this->cms_db->query($sql);
        return $query->result_array();
    }
    function bps_table($table, $pr_key)
    {


        $this->_table_name = $table;
        $this->_table_column = $pr_key;

    }

    //fetch max id
    public function fetch_maxid($tbl)
    {

        $this->db->select()->from($tbl);
        $query = $this->db->get();

        return $query->result();
    }

    //select
    public function select($table)
    {
        $this->db->select();
        $this->db->from($table);
        $query = $this->db->get();
        return $query->result();

    }

    public function select123($table, $column)
    {
        $this->db->select();
        $this->db->from($table);
        $this->db->order_by($column);
        $query = $this->db->get();
        return $query->result();

    }

    public function select_unique($table, $column, $where)
    {
        $this->db->select();
        $this->db->from($table);
        $this->db->where($column, $where);
        $query = $this->db->get();
        return $query->result();

    }

    public function delete_item($item_id) {
        return $this->db->delete('item', array('item_id' => $item_id));
    }

    public function delete_stock($item_id) {
        return $this->db->delete('stock', array('item_id' => $item_id));
    }

    // add record
    function add_record($table, $array_data)
    {
        $query = $this->db->insert($table, $array_data);
        if ($query == 1)
            return $query;
        else
            return false;
    }

    //update record
    function update_record($table, $update, $id)
    {
        $this->db->where($id);
        $query = $this->db->update($table, $update);
        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    //delete record
    function delete_record($table, $field_name, $id)
    {
        $query = $this->db->where($field_name, $id);
        $this->db->delete($table);
        if ($query != NULL)
            return $query;
        else
            return false;
    }

    //select where
    function select_wher($table, $where = NULL)
    {

        $this->db->select('*');
        if ($where)
            $this->db->where($where);

        $query = $this->db->get($table);


        return $query->result();
    }

    //single row record
    function single_row($table, $where = NULL, $return = 's')
    {
        $this->db->select('*');
        if ($where)
            $this->db->where($where);

        $q = $this->db->get($table);


        return $q->row_array();

    }

    //get user details
    public function getUserDetails($user_id)
    {
        $this->db->select("e.EMP_NAME,e.EMP_ID,e.EMP_PIC");
        $this->db->from('employee_profile as e, usr_user as u');
        $this->db->where('u.EMP_NO = e.EMP_ID');
        $this->db->where('u.USER_ID', $user_id);
        $query = $this->db->get();
        return $query->row();
    }

    // Users List
    public function users_list()
    {
        $this->db->select("uu.USER_ID, uu.logged_in, uu.CREATED_DATE,
                    uu.USER_NAME,uu.USER_ID, ug.GROUP_NAME,ug.GROUP_ID, uu.IS_ACTIVE")->from("usr_group  as ug,
                    usr_user as uu")->WHERE("ug.GROUP_ID	= uu.GROUP_ID");
        $query = $this->db->get();

        return $query->result_array();
    }

    //get same name products
    public function select_same($item_name, $category_id, $color, $size, $art_no)
    {
        $this->db->select('*');
        $this->db->where('item_name', $item_name);
        $this->db->where('category_id', $category_id);
        $this->db->where('color', $color);
        $this->db->where('size', $size);
        $this->db->where('article_no', $art_no);
        $query = $this->db->get("item");
        //echo $this->db->last_query();
        $result = $query->num_rows();
        if ($result > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    // get items by category
    public function item_cat()
    {
        $sql = $this->db->select("i.item_id,
i.item_name,
i.color,
i.article_no,
i.category_id,
i.size,
i.flag,
i.purchase_rate,
c.category_name,
s.stock_no,
s.item_id,
s.stock_qty,
s.purchase_rate,
s.stock_rate,
c.category_id,
s.category_id")
            ->FROM('item AS i,category as c, stock as s')
            ->where('i.category_id = c.category_id')
            ->where('s.item_id = i.item_id')->where('c.category_id = s.category_id')
            ->where('i.category_id = c.category_id')
            ->order_by('c.category_name')
            ->order_by('SUBSTR(i.item_name FROM 1 FOR 1), 
  LPAD(lower(i.item_name), 10,0) ASC')
            ->get();

        return $sql->result();
    }

     public function invoice_get($start, $end, $uri)
    {
        $this->db->select();
        $this->db->FROM('sales, customer');
        $this->db->where('payment =', 4);
        $this->db->where('sales.customer_id =', $uri);
        $this->db->where('customer.customer_id = sales.customer_id');
        if($start == $end){
            $this->db->like('sales.sales_date', $start);
        } else{
            $this->db->where('sales.sales_date >=', $start);
            $this->db->where('sales.sales_date <=', $end);
        }
        $this->db->order_by('sales.sales_date');
        $sql = $this->db->get();

        return $sql->result();
    }

    // get max sales no
    public function get_sales_max()
    {
        $this->db->select_max('sales_no');
        $q = $this->db->get('sales');
        $data = $q->row();
        return $data;
    }

    // get purchased product bu id
    public function get_purchased($sales_no)
    {
        $sql = $this->db->query("SELECT
sales.sales_no,
sales.sales_date,
sales.sales_amount_total,
sales.paid,
sales.balance,
sales.payment_mode,
sales.grand_total,
sales.po_number,
sales.payment
FROM
sales
WHERE sales.sales_no=$sales_no
");
        return $sql->row();
    }

    public function get_purchased1($item_id)
    {
        $sql = $this->db->query("SELECT
item.item_id,
item.item_name,
item.size,
item.article_no,
item.flag,
item.color,
item.purchase_rate,
category.category_id,
category.category_name,
stock.stock_no,
stock.stock_qty,
stock.purchase_rate,
stock.stock_rate
FROM
item
INNER JOIN category ON item.category_id = category.category_id
INNER JOIN stock ON stock.item_id = item.item_id AND stock.category_id = category.category_id
WHERE item.item_id=$item_id
");
        return $sql->row();
    }

    // get product details via ajax
    public function get_product_details_v2($item_id)
    {
        $sql = $this->db->query("SELECT
item.item_id,
item.item_name,
item.size,
item.flag,
item.color,
item.purchase_rate,
category.category_id,
category.category_name,
stock.stock_no,
stock.stock_qty,
stock.purchase_rate,
stock.stock_rate
FROM
item
INNER JOIN category ON item.category_id = category.category_id
INNER JOIN stock ON stock.item_id = item.item_id AND stock.category_id = category.category_id
WHERE item.item_id=$item_id
");
        // echo $this->db->last_query();
        return $sql->row();
    }

    // get sales history
    public function getSales_history($sales_id)
    {

        $query = $this->db->query("SELECT * FROM `sales`
                    join `sales_detail` on `sales_detail`.`sales_no`=`sales`.`sales_no`
                    join `item` on `item`.`item_id` = `sales_detail`.`item_id`
                    join `customer` on `customer`.`customer_id`= `sales`.`customer_id`
                    where `sales`.`sales_no`=$sales_id
");
        //echo $this->db->last_query();
        return $query->result();
    }

    public function getSales_receipt($sales_id)
    {

        $query = $this->db->query("SELECT * FROM `sales`
            where `sales`.`sales_no`=$sales_id
                    
");
        //echo $this->db->last_query();
        return $query->result();
    }

    /*==== GET EMAIL SETTINGS ====*/
    public function getEmailSettings()
    {
        return $this->db->select('*')->from('email_settings')->WHERE('id', 1)->get()->row();
    }

    // check stock
    public function check_stock_record($item, $category)
    {
        $query = $this->db->select('*');
        $this->db->from('stock');
        $this->db->where('item_id', $item);
        $this->db->where('category_id', $category);
        $query = $this->db->get();
        return $query->num_rows();
    }

    // get stock quantity
    public function get_stock_qty($item, $category)
    {
        $this->db->select('*');
        $this->db->from('stock');
        $this->db->where('item_id', $item);
        $this->db->where('category_id', $category);
        $query = $this->db->get();
        return $query->row();

    }

    // get all purchases
    public function select_purchases()
    {
        $query = $this->db->select("
            purchase_company.pur_no,
purchase_company.purchase_no,
purchase_company.purchase_date,
purchase_company.vendor_id,
purchase_company.company_id,
vendor.vendor_id,
company.company_id,
company.company_name,
vendor.vendor_name,
usr_user.USER_NAME,
purchase_company.grand_total,purchase_company.due_amount")
            ->from('vendor,company,purchase_company, usr_user')
            ->where('purchase_company.vendor_id = vendor.vendor_id')
            ->where('purchase_company.company_id = company.company_id')
            ->where('usr_user.USER_ID` = purchase_company.purchase_user_id')->get();
			
        return $query->result();
    }

    // get maximum purchase no
    public function get_purchase_max()
    {
        $this->db->select_max('purchase_no');
        $q = $this->db->get('purchase_company');
        $data = $q->row();
        return $data;
    }

    // get max purchase id
    public function get_purchase_max1()
    {
        $this->db->select_max('purchase_id');
        $q = $this->db->get('purchase');
        $data = $q->row();
        return $data;
    }

    // get history of purchases
    public function get_purchaseHistory($purchaseNO)
    {
        $this->db->select('purchase.purchase_no,
purchase.purchase_qty,
purchase.purchase_amount,
category.category_id,
category.category_name,
item.item_id,
item.item_name,
item.size,
item.color,
vendor.vendor_id,
vendor.vendor_name,
purchase.purchase_id,
purchase.purchase_qty,
purchase.purchase_amount,
item.purchase_rate,
purchase_company.purchase_date,
purchase_company.purchase_amount_total,
purchase_company.vendor_id,
`purchase_company`.`due_amount`,
`purchase_company`.`grand_total`')
            ->from('item,purchase,category,purchase_company,vendor')
            ->where('item.item_id = purchase.item_id')
            ->where('item.category_id = category.category_id')
            ->where('purchase_company.purchase_no=purchase.purchase_no')
            ->where('purchase_company.vendor_id=vendor.vendor_id')
            ->where('purchase.purchase_no', $purchaseNO);
        $query = $this->db->get();
        // echo $this->db->last_query();
        return $query->result();
    }

    // get items
    public function items($item)
    {
        $sql = $this->db->select("
i.item_id,
i.item_name,
i.color,
i.article_no,
i.category_id,
i.size,
i.flag,
i.purchase_rate,
c.category_name,
s.stock_no,
s.item_id,
s.stock_qty,
s.purchase_rate,
s.stock_rate,
c.category_id,
s.category_id")
            ->from('item AS i,category as c, stock as s')
            ->where('i.category_id = c.category_id')
            ->where('s.item_id = i.item_id')->where('c.category_id = s.category_id')
            ->where('i.category_id = c.category_id')
            ->where("i.item_id = '$item'")->get();
        return $sql->row();
    }

    // get category wise stock
    public function stock_cat()
    {
        $query = $this->db->select()->FROM('stock as s,item as i, category as c')
            ->WHERE('s.item_id=i.item_id')
            ->where('s.category_id=i.category_id')
            ->where("i.category_id=c.category_id")->get();
        return $query->result();
    }

    // get current day invoices
    public function today_invoices()
    {
        $to_date = date('m');
        $query = $this->db->select('SUM(grand_total) as count')->from('purchase_company')
            ->where('month(purchase_date)', $to_date)
            ->get()->row();
        return $query;
    }

    public function this_day_invoices($resibo)
    {
        $to_date = date('Y-m-d');
        $query = $this->db->select('SUM(paid) as count')->from('sales')
            ->where('payment', $resibo)
            ->where('sales_date', $to_date)
            ->get()->row();
        return $query;
    }

    // get current month invoices
    public function thisMonth_invoices($resibo)
    {
        $to_date = date('m');
        $query = $this->db->select('SUM(paid) as count')->from('sales')
            ->where('payment', $resibo)
            ->where('month(sales_date)', $to_date)
            ->get()->row();
        return $query;
    }

    // get daily sales for dashboard
    public function daily_dash_board_sales($today)
    {
        $this->db->select('sales_date');
        $this->db->select_sum('sales_amount_total');
        $this->db->from('sales');
        $this->db->where('sales_status', "1");
        $this->db->where('sales_date', $today);
        $this->db->group_by("sales_date");
        $this->db->order_by("sales.sales_no", "DESC");
        $query = $this->db->get();
        return $query->result();
    }

    // get daily sales
    public function get_daily_sales()
    {

        $this->db->select('sales_date');
        $this->db->select_sum('sales_amount_total');
        $this->db->from('sales');
        $this->db->where('sales_status', "1");
        $this->db->limit(5);
        $this->db->group_by("sales_date");
        $this->db->order_by("sales.sales_no", "DESC");
        $query = $this->db->get();

        return $query->result();
    }

    // get recent purchases
    public function recent_purchases()
    {
        $query = $this->db->select('purchase_company.purchase_no,
purchase_company.purchase_date,
purchase_company.vendor_id,
company.company_id,
company.company_name,
vendor.vendor_id,
vendor.vendor_name,
usr_user.USER_NAME,
purchase_company.grand_total')
            ->from('vendor, company, purchase_company,usr_user')
            ->where('purchase_company.vendor_id = vendor.vendor_id')
            ->where('purchase_company.company_id = company.company_id')
            ->where('usr_user.USER_ID = purchase_company.purchase_user_id')
            ->limit(10)
            ->order_by('purchase_company.purchase_date', 'DESC')->get();
        return $query->result();
    }

    // get daily stock
    public function get_daily_stock()
    {
        $this->db->select('*');
        $this->db->from('stock');
        $this->db->join('item', 'stock.item_id = item.item_id');
        $this->db->join('category', 'stock.category_id = category.category_id');
        $this->db->where('stock.stock_qty = 0');
        // $this->db->limit(20);
        $this->db->order_by("stock.stock_qty", "asc");
        $query = $this->db->get();
        return $query->result();
    }

    // get date wise purchases
    public function purchases($start_date1, $end_date1)
    {
        $query = $this->db->query("SELECT pc.purchase_date, SUM(pc.purchase_amount_total) AS purchase_amount_total,
SUM(p.purchase_qty) AS qty, pc.grand_total,pc.pur_no
FROM purchase_company AS pc, purchase AS p
WHERE pc.purchase_status =  '1'
AND pc.purchase_date BETWEEN '$start_date1' AND '$end_date1'
AND pc.purchase_no = p.purchase_no
GROUP BY pc.purchase_date
ORDER BY pc.purchase_no DESC");
///echo $this->db->last_query();
        return $query->result();
    }

    // get date wise sales
    public function getSales($start_date1, $end_date1)
    {
        $query = $this->db->query("SELECT 
  pc.sales_date,
  SUM(pc.sales_amount_total) AS sales_amount_total,
  SUM(p.sales_qty) AS sales_qty,
  pc.grand_total,
  pc.invoice_no,
  st.`purchase_rate`,st.`stock_rate`, i.`item_name`,p.sales_no
FROM
  sales AS pc,
  sales_detail AS p,stock AS st,item AS i 
WHERE pc.sales_status = '1' 
  AND pc.sales_date BETWEEN '$start_date1' 
  AND '$end_date1' 
  AND pc.sales_no = p.sales_no
  AND st.`item_id` = p.`item_id` 
  AND i.`item_id` = p.`item_id`
  AND i.`item_id` = st.`item_id`
GROUP BY pc.sales_date 

ORDER BY pc.sales_no DESC ")->result();
        return $query;
    }

    // get sale details by sale id
    public function getSale_Details($id)
    {
        $query = $this->db->select()
            ->from('sales as s,customer as c, receipt as r')
            ->where("sales_no", $id)
            ->where('s.customer_id=c.customer_id')
            ->where('r.receipt_id = s.payment')
            ->get();
        return $query->row();

    }

    
    // get invoice by dates
    public function get_invoice_by_date($start_date, $end_date)
    {
        $this->db->select('sales.*, customer.*', false);
        // $this->db->select('sales_detail.*', false);
        $this->db->from('sales,customer');
        //$this->db->join('sales_detail', 'sales_detail.sales_no  =  sales.sales_no', 'left');
        $this->db->where('sales.customer_id = customer.customer_id');
        if ($start_date == $end_date) {
            $this->db->like('sales.sales_date', $start_date);
        } else {
            $this->db->where('sales.sales_date >=', $start_date);
            $this->db->where('sales.sales_date <=', $end_date);

        }

        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }
	public function get_invoice_by_date1($start_date, $end_date)
    {
        $this->db->select('purchase_company.*,company.*', false);
        // $this->db->select('sales_detail.*', false);
        $this->db->from('purchase_company,company');
        //$this->db->join('sales_detail', 'sales_detail.sales_no  =  sales.sales_no', 'left');
        $this->db->where('purchase_company.company_id = company.company_id');
        if ($start_date == $end_date) {
            $this->db->like('purchase_company.purchase_date', $start_date);
        } else {
            $this->db->where('purchase_company.purchase_date >=', $start_date);
            $this->db->where('purchase_company.purchase_date <=', $end_date);
        }
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }

    public function getItem($start_date)
    {
        $this->db->select('item.*', false);
        // $this->db->select('sales_detail.*', false);
        $this->db->from('item');
        //$this->db->join('sales_detail', 'sales_detail.sales_no  =  sales.sales_no', 'left');
        if ($start_date != '0') {
            $this->db->like('item.category_id', $start_date);
        } 
        // else {
        //     $this->db->where('purchase_company.purchase_date >=', $start_date);
        //     $this->db->where('purchase_company.purchase_date <=', $end_date);
        // }
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }

    // get sales detail by sales no
    public function sales_detail($sales_no)
    {
        $query = $this->db->select()->from('sales_detail as sd,item as i, stock as s, category as cat')
            ->where('sd.item_id = i.item_id')
            ->where('cat.category_id = i.category_id')
            ->where('s.item_id = i.item_id')
            ->where($sales_no)
            ->get();
        //echo $this->db->last_query();
        return $query->result();
    }

    public function sales_detail123($sales_no)
    {
        $query = $this->db->select()->from('sales as sd')
            // ->where('sd.item_id = i.item_id')
            // ->where('s.item_id = i.item_id')
            ->where($sales_no)
            ->get();
        //echo $this->db->last_query();
        return $query->result();
    }
    public function item_detail($category_id)
    {
        $query = $this->db->select()->from('category as c,item as i, stock as s')
            ->where('c.category_id = i.category_id')
            ->where('s.item_id = i.item_id')
            ->where($category_id)
            ->get();
        //echo $this->db->last_query();
        return $query->result();
    }
	public function p_detail($sales_no)
    {
        $query = $this->db->select()->from('purchase as sd,item as i, stock as s, category as cat')
            ->where('sd.item_id = i.item_id')
            ->where('cat.category_id = i.category_id')
            ->where('s.item_id = i.item_id')
            ->where($sales_no)
            ->get();
        //echo $this->db->last_query();
        return $query->result();
    }

    // get top sales
    public function topsales($id)
    {
        $date = date('Y');
        $this->db->select("SUM(s.sales_qty) as count,stock.stock_qty,c.`item_name`,c.item_id, c.size, c.color, category.category_name, YEAR(ss.sales_date)")
        // $this->db->select_sum("s.sales_qty")
            ->from('sales_detail AS s,item AS c,stock, category, sales AS ss')
            ->WHERE('s.item_id = c.item_id')
            ->WHERE('stock.item_id = c.item_id')
            ->WHERE('c.category_id = category.category_id')
            ->WHERE("YEAR(ss.`sales_date`) =", $date)
            ->WHERE('s.sales_no = ss.sales_no')
            ->WHERE('category.category_id =', $id)
            ->GROUP_BY('c.item_id')
            ->ORDER_BY('SUM(s.sales_qty)', 'DESC')
            ->LIMIT(15);
        $query = $this->db->get()->result();
        return $query;
    }

    // get top sales of year
    public function topSalesYear()
    {
        $date = date('Y-m-d');
        $this->db->select("c.item_name,
  c.item_id,
  YEAR(ss.sales_date)");
        $this->db->select_sum('s.sales_qty');
        $this->db->from('sales_detail AS s,
  sales AS ss,
  item AS c');
        $this->db->where('s.item_id = c.item_id');
        $this->db->where("YEAR(ss.`sales_date`) = YEAR(DATE('$date'))");
        $this->db->where('s.sales_no = ss.sales_no');

        $this->db->GROUP_BY('c.item_id');
        $this->db->ORDER_BY('s.sales_qty', 'DESC');
        $this->db->LIMIT(5);
        $query = $this->db->get()->result();
        return $query;
    }

    public function employeeList() {
        $this->db->select(array('e.item_id', 'e.item_name', 'e.size', 'e.color', 'f.category_name', 'e.purchase_rate'));
        $this->db->from('item as e, category as f');
        $this->db->where('e.category_id = f.category_id');
        $this->db->order_by('f.category_name', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function total_purchase($id)
    {
        $this->db->select('SUM(sales_amount_total) as active');
        $this->db->from('sales');
        $this->db->where('customer_id', $id);
        $sql = $this->db->get();
        //$sql = $this->db->select("SELECT count(1) as active FROM USR_USER WHERE IS_ACTIVE = '1'");
        $query = $sql->row();
        return $query;
    }

    public function total_payment($id)
    {
        $this->db->select('SUM(paid) as active');
        $this->db->from('sales');
        $this->db->where('customer_id', $id);
        $sql = $this->db->get();
        //$sql = $this->db->select("SELECT count(1) as active FROM USR_USER WHERE IS_ACTIVE = '1'");
        $query = $sql->row();
        return $query;
    }

    public function total_balance($id)
    {
        $this->db->select('SUM(sales_amount_total - paid) as active');
        $this->db->from('sales');
        $this->db->where('customer_id', $id);
        $this->db->where('payment', 4);
        $sql = $this->db->get();
        //$sql = $this->db->select("SELECT count(1) as active FROM USR_USER WHERE IS_ACTIVE = '1'");
        $query = $sql->row();
        return $query;
    }

}


?>

