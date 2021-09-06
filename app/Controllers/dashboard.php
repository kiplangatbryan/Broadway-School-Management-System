<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Student;

class Dashboard extends Controller
{
    public function check_session(){
        $session = session();
            if ($session->get('user_data') == null || $session->get('user_data')['admin_login'] !== 1)
                $this->response->redirect(base_url() . '/login');
    }
    public  function index()
    {   
        // check valid session
        $this->check_session();
        $student_model = new Student();
        $page_data['path'] = $this->request->getPath();
        $page_data['num_students'] = $student_model->get_total_students();

        echo view('pages/index', $page_data);
    }

    public function view($page = 'index')
    {
        $this->check_session();
        if ( ! is_file(APPPATH.'/Views/pages/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }
        $student_model = new Student();

        $page_data['path'] = $this->request->getPath();
        $page_data['all_students'] = $page == 'students' ? $student_model->get_students(): "";

        echo view('pages/'.$page, $page_data);
    }
 
}