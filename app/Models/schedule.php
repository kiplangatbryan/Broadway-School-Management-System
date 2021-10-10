<?php
namespace App\Models;

use CodeIgniter\Model;


class Schedule extends Model
{
    // ...
    protected $table      = 'schedule';

    protected $returnType     = 'array';
    protected $primaryKey     = 'schedule_id';


    protected $allowedFields = ['schedule_id','start','end','teacher_id','stream', 'class_id', 'subject_id', 'day'];

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    protected $DBGroup = 'default';

  
    public function fetch_schedules(){
         return $this->findAll();
     }

 

}

?>