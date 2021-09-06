<?php
namespace App\Models;

use CodeIgniter\Model;


class Admin extends Model
{
    // ...
    protected $table      = 'admin';

    protected $returnType     = 'array';

    protected $allowedFields = ['name','email'];

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

     protected $DBGroup = 'default';

   
     public function get_data($email){
        return $this->where('email', $email)->first();
     }


      


}

?>