<?php namespace App\Controllers;


use App\Models\Model_company;

class Company extends Admin_Controller 
{
	public function __construct()
	{
		parent::__construct();


		$this->data['page_title'] = 'Company';

		$this->model_company = new Model_company();
		$this->validation =  \Config\Services::validation();
	}

    /* 
    * It redirects to the company page and displays all the company information
    * It also updates the company information into the database if the 
    * validation for each input field is successfully valid
    */
	public function index()
	{  
        if(!in_array('updateCompany', $this->permission)) {
            return redirect()->to(base_url('dashboard'));
        }
        
		$this->validation->setRule('company_name', 'Company name', 'trim|required');
		$this->validation->setRule('service_charge_value', 'Charge Amount', 'trim|integer');
		$this->validation->setRule('vat_charge_value', 'Vat Charge', 'trim|integer');
		$this->validation->setRule('address', 'Address', 'trim|required');
		$this->validation->setRule('message', 'Message', 'trim|required');
	
	
        if ($this->validate($this->validation->getRules()) == TRUE) {
            // true case

        	$data = array(
        		'company_name' => $this->request->getPost('company_name'),
        		'service_charge_value' => $this->request->getPost('service_charge_value'),
        		'vat_charge_value' => $this->request->getPost('vat_charge_value'),
        		'address' => $this->request->getPost('address'),
        		'phone' => $this->request->getPost('phone'),
        		'country' => $this->request->getPost('country'),
        		'message' => $this->request->getPost('message'),
                'currency' => $this->request->getPost('currency')
        	);



        	$update = $this->model_company->update(1, $data);
        	if($update == true) {
        		$this->session->setFlashdata('success', lang('Main.createdOK'));
        		return redirect()->to(base_url('company/'));
        	}
        	else {
        		$this->session->setFlashdata('errors', lang('Main.error'));
        		return redirect()->to(base_url('company/index'));
        	}
        }
        else {

            // false case
            
            
            $this->data['currency_symbols'] = $this->currency();
        	$this->data['company_data'] = $this->model_company->find(1);
			$this->render_template('company/index', $this->data);			
        }	

		
	}

}