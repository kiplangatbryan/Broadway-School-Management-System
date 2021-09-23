<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Learner;
use App\Models\Tutor;
use App\Models\Subject;
use App\Models\Notice;
use App\Models\Classes;
use App\Models\Settings;


class Admin extends Controller
{
   
    
    public function dashboard()
    {  
        $student_model = new Learner();
        $teacher_model = new Tutor();
        $subject_model = new Subject();
        $config_model = new Settings();


        $page_data['system_name'] = $config_model->get_configurations()[0]['system_name'];
        $page_data['skin_color'] = $config_model->get_configurations()[0]['skin_color'];

        $page_data['path'] = $this->request->getPath();
        $page_data['num_students'] = count($student_model->get_students());
        $page_data['num_teachers'] = count($teacher_model->get_teachers());
        $page_data['num_subjects'] = count($subject_model->get_subjects());

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
        $teacher_model = new Tutor();
        $subject_model =  new Subject();
        $notice_model =  new Notice();
        $class_model =  new Classes();
        $config_model = new Settings();


        
        $page_data['path'] = $this->request->getPath();

        // refactor for errors
        $page_data['system_name'] = $config_model->get_configurations()[0]['system_name'];
        $page_data['skin_color'] = $config_model->get_configurations()[0]['skin_color'];


        if ($page === 'students')
            $page_data['all_students'] = $student_model->paginate(5);
            $page_data['pager'] = $student_model->pager;
        if ($page === 'teachers')
            $page_data['all_teachers'] = $student_model->paginate(5);
            $page_data['pager'] = $student_model->pager;

        $page_data['all_subjects'] = $page == 'subjects' ? $subject_model->get_subjects(): "";
        $page_data['all_notices'] = $page == 'notices' ? $notice_model->get_notices(): "";

        $page_data['all_classes'] = $page == 'schedule' ? $class_model->get_classes(): "";

        $page_data['config'] = $page == 'settings' ? $config_model->get_configurations()[0]: "";


        return view('pages/'.$page, $page_data);
    }
    public function display($view , $id){
        // search for reg_no


        $config_model = new Settings();


        $page_data['system_name'] = $config_model->get_configurations()[0]['system_name'];
        $page_data['skin_color'] = $config_model->get_configurations()[0]['skin_color'];
        
       if ($view === 'student' || $view === 'teacher'){
            // $page_data['student_id'] = $id;
            $page_data['path'] = $this->request->getPath();

            if ($view === 'student'){
                $student_model = new Learner();
                
                $page_data['profile'] = $student_model->where('student_id', $id)->first();
                $page_data['view_page'] = 'student_profile'; 
            }
            if( $view  === 'teacher'){
                $teacher_model = new Teacher();
                $page_data['profile'] = $teacher_model->where('teacher_id', $id)->first();
                $page_data['view_page'] = 'teacher_profile'; 
            }

            $subject_model =  new Subject();
            $page_data['all_subjects'] = $subject_model->get_subjects();
            
            return view('pages/'.$page_data['view_page'].'.php', $page_data);
       }
       else {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($view);
        }

    }
   
 
}