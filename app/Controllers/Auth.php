<?php namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use App\Models\Model_auth;

class Auth extends Admin_Controller 
{

	public function __construct()
	{
		parent::__construct();

		$this->Model_auth = new Model_auth();
		$this->validation =  \Config\Services::validation();
	}

	/* 
		Check if the login form is submitted, and validates the user credential
		If not submitted it redirects to the login page
	*/
	public function login()
	{
		if(isset($this->session->logged_in) && $this->session->logged_in === true) {
			return redirect()->to(base_url('dashboard'));
		}
				
         if ($this->validate([
			'email' => ['label' => 'Email', 'rules' => 'required'],
			'password' => ['label' => 'Password', 'rules' => 'required|min_length[8]']
		])) {
            // true case
           	$email_exists = $this->Model_auth->check_email($this->request->getPost('email'));

           	if($email_exists == TRUE) {
           		$login = $this->Model_auth->login($this->request->getPost('email'), $this->request->getPost('password'));

           		if($login) {

           			$logged_in_sess = [
           				'id' => $login->id,
				        'username'  => $login->username,
				        'email'     => $login->email,
				        'logged_in' => TRUE
					];

					$this->session->set($logged_in_sess);
					return redirect()->to(base_url('dashboard'));
           		}
           		else {
           			$this->data['errors'] = 'Incorrect username/password combination';
           			echo view('login', $this->data);
           		}
           	}
           	else {
           		$this->data['errors'] = 'Email does not exists';

				echo view('login', $this->data);
           	}	
        }
        else {
            // false case
			if($this->request->getMethod()=="get") echo view('login');
			else{
				$this->data['validation'] = $this->validation;
				echo view('login', $this->data);
			}
        }	
	}

	/*
		clears the session and redirects to login page
	*/
	public function logout()
	{
		$this->session->destroy();
		return redirect()->to(base_url('auth/login'));
	}

}
