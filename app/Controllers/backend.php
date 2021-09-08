<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Backend extends Controller
{   
    public function index(){
        $page_data['page_title'] = 'BroadWay Login';
        $page_data['system_name'] = 'BroadWay SMS';

        return view('backend/index', $page_data);
    }
}