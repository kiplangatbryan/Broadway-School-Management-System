<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Admin;

class Login extends Controller

{
    
    private $validationRules = [
        'email' => ['label' => 'email', 'rules' => 'required|valid_email'],
        'password' => ['label' => 'password', 'rules' => 'required|min_length[3]']
    ];

    public function check_session(){
        $session = session();
        if ($session->get('user_data') !== null)
            $this->response->redirect(base_url().'/dashboard');
    }

    public function check_validity(){
        $model = new Admin();
        $email = $this->request->getPost('email');
        $response = $model->get_data($email);

        if($response == null){
            return 0;
        }
        return $response['password'] ==  $this->request->getPost('password') ? ['code' => 1, 'name'=> $response['name']] : 0;

    }

    public  function index()
    {
        $this->check_session();
        $data['page_title'] = 'Ci- News | Login';
        $data['system_name'] = 'BroadWay SMS';

        // render  
        if($this->request->getMethod() == 'post' && $this->validate($this->validationRules)){
            
            // check validity
            $status = $this->check_validity();
            if($status == 0 || $status['code'] == 0){
                $data['errors'] = 'Invalid username or password';
                return view('pages/login', $data);
            }
            // set session here
            $session = session();
            $user_data = [
                'email' => $this->request->getPost('email'),
                'name' => $status['name'],
                'admin_login' => 1
            ];
            $session->set('user_data', $user_data);
            return $this->response->redirect(base_url().'/dashboard', 'refresh');   
        }
       if( $this->validator == null)
            $data['errors'] = '';
        else
            $data['errors'] = $this->validator->getErrors();

        return view('pages/login', $data);
    }

    // render 
    public function forgot_password(){
        $data['system_name'] = 'BroadWay SMS';
        $data['page_title'] = $data['system_name'].' | Reset';
        $data['system_name'] = 'BroadWay SMS';
        $data['reset_password'] = 'Reset Password';

        echo view('pages/forgot_password', $data);
    }
    // handle login

      public function deauth(){
        // delete session created
        $session = session();
        $session->remove('user_data');

        return $this->response->redirect(base_url().'/login');


    }

}