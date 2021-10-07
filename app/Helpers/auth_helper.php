<?php
    use App\Models\Admin;
    use App\Models\Learner;
    use App\Models\Tutor;

    function check_admin_validity($req){
        $model = new Admin();
        $email = $req->getPost('email');
        $response = $model->get_data($email);

        if($response == null){
            return ['code'=> 0];
        }
        // hashing

        if ($response['password'] !=  $req->getPost('password')){
            return ['code'=> 0];
        }
        $data = array_merge($response, ['login_type'=> 'admin']); 
        session()->set('user_data', $data);
        return ['code' => 1, 'login_type' => 'admin'];

    }
    function check_student_validity($req){
        $model = new Learner();
        $email = $req->getPost('email');
        $response = $model->get_data($email);
        
         if($response == null){
            return ['code' => 0];
        }

        if($response['password'] !=  $req->getPost('password')){
            return ['code' => 0];
        }
        // hashing
        $data = [];
        if ($response['password'] == 'default'){
           $data = ['first_login' => 1];
        }
        $data = ['login_type' => 'student'];
        session()->set('user_data', array_merge($response, $data));
        return ['code' => 1, 'login_type' => 'student'];

    }

    function check_teacher_validity($req){
        $model = new Tutor();
        $email = $req->getPost('email');
        $response = $model->get_data($email);
        
         if($response == null){
            return ['code' => 0];
        }

        if($response['password'] !=  $req->getPost('password')){
            return ['code' => 0];
        }

        // hashing
        $data = [];
        if ($response['password'] == 'default'){
           $data = ['first_login' => 1];
        }
        $data = ['login_type' => 'teacher'];
        session()->set('user_data', array_merge($response, $data));
        return ['code' => 1, 'login_type' => 'teacher'];

    }




?>