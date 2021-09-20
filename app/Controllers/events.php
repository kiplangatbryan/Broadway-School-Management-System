<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Event;


class Events extends Controller
{   
    public function create(){
        // save the event
        if($this->request->getMethod() == 'post'){
            $model = new Event();
            $data = $this->request->getPost();
            $data['allowed'] = 1;
            $model->save($data);

            return $this->response->setJSON($this->fetch_helper());

        }
        return $this->response->setJSON([]);

    }
    private function fetch_helper(){
        $model = new Event();
        $data = $model->fetch_events();
        return $data;

    }
    public function fetch_all(){
        

        return $this->response->setJSON($this->fetch_helper());
    }
}