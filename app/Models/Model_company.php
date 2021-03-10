<?php 
 
namespace App\Models;
 
use CodeIgniter\Model;
use CodeIgniter\Database\Query; 

class Model_company extends Model
{
	 protected $table = 'company';
	 protected $primaryKey = 'id';
	 protected $returnType = 'object';
	 protected $allowedFields = [
        'company_name','service_charge_value','vat_charge_value','address','phone','country','message','currency'
    ];

}