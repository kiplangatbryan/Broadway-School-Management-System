<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use Hidehalo\Nanoid\Client;
use Hidehalo\Nanoid\GeneratorInterface;

use App\Models\Learner;


class Test extends Controller
{
     public function generateID(){
        // check if an id is present else generate a new one
        $client = new Client();
        # more safer random generator
        $nanoID =  $client->generateId($size = 11, $mode = Client::MODE_DYNAMIC);
      
        return $nanoID;
    }

     public function test_env(){
        $student_model = new Learner();

        $page_data['all_teachers'] = $student_model->paginate(5);
            $page_data['pager'] = $student_model->pager->links();
        return $this->response->setJSON($page_data);
    }
 
}