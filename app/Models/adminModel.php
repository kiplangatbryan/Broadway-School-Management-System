<?php
namespace App\Models;

use CodeIgniter\Model;


class AdminModel extends Model
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

   public function get_admins(){
      return $this->findAll();
   }

      


}

?>