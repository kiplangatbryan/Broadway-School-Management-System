<?php
namespace App\Models;

use CodeIgniter\Model;
class Submissions extends Model
{
    // ...
    protected $table      = 'submissions';
    protected $primaryKey = 'submission_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['submission_id', 'student_id', 'assignment_id', 'fileID', 'created_at', 'updated_at'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    protected $DBGroup = 'default';

    public function get_submissions($key){
        return $this->where('assignment_id', $key)->findAll();
     }
}

?>