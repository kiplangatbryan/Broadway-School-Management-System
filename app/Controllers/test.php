<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use Hidehalo\Nanoid\Client;
use Hidehalo\Nanoid\GeneratorInterface;

class Test extends Controller
{
     public function generateID(){
        // check if an id is present else generate a new one
        $client = new Client();
        # more safer random generator
        $nanoID =  $client->generateId($size = 11, $mode = Client::MODE_DYNAMIC);
      
        return $nanoID;
    }
 
}