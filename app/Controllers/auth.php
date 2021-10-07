<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Admin;
use App\Models\Learner;
use App\Models\Tutor;

class Auth extends Controller

{
    private $validationRules = [
        'email' => ['label' => 'email', 'rules' => 'required|valid_email'],
        'password' => ['label' => 'password', 'rules' => 'required|min_length[5]']
    ];

    public function index (){
        // all account logins
        $page_data['page_title'] = 'BroadWay | Login';
        $page_data['system_name'] = 'BroadWay SMS';


        if( $this->validator == null)
            $page_data['errors'] = '';
        else
            $page_data['errors'] = $this->validator->getErrors();

        return view('pages/login', $page_data);

    }

    public function login_validate (){
        helper('auth');
        // all account logins
        if ($this->request->getMethod() == 'post' &&  $this->validate($this->validationRules)){
            
            $student = check_student_validity($this->request);
            $teacher = check_teacher_validity($this->request);
            $admin = check_admin_validity($this->request);

            if($student['code'] === 1 || $teacher['code'] === 1 || $admin['code'] === 1){
                if(!empty($student['login_type'])){
                    return redirect()->to(base_url().'/'.$student['login_type'].'/dashboard');
                }
                if(!empty($teacher['login_type'])){
                    return redirect()->to(base_url().'/'.$teacher['login_type'].'/dashboard');
                } 
                if(!empty($admin['login_type'])){
                    return redirect()->to(base_url().'/'.$admin['login_type'].'/dashboard');
                }
            }
            else{
                // redirect to login page
                return redirect()->to(base_url('/login'))->with('fail', 'Invalid Email or Password!');
            }
        }
        return redirect()->to(base_url('/login'))->with('fail', 'Invalid Email or Password!');

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
            if($status == 0 ){
                $data['errors'] = 'Invalid username or password';
                return view('pages/login', $data);
            }
            // set session here
            $user_data = [
                'email' => $this->request->getPost('email'),
                'name' => $status['name'],
                'hash' => $status['hash'],
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