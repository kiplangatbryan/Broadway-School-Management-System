<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Tutor;

class Teacher extends Controller
{
    public function check_session(){
        // check valid session
        $session = session();
        if (!isset($session->get('user_data')['teacher_login']))
            return $this->response->redirect(base_url() . '/login'); 
    }
    public  function dashboard()
    {   
        $student_model = new Tutor();
        $page_data['path'] = $this->request->getPath();
        $this->check_session();

        return view('teacher/index', $page_data);
    }
    public function view($page = 'index')
    {
        $this->check_session();
        if ( ! is_file(APPPATH.'/Views/teacher/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }
        $student_model = new Tutor();
        $page_data['path'] = $this->request->getPath();
        $page_data['all_students'] = $page == 'students' ? $student_model->get_students(): "";
        $this->check_session();


        return view('teacher/'.$page, $page_data);
    }
 
}