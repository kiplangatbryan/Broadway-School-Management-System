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

    public function get_messages($key, $value){
        return $this->findAll()->where($key, $value);
    }
     public function get_unread(){
        return $this->where('destination', session()->get('user_data')['hash'])->where('read', 0)->findAll();
    }

    public function get_msg_thread($origin, $destination){
        $db = db_connect();
        $request = 'SELECT * FROM messages WHERE (origin="'.$origin.'" AND destination="'.$destination.'") OR (origin="'.$destination.'" AND destination="'.$origin.'")';
        // return $query;
        $query = $db->query($request);
        return $query->getResult();

    }
}

?>