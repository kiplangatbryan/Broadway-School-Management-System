<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Learner;
use App\Models\Assignments;
use App\Models\Classes;
use App\Models\Subject;
use App\Models\Notice;
use App\Models\Tutor;


class Student extends Controller
{
    public  function dashboard()
    {   

        $notice_model =  new Notice();
        $student_model = new Learner();
        $subject_model = new Subject();
        $assignment_model = new Assignments();


        $page_data['path'] = $this->request->getPath();
        $page_data['num_students'] = count($student_model->get_students());
        $page_data['num_subjects'] = count($subject_model->get_subjects());
        $page_data['notices'] = $notice_model->get_notices();


        $page_data['num_assignments'] = count($assignment_model->st_assignments(session()->get('user_data')['class_id']));


        return view('student/index', $page_data);
    }
    public function view($page = 'index')
    {
        if ( ! is_file(APPPATH.'/Views/student/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }
        $notice_model =  new Notice();
        $class_model =  new Classes();
        $assignment_model = new Assignments();
        $student_model = new Learner();
        $subject_model = new Subject();
        $teacher_model = new Tutor();


        $page_data['path'] = $this->request->getPath();


        if( $page == 'assignments') {
            helper('general');

            $assign = $assignment_model->st_assignments(session()->get('user_data')['class_id']);

            $page_data['assignments'] = array_map('assignmentMap', $assign);
        
     
        }
        
        $page_data['all_students'] = $page == 'students' ? $student_model->get_students(): "";

        return view('student/'.$page, $page_data);
    }
    public function query($query){
        $subject_model = new Subject();
        $teacher_model = new Tutor();
        
        $query = $this->request->getGet('subject_id');


        if ($query){
            return $this->response->setJSON($subject_modal->subject_id((int)$query)['name']);
        }


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
    public function post_assignment(){
        if ($this->request->getMethod() == 'post'){

            // return $this->response->setJSON($this->request->getFile('assign'));
        

            $file = $this->request->getFile('assign');
            $newName = $file->getRandomName();
            $folder_name = 'submissions';
            
            // validate 
            $clear = $this->validate([
                'assign_file' => 'uploaded[assign_file]|max_size[assign_file, 1024]|ext_in,jpg,jpeg]'
            ]);

            if ($file->isValid() && ! $file->hasMoved())
            {
                // move the file to public folder
                $file->move('../public/uploads/'.$folder_name,$newName);

            }
            $data = [
                'success'=> 'upload was successfull!'
            ];

            return $this->response->setJSON($data);

        


        }
        return $this->response->setJSON('blank');
    }
 
}