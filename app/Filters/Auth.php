<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Auth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null) {
		$session = \Config\Services::session();
		if(!isset($session->logged_in) || !$session->logged_in) {
		  // $session->set('url', $_SERVER['REQUEST_URI']);
		  return redirect()->to(base_url('auth/login'));
		}
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)  {
        
    }
} 