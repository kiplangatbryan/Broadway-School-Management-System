<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AdminCheck implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Do something here
        $response = \Config\Services::response();
        if (!empty(session()->get('user_data')) && session()->get('user_data')['login_type'] !== 'admin')
            return redirect()->to('/login')->with('fail', 'Restricted resource, You must be  loggedIn!');  
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}