<?php  namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use App\Models\Model_products;
use App\Models\Model_orders;
use App\Models\Model_users;
use App\Models\Model_stores;

class Dashboard extends Admin_Controller 
{
	public function __construct()
	{
		parent::__construct();
 

		$this->data['page_title'] = 'Dashboard';
		
		$this->model_products = new Model_products();
		$this->model_orders = new Model_orders();
		$this->model_users = new Model_users();
		$this->model_stores = new Model_stores();
	}

	/* 
	* It only redirects to the manage category page
	* It passes the total product, total paid orders, total users, and total stores information
	into the frontend.
	*/
	public function index()
	{
		$this->data['total_products'] = $this->model_products->countTotalProducts();
		$this->data['total_paid_orders'] = $this->model_orders->countTotalPaidOrders();
		$this->data['total_users'] = $this->model_users->countTotalUsers();
		$this->data['total_stores'] = $this->model_stores->countTotalStores();

		$user_id = $this->session->id;
		$is_admin = ($user_id == 1) ? true :false;

		$this->data['is_admin'] = $is_admin;
		$this->render_template('dashboard', $this->data);
	}
}