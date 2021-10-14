<?php
    use App\Models\Assignments;
    use App\Models\Subject;
    use App\Models\Tutor;
    use App\Models\Classes;
    use App\Models\Teacher;

    use CodeIgniter\I18n\Time;
    use Hidehalo\Nanoid\Client;
    use Hidehalo\Nanoid\GeneratorInterface;

    function assignmentID(){
        // check if an id is present else generate a new one
        $client = new Client();
        # more safer random generator
        $nanoID =  $client->generateId($size = 13, $mode = Client::MODE_DYNAMIC);
        $model = new Assignments();
        $result = $model->check_id($nanoID);

        if ($result == null ){
            return assignmentID();
        }
      
        return $nanoID;
    }

    function assignmentMap($as){
        $subject_model = new Subject();
        $teacher_model = new Tutor();

        $data = [
            'subject' => $subject_model->subject_id($as['subject_id'])['name'],
            'creator' => $teacher_model->teacher_id($as['teacher_id'])['name'],
        ];

        return array_merge($as, $data);
    }

       function scheduleMap($as){

        $subject_model = new Subject();
        $teacher_model = new Tutor();
        $class_model = new Classes();

        $teacherData =$teacher_model->teacher_id($as['teacher_id']);
        $subjectData = $subject_model->subject_id($as['subject_id']);

        $data = [
            't_name' => $teacherData['name'],
            't_photo' => $teacherData['profileUrl'],
            't_email' => $teacherData['email'],
            'gender' => $teacherData['sex'],
            'name' => $subjectData['name']
        ];

        return array_merge($as, $data);
    }

    function display_date($datetime){
        return  Time::parse($datetime, 'America/Chicago', 'en_US')->toLocalizedString('MMM d, yyyy');
    }

    function getDaysOfWeek(){
        return  [
            'Monday', 
            'Tuesday', 
            'Wednesday', 
            'Thursday', 
            'Friday',
            'Sartuday', 
            'Sunday'
        ];
    }


?>