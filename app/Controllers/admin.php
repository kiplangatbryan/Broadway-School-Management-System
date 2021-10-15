<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Learner;
use App\Models\Tutor;
use App\Models\Subject;
use App\Models\Notice;
use App\Models\Classes;
use App\Models\Settings;
use App\Models\Schedule;
use App\Models\Alerts;
use App\Models\Messages;
use App\Models\AdminModel;

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
        $schedule_model = new Schedule();
        
        $page_data['path'] = $this->request->getPath();

        // refactor for errors
        $page_data['system_name'] = $config_model->get_configurations()[0]['system_name'];
        $page_data['skin_color'] = $config_model->get_configurations()[0]['skin_color'];

        if ($page === 'students'){
            $page_data['all_students'] = $student_model->paginate(10);
            $page_data['pager'] = $student_model->pager;
          }
        if ($page === 'teachers') {
            $page_data['all_teachers'] = $teacher_model->paginate(10);
            $page_data['pager'] = $teacher_model->pager;
        }

        if ($page === 'classes') {
      
            helper(['general']);
            // fetch settings know the number of streams
            // fetch the teacher ID 
            // fetch the student ID
            $page_data['classes'] = $class_model->get_classes();
            $intermediate = $config_model->get_configurations()[0]['streams'];
            $page_data['streams'] = $intermediate  == 'default' ? ['0']: explode(',', $intermediate); 
            $page_data['subjects'] = $subject_model->get_subjects();
            $page_data['teachers'] = $teacher_model->get_teachers();

            $schedules = $schedule_model->fetch_schedules();    
            $page_data['days'] =  getDaysOfWeek();
            $page_data['schedules'] = array_map('scheduleMap', $schedules);
            $page_data['pager'] = $class_model->pager;
        }   
            

        $page_data['all_subjects'] = $page == 'subjects' ? $subject_model->get_subjects(): "";
        $page_data['all_notices'] = $page == 'notices' ? $notice_model->get_notices(): "";

        $page_data['all_classes'] = $page == 'schedule' ? $class_model->get_classes(): "";

        $second_model = new Settings();

        $page_data['config'] = $page == 'settings' ? $config_model->get_configurations()[0]: "";
        $page_data['config_ff'] = $page == 'fee_structure' ? $second_model->get_configurations()[0]: "";



        return view('pages/'.$page, $page_data);
    }
    public function fetch_api($option){
        // fetch alerts, handle alerts
        // return json

        if ($option == 'contacts') {
            if ($_GET['filter'] == 'default') {
                // fetch all contacts
                $teacher_model = new Tutor();
                $admin_model = new AdminModel();
            
                $names1 = $teacher_model->get_teachers();
                $names2 = $admin_model->get_admins();

                return $this->response->setJSON(array_merge($names1, $names2));

            }
        }
        if ($option == 'alerts'){
             $data = new Alerts;
        
            return $this->response->setJSON($data->get_unread());
        }
        if($option == 'messages')
        {
            $modal = new Messages();
            if($_GET['filter'] == 'default') {
                return $this->response->setJSON($modal->get_unread());
            }
            if ($_GET['filter'] == 'client') {
                return $this->response->setJSON($modal->get_msg_thread($_GET['origin'], $_GET['destination']));
            }
        }
        if($option == 'schedules'){
            if (!empty($_GET['_id'])){
                helper(['general']);
                $schedule_model = new Schedule();
                $schedules = $schedule_model->fetch_schedules();    

                $data = array_map('scheduleMap', $schedules);

                $filtered_out = array_filter($data, function($row){
                    if ($row['schedule_id'] == $_GET['_id']){
                        return true;
                    }
                }); 
                return $this->response->setJSON($filtered_out);
            }

        }
    

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
                $teacher_model = new Tutor();
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