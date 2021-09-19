<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Admin;
use App\Models\Learner;
use App\Models\Tutor;

class Login extends Controller

{
    private $validationRules = [
        'email' => ['label' => 'email', 'rules' => 'required|valid_email'],
        'password' => ['label' => 'password', 'rules' => 'required|min_length[5]']
    ];

    public function check_session(){
        if (isset(session()->get('user_data')['admin_login']))
            $this->response->redirect(base_url() . '/admin/dashboard'); 
        if (isset(session()->get('user_data')['teacher_login']))
            $this->response->redirect(base_url() . '/teacher/dashboard'); 
        if (isset(session()->get('user_data')['student_login']))
            $this->response->redirect(base_url() . '/student/dashboard'); 
        else 
            $this->response->redirect(base_url() . '/backend');
    }
  

    public function check_admin_validity(){
        $model = new Admin();
        $email = $this->request->getPost('email');
        $response = $model->get_data($email);

        if($response == null){
            return 0;
        }
        return $response['password'] ==  $this->request->getPost('password') ? ['code' => 1, 'name'=> $response['name']] : 0;

    }
    public function check_student_validity(){
        $model = new Learner();
        $email = $this->request->getPost('email');
        $response = $model->get_data($email);
        
         if($response == null){
            return 0;
        }
        if ($response['password'] == 'default_pass'){
            session()->set('user_data', ['first_login' => 1]);
        }
        return 'default_pass' ==  $this->request->getPost('password') ?  $response : 0;

    }

    public function check_teacher_validity(){
        $model = new Tutor();
        $email = $this->request->getPost('email');
        $response = $model->get_data($email);
        
         if($response == null){
            return 0;
        }
        if ($response['password'] == 'default_pass'){
            session()->set('user_data', ['first_login' => 1]);
        }
        return 'teacher' ==  $this->request->getPost('password') ?  $response : 0;

    }

    public  function index()
    {
        $this->check_session();
    }

    public function admin(){
        $data['page_title'] = 'BroadWay | Login';
        $data['system_name'] = 'BroadWay SMS';
        $data['login_type'] = 'admin';

        // render  
        if($this->request->getMethod() == 'post' && $this->validate($this->validationRules)){
            // check validity
            $status = $this->check_admin_validity();

            // return print_r($status);
            if($status == 0 || !isset($status['code'])){
                $data['errors'] = 'Invalid username or password';
                return view('pages/login', $data);
            }
            // set session here
            $user_data = [
                'email' => $this->request->getPost('email'),
                'name' => $status['name'],
                'admin_login' => 1
            ];
            session()->set('user_data', $user_data);
            return $this->response->redirect(base_url().'/admin/dashboard', 'refresh');   
        }
       if( $this->validator == null)
            $data['errors'] = '';
        else
            $data['errors'] = $this->validator->getErrors();

        return view('pages/login', $data);
    }
    public function teacher(){
        $data['page_title'] = 'BroadWay | Login';
        $data['system_name'] = 'BroadWay SMS';
        $data['login_type'] = 'teacher';
        // render  
        if($this->request->getMethod() == 'post' && $this->validate($this->validationRules)){
            // check validity
            $status_dt = $this->check_teacher_validity();
            if(!isset($status_dt['teacher_id']) && $status_dt == 0){
                $data['errors'] = 'Invalid username or password';
                return view('pages/login', $data);
            }

            $status_dt['teacher_login'] = 1; 
            // set session here
            session()->set('user_data', $status_dt);
            return $this->response->redirect(base_url().'/teacher/dashboard', 'refresh');   
        }
       if( $this->validator == null)
            $data['errors'] = '';
        else
            $data['errors'] = $this->validator->getErrors();

        return view('pages/login', $data);
    }
    public function student(){
        $data['page_title'] = 'BroadWay | Login';
        $data['system_name'] = 'BroadWay SMS';
        $data['login_type'] = 'student';
        // render  
        if($this->request->getMethod() == 'post' && $this->validate($this->validationRules)){
            // check validity
            $status_dt = $this->check_student_validity();

            if(!isset($status_dt['student_id']) && $status_dt == 0){
                $data['errors'] = 'Invalid username or password';
                return view('pages/login', $data);
            }
            // set session here
            // unset($status['code']);
            $status_dt['student_login'] = 1; 
            session()->set('user_data', $status_dt);
            return $this->response->redirect(base_url().'/student/dashboard', 'refresh');   
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
        session()->remove('user_data');

        return $this->response->redirect(base_url().'/login');


    }

}