<?php
namespace App\Models;

use CodeIgniter\Model;

class Notice extends Model
{
    // ...
    protected $table      = 'notices';
    protected $primaryKey = 'notice_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['notice_id', 'posted_by', 'title','body', 'created_at'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    protected $DBGroup = 'default';

    public function get_notices(){
        return $this->findAll();
    }
}

?>