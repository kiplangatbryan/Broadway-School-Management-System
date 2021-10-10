<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Schedule;

class Purge extends Controller
{   

    public function schedule(){
        //
        if ($this->request->getMethod() == 'post'){
            $scheduler = new Schedule();
            $purge_id = $this->request->getPost('schedule_id');
            $scheduler->delete($purge_id);

            return $this->response->setJSON(['msg'=> 'success']);
        }
        return $this->response->setJSON(['error'=> 'Request Method not allowed!']);
    }
}