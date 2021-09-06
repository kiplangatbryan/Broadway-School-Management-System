<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Student;

class Create extends Controller
{   
     
    private $validationRules = [
        'email' => ['label' => 'email', 'rules' => 'required|valid_email'],
        'password' => ['label' => 'password', 'rules' => 'required|min_length[3]']
    ];
    public function student(){
        $page_data['path'] = $this->request->getPath();

            $student_model = new Student();

            if ($this->request->getMethod() == 'post'){
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
             return view('/pages/create_student?result=success', $page_data);

        }
        return view('/pages/create_student', $page_data);
        

    }
  

}
