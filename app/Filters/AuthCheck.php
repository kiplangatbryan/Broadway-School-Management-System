<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthCheck implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Do something here
        $user_data = session()->get('user_data'); 
        if (!empty($user_data) && $user_data['login_type'] === 'admin'){
            return redirect()->to('/admin/dashboard')->with('fail', 'You have to logout first!');  
        }
        if (!empty($user_data) && $user_data['login_type'] === 'teacher'){
            return redirect()->to('/teacher/dashboard')->with('fail', 'You have to logout first!');
        }
        if (!empty($user_data) && $user_data['login_type'] === 'student'){
            return redirect()->to('/student/dashboard')->with('fail', 'You have to logout first!');
        }
    }


    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}