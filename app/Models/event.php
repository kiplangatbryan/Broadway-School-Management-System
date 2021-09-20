<?php
namespace App\Models;

use CodeIgniter\Model;


class Event extends Model
{
    // ...
    protected $table      = 'events';

    protected $returnType     = 'array';

    protected $allowedFields = ['event_id','title','body','start_date', 'end_date', 'allowed'];

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    protected $DBGroup = 'default';

  
    public function fetch_events(){
         return $this->where('allowed', 1)->findAll();
     }
    public function check_id($id){
           return $this->where('student_id', $id)->first();
    } 

}

?>