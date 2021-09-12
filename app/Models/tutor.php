<?php
namespace App\Models;

use CodeIgniter\Model;


class Tutor extends Model
{
    // ...
    protected $table      = 'teachers';
    protected $primaryKey = 'teacher_id';

    // protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['teacher_id',"hash", 'name', 'birthday','sex' , 'religion', 'profileUrl','blood_group','role', 'address' , 'phone', 'email', 'country', 'county','subjects'];

    // protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    protected $DBGroup = 'default';

    public function get_data($email){
        return $this->where('email', $email)->first();
    }

    public function check_data($cpy){
        return $this->find($cpy);
    }

    public function get_teachers(){
         return $this->findAll();
    }
}

?>