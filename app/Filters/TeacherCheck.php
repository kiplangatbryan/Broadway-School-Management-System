<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class TeacherCheck implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Do something here
        if(empty(session()->get('user_data')) || session()->get('user_data')['login_type'] !== 'teacher'){
            return redirect()->to('/login')->with('fail', 'Restricted resource, You have to loggedIn!'); 
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
        
    }
}