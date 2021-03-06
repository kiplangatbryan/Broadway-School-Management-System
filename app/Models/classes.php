<?php
namespace App\Models;

use CodeIgniter\Model;
class Classes extends Model
{
    // ...
    protected $table      = 'classes';
    protected $primaryKey = 'class_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['class_id', 'name', 'teacher_id', 'prefect_id'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    protected $DBGroup = 'default';

    public function get_classes(){
        return $this->findAll();
     }

    public function class_id($key){
        return $this->where('class_id', $key)->first();
     }
}

?>