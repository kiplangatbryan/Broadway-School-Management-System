<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Tutor;
use App\Models\Submissions;
use App\Models\Assignments;
use App\Models\Classes;
use App\Models\Subject;




class Teacher extends Controller
{
   
    public  function dashboard()
    {   
        $student_model = new Tutor();
        $page_data['path'] = $this->request->getPath();

        return view('teacher/index', $page_data);
    }
    public function view($page = 'index')
    {
        if ( ! is_file(APPPATH.'/Views/teacher/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }
        $student_model = new Tutor();
        $assignment_model = new Assignments();
        $submission_model = new Submissions();
        $class_model = new Classes();
        $subject_model = new Subject();



        $page_data['path'] = $this->request->getPath();

        $page_data['all_students'] = $page == 'students' ? $student_model->get_students(): "";
        if( $page == 'assignments') {
            $page_data['all_assignments'] = $assignment_model->get_assignments(session()->get('user_data')['teacher_id']);
            $page_data['all_subjects'] = $subject_model->get_subjects();
            $page_data['all_classes'] = $class_model->get_classes();
        }

        return view('teacher/'.$page, $page_data);
    }

    public function FileHandler(){
        // handle student file upload
        $file = $this->request->getFile('assign_file');
        $newName = $file->getRandomName();
        $folder_name = 'assignments';
        
        // validate 
        $clear = $this->validate([
            'assign_file' => 'uploaded[assign_file]|max_size[assign_file, 1024]|ext_in,pdf, docx]'
        ]);

        if ($file->isValid() && ! $file->hasMoved())
        {
            // move the file to public folder
            $file->move('../public/uploads/'.$folder_name,$newName);

        }
        return $newName;
    }


    public function create(){
        helper('general');
        // accepting submissions

        // create validation rules
        // pick teacher_id from session_var
        // handle the file
        $assignment_model = new Assignments();

        $data = [
            "assignment_id" => assignmentID(),
            "teacher_id" => session()->get('user_data')['teacher_id'],
            "class_id" => $this->request->getPost('class_id'),
            "description" => $this->request->getPost('description'),
            "due_date" => $this->request->getPost('due_date'),
            "subject_id" => $this->request->getPost('subject_id'),
            "title" => $this->request->getPost('title'),
            "fileID" => $this->FileHandler()
        ];

        $query = $assignment_model->save($data);

        if($query){
            return redirect()->back()->with('success', 'Assignment successfully posted!');
        }

        echo "something went wrong!";

    }
 
}