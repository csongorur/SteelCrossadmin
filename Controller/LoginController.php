<?php

namespace Controller;

use Core\Controller;
use Core\Request;
use Core\Response;
use Core\Session;
use Core\View;
use Model\User;

/**
 * Login controller.
 */
class LoginController extends Controller
{
    private $request;
    private $user_model;
    private $session;
    
    function __construct()
    {
        $this->request = Request::getInstance();
        $this->user_model = new User();
        $this->session = Session::getInstance();
    }

    /**
     * Show login form.
     * @return View
     */
    public function index()
    {
        $view = new View('login/index');
        return $view->render();
    }

    /**
     * Login a user.
     * @return View
     */
    public function login()
    {
        $user = $this->user_model->where('username', '=', $this->request->post('username'));

        if (count($user) > 0) {
            if (password_verify($this->request->post('password'), $user[0]['password'])) {
                $this->session->add('user', $user[0]['username']);
            }
        }
        
        return Response::redirect('/dash');
    }
    
    /**
     * Logout a user.
     * @return View
     */
    public function logout()
    {
        if ($this->session->check('user')) {
            $this->session->remove('user');
        }
        
        return Response::redirect('/');
    }
}
