<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Learner;
use App\Models\Subject;
use App\Models\Teacher;



class Create extends Controller
{   
    private $validationRules = [
        'email' => ['label' => 'email', 'rules' => 'required|valid_email'],
        'password' => ['label' => 'password', 'rules' => 'required|min_length[3]']
    ];
    private $teacherValidation = [
        'email' => ['label' => 'email', 'rules' => 'required|valid_email'],
        'password' => ['label' => 'password', 'rules' => 'required|min_length[3]']
    ];
    public function check_session(){
        // check valid session
        $session = session();
        if (!isset($session->get('user_data')['student_login']))
            return $this->response->redirect(base_url() . '/login'); 
    }

    public function student(){
        $page_data['path'] = $this->request->getPath();

        $student_model = new Learner();
        if ($this->request->getMethod() == 'post'){
            
            $this->check_session();

            $student_model->save([
            'student_id' => $this->request->getPost('student_id'),
            'class_id'  => $this->request->getPost('class_id'),
            'sex' =>  $this->request->getPost('sex'),
            'fathers_name' => $this->request->getPost('fathers_name'),
            'mothers_name' => $this->request->getPost('mothers_name'),
            'parent_phone' => $this->request->getPost('parent_phone'),
            'name' => $this->request->getPost('first_name').' '.$this->request->getPost('last_name'),
            'parent_email' =>  $this->request->getPost('email'),
            'address' => $this->request->getPost('address'),
            'blood_group' => $this->request->getPost('blood_group'),
            'religion' => 'christianity',
            'birthday' => '2019-01-10Z',
        ]);
        return $this->response->redirect(base_url().'/create/student?result=success&_id='.$this->request->getPost('student_id'));

        }
        
        $this->check_session();

        return view('/pages/create_student', $page_data);
    }

    public function teacher(){
        $page_data['path'] = $this->request->getPath();

        $teacher_model = new Teacher();
        if ($this->request->getMethod() == 'post'){
            $this->check_session();

            $student_model->save([
            // 'student_id' => $this->request->getPost('student_id'),
            'sex' =>  $this->request->getPost('sex'),   
            'phone_number' => $this->request->getPost('phone_number'),
            'name' => $this->request->getPost('first_name').' '.$this->request->getPost('last_name'),
            'email' =>  $this->request->getPost('email'),
            'address' => $this->request->getPost('address'),
            'blood_group' => $this->request->getPost('blood_group'),
            'country' => $this->request->getPost('country'),
            'county' => $this->request->getPost('county'),
        ]);
        return $this->response->redirect(base_url().'/create/teacher?result=success&_id='.$this->request->getPost('email'));

        }
        $subject_model =  new Subject();
        $page_data['all_subjects'] = $subject_model->get_subjects();
        $this->check_session();

        return view('/pages/create_teacher', $page_data);

    }
  

}
