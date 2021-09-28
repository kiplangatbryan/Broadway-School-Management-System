<?php
    use App\Models\Assignments;
    use App\Models\Subject;
    use App\Models\Tutor;

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


?>