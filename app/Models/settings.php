<?php
namespace App\Models;

use CodeIgniter\Model;


class Settings extends Model
{
    // ...
    protected $table      = 'settings';

    protected $returnType     = 'array';

    protected $primaryKey = 'settings_id';

    protected $allowedFields = ['settings_id','system_name', 'exams_list', 'streams', 'system_email', 'skin_color', 'phone','active_sms_service', 'twilio_account_sid', 'twilio_auth_token', 'twilio_sender_phone_number'];

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    protected $DBGroup = 'default';

    public function extend_cli($key){
        return $this->where('type', $key)->findAll();
    }

    public function get_configurations(){
        return $this->findAll();
    }
   
   

}

?>