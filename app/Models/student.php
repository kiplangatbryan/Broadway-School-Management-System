<?php
namespace App\Models;

use CodeIgniter\Model;


class Student extends Model
{
    // ...
    protected $table      = 'student';

    protected $protectedFields = ['password', 'authentication_key'];
    protected $returnType     = 'array';

    protected $allowedFields = ['student_id', 
                                'name', 
                                'email', 
                                'blood_group',
                                'address',
                                'birthday',
                                'parent_phone',
                                'parent_email',
                                'father_name',
                                'mother_name',
                                'religion'
                                ];

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

     protected $DBGroup = 'default';

     public function get_total_students(){
         return count($this->findAll());
     }

    public function get_students(){
         return $this->findAll();
     }


      


}

?>