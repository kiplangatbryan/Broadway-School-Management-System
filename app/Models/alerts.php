<?php
namespace App\Models;

use CodeIgniter\Model;


class Alerts extends Model
{
    // ...
    protected $table      = 'alerts';
    protected $primaryKey      = 'alert_id';
    protected $returnType     = 'array';
    protected $allowedFields = ['alert_id','icon', 'body', 'created_at', 'updated_at', 'read'];

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

     protected $DBGroup = 'default';

   
     public function get_alerts(){
        return $this->findAll();
     }
    public function get_unread(){
        return $this->where('read', 0)->findAll();
     }
}

?>