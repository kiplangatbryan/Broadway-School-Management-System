<?php
namespace App\Models;

use CodeIgniter\Model;

class Messages extends Model
{
    // ...
    protected $table      = 'messages';
    protected $primaryKey = 'subject_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['message_id', 'body', 'origin','destination', 'read', 'deleted', 'updated_at', 'created_at'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    protected $DBGroup = 'default';

    public function get_messages(){
        return $this->findAll();
    }
     public function get_unread(){
        return $this->where('destination', session()->get('user_data')['hash'])->where('read', 0)->findAll();
    }
}

?>