<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Learner;
use App\Models\Teacher;
use App\Models\Subject;


class Admin extends Controller
{
    public function check_session(){
        // check valid session
        $session = session();
        if (!isset($session->get('user_data')['admin_login']))
            return $this->response->redirect(base_url() . '/login'); 
    }
    public  function dashboard()
    {   
       

        $student_model = new Learner();
        $teacher_model = new Teacher();
        $subject_model = new Subject();

        $page_data['path'] = $this->request->getPath();
        $page_data['num_students'] = count($student_model->get_students());
        $page_data['num_teachers'] = count($teacher_model->get_teachers());
        $page_data['num_subjects'] = count($subject_model->get_subjects());

        $this->check_session();

        return view('pages/index', $page_data);
    }
    public function view($page)
    {

        if ( ! is_file(APPPATH.'/Views/pages/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }
        $student_model = new Learner();
        $page_data['path'] = $this->request->getPath();
        $page_data['all_students'] = $page == 'students' ? $student_model->get_students(): "";

        $this->check_session();

        return view('pages/'.$page, $page_data);
    }
    public function display($view , $reg_no){
        // search for reg_no
       if ($view === 'student' || $view === 'teacher'){
            $page_data['student_id'] = $reg_no;
            $page_data['path'] = $this->request->getPath();
            
            $this->check_session();

            return view('pages/student_profile.php', $page_data);
       }
       else {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($view);
        }

    }
 
}