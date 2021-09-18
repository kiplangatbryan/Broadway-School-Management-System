<?php
namespace App\Models;

use CodeIgniter\Model;

class Subject extends Model
{
    // ...
    protected $table      = 'subjects';
    protected $primaryKey = 'subject_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['subject_id', 'name'];

    // protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    protected $DBGroup = 'default';

    public function get_subjects(){
        return $this->findAll();
    }
}

?>