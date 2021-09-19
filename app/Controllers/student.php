<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Learner;

class Student extends Controller
{
    public  function dashboard()
    {   
        $student_model = new Learner();
        $page_data['path'] = $this->request->getPath();
        $page_data['num_students'] = count($student_model->get_students());

        return view('student/index', $page_data);
    }
    public function view($page = 'index')
    {
        if ( ! is_file(APPPATH.'/Views/student/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }
        $student_model = new Learner();
        $page_data['path'] = $this->request->getPath();
        $page_data['all_students'] = $page == 'students' ? $student_model->get_students(): "";

        return view('student/'.$page, $page_data);
    }
    public function display($view , $reg_no){
        // search for reg_no
       if ($view === 'student' || $view === 'teacher'){
            $page_data['student_id'] = $reg_no;
            $page_data['path'] = $this->request->getPath();
            return view('pages/student_profile.php', $page_data);
       }
       else {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($view);
        }

    }
 
}