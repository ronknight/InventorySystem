<?php  namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Files;

class File extends Admin_Controller 
{
	public function __construct()
	{
		parent::__construct();
	}
    public function index($imageName)
    {
        if(($image = file_get_contents(WRITEPATH.'uploads/'.$imageName)) === FALSE)
            show_404();

		$file = new \CodeIgniter\Files\File(WRITEPATH.'uploads/'.$imageName);

        $this->response
            ->setStatusCode(200)
            ->setContentType($file->getMimeType())
            ->setBody($image)
            ->send();

    }
}