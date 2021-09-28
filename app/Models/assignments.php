<?php
namespace App\Models;

use CodeIgniter\Model;
class Assignments extends Model
{
    // ...
    protected $table      = 'assignments';
    protected $primaryKey = 'id';


    protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['assignment_id', 'title', 'description', 'teacher_id', 'subject_id', 'class_id', 'fileID', 'due_date','created_at', 'updated_at'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    protected $DBGroup = 'default';

    public function get_assignments($key){
        return $this->where('teacher_id', $key)->findAll();
    }

    public function st_assignments($key){
        return $this->where('class_id', $key)->findAll();
     }

    public function check_id($key){
        return $this->where('assignment_id', $key);
    }
}

?>