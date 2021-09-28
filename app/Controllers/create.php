<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Learner;
use App\Models\Subject;
use App\Models\Tutor;
use App\Models\Notice;
use App\Models\Settings;


use Hidehalo\Nanoid\Client;
use Hidehalo\Nanoid\GeneratorInterface;


class Create extends Controller
{   
    private $validationRules = [
        // 'parent_email' => ['label' => 'Parent email', 'rules' => 'valid_email'],
        'student_id' => ['label' => 'Registration No', 'rules' => 'required'],
        'class_id' => ['label' => 'class', 'rules' => 'required|max_length[3]'],
        'sex' => ['label' => 'Gender', 'rules' => 'required'],
        'full_name' => ['label' => 'Name', 'rules' => 'required'],
        'birthday' => ['label' => 'birthday', 'rules' => 'required|valid_date'],
        'parent_phone' => ['label' => 'Parent Phone', 'rules' => 'required|min_length[9]'],
        'address' => ['label' => 'address', 'rules' => 'required'],
    ];
    private $teacherValidation = [
        'email' => ['label' => 'email', 'rules' => 'required|valid_email'],
        'sex' => ['label' => 'sex', 'rules' => 'required'],
        'full_name' => ['label' => 'Name', 'rules' => 'required'],
        'birthday' => ['label' => 'birthday', 'rules' => 'required|valid_date'],
        'phone_number' => ['label' => 'phone_number', 'rules' => 'required|min_length[9]'],
        'address' => ['label' => 'address', 'rules' => 'required'],
    ];

    private function generateID(){
        // check if an id is present else generate a new one
        $client = new Client();
        # more safer random generator
        $nanoID =  $client->generateId($size = 11, $mode = Client::MODE_DYNAMIC);
        $teacher_model = new Tutor();
        $result = $teacher_model->check_data($nanoID);

        if ($result == null ){
            return $this->generateID();
        }
      
        return $nanoID;
    }

    public function check_session(){
        // check valid session
        $session = session();
        if (!isset($session->get('user_data')['admin_login']))
            return $this->response->redirect(base_url() . '/login'); 
    }

    public function check_valid_reg(){
        $student_model = new Learner();
        $result = $student_model->check_id($this->request->getPost('student_id'));

        
        if (isset($result)){
            return 1;
        }
        return 0;
    }

    public function studentAvatar(){
        // handle student file upload
        $file = $this->request->getFile('avatar');
        $newName = $file->getRandomName();
        $folder_name = 'studentAvatars';
        
        // validate 
        $clear = $this->validate([
            'avatar' => 'uploaded[avatar]|max_size[avatar, 1024]|ext_in,jpg,jpeg]'
        ]);

        if ($file->isValid() && ! $file->hasMoved())
        {
            // move the file to public folder
            $file->move('../public/uploads/'.$folder_name,$newName);

        }
        return $newName;
    }

    public function student(){
        $page_data['path'] = $this->request->getPath();

        $student_model = new Learner();
        $config_model = new Settings();



        $page_data['system_name'] = $config_model->get_configurations()[0]['system_name'];
        $page_data['skin_color'] = $config_model->get_configurations()[0]['skin_color'];

        if ($this->request->getMethod() == 'post' && $this->validate($this->validationRules)){ 
            
            if($this->check_valid_reg() === 1)
                return $this->response->redirect(base_url().'/create/student?result=failed&_id='.$this->request->getPost('student_id'));
            $this->check_session();

            $avatar_name = $this->studentAvatar();
            

            $student_model->save([
            'student_id' => $this->request->getPost('student_id'),
            'class_id'  => $this->request->getPost('class_id'),
            'sex' =>  $this->request->getPost('sex'),
            'father_name' => $this->request->getPost('fathers_name'),
            'mother_name' => $this->request->getPost('mothers_name'),
            'parent_phone' => $this->request->getPost('parent_phone'),
            'name' => $this->request->getPost('full_name'),
            'parent_email' =>  $this->request->getPost('email'),
            'address' => $this->request->getPost('address'),
            'blood_group' => $this->request->getPost('blood_group'),
            'religion' => $this->request->getPost('religion'),
            'birthday' => $this->request->getPost('birthday'),
            'profileUrl' => $avatar_name
        ]);
        return $this->response->redirect(base_url().'/create/student?result=success&_id='.$this->request->getPost('student_id'));

        }

        if( $this->validator == null)
            $page_data['errors'] = '';
        else
            $page_data['errors'] = $this->validator->getErrors();
        
        $this->check_session();

        return view('/pages/create_student', $page_data);
    }

    public function teacher(){
    
        if ($this->request->getMethod() == 'post' && $this->validate($this->teacherValidation)){
            $teacher_model = new Tutor();

            $this->check_session();
            $customId = $this->generateID();

            $profileImg = $this->studentAvatar();

            // save credentials
            $teacher_model->save([
                'teacher_id' => $customId,
                'sex' =>  $this->request->getPost('sex'),   
                'phone_number' => $this->request->getPost('phone_number'),
                'name' => $this->request->getPost('full_name'),
                'email' =>  $this->request->getPost('email'),
                'address' => $this->request->getPost('address'),
                'blood_group' => $this->request->getPost('blood_group'),
                'country' => $this->request->getPost('country'),
                'county' => $this->request->getPost('county'),
                'religion' => $this->request->getPost('religion'),
                'birthday' => $this->request->getPost('birthday'),
                'profileUrl' => $profileImg
            ]);
            // save subjects
           
            $db = db_connect();

            $pQuery = $db->prepare(function($db)
            {
                return $db->table('subjectteacher')
                        ->insert([
                            'subjec_id'    => 'x',
                            'teacher_id'   => 'y',
                        ]);
            });
            // $results = $pQuery->execute(,$teacher_model->getInsertId());

            $pQuery->close();


        return $this->response->redirect(base_url().'/create/teacher?result=success&_id='.$customId);

        }
        $page_data['path'] = $this->request->getPath();

        $config_model = new Settings();
        $subject_model =  new Subject();

        $page_data['all_subjects'] = $subject_model->get_subjects();
        $page_data['system_name'] = $config_model->get_configurations()[0]['system_name'];
        $page_data['skin_color'] = $config_model->get_configurations()[0]['skin_color'];

        if( $this->validator == null)
            $page_data['errors'] = '';
        else
            $page_data['errors'] = $this->validator->getErrors();

        $this->check_session();

        return view('/pages/create_teacher', $page_data);

    }



    public function notice(){
        // validation
        // save
        if($this->request->getMethod() == 'post'){
            $notice_model = new Notice();

            $notice_model->save($this->request->getPost());

            $this->response->redirect(base_url().'/admin/notices');
        }
    }
    public function update_credentials(){
        // take the request
        $settings_model = new Settings();

        // validate the credentials
        if ($this->request->getMethod() == 'post'){
            $settings_model->update(1, $this->request->getPost());
            return redirect()->to('admin/settings')->with('success', 'Credentials Successfully Updated 👏😒🤞🤞🤞�');
        }

        return redirect()->back();

    }

}
