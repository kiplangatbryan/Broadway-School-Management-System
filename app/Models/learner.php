<?php
namespace App\Models;

use CodeIgniter\Model;


class Learner extends Model
{
    // ...
    protected $table      = 'students';

    protected $protectedFields = ['authentication_key'];
    protected $returnType     = 'array';

    protected $allowedFields = ['student_id','name','password', 'birthday','sex','religion','blood_group','address', 'parent_phone','parent_email','address', 'parent_phone','parent_email','father_name','mother_name','class_id', 'role', 'profileUrl'];

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    protected $DBGroup = 'default';

  
    public function get_students(){
         return $this->findAll();
     }
    public function check_id($id){
           return $this->where('student_id', $id)->first();
    } 

    public function get_data($email){
        return $this->where('parent_email', $email)->first();
     }
      


}

?>