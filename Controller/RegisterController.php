<?php

namespace Controller;

use Core\Controller;
use Core\Request;
use Core\View;
use Model\User;

class RegisterController extends Controller
{
    private $user;
    private $request;
    
    function __construct()
    {
        $this->user = new User();
        $this->request = Request::getInstance();
    }


    public function index()
    {
        $view = new View('register/index');
        return $view->render();
    }
    
    public function store()
    {
        $view = null;
        
        if ($this->request->hasPost('username') && $this->request->hasPost('password') && $this->request->hasPost('password_again')) {
            if ($this->request->post('password') == $this->request->post('password_again')) {
                $this->user->create(['username' => $this->request->post('username'), 'password' => password_hash($this->request->post('password'), PASSWORD_DEFAULT)]);
                
                $view = new View('login/index');
                
                return $view->render();
            }
        }
        
        $view = new View('register/index');
        
        return $view->render();
    }
}
