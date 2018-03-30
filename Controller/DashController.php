<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Controller;

use Core\Controller;
use Core\Response;
use Core\View;
use function authCheck;

/**
 * Dash controller.
 */
class DashController extends Controller
{
    function __construct()
    {
        if (!authCheck()) {
            return Response::redirect('/');
        }
    }
    
    /**
     * Show dash page.
     * @return View
     */
    public function index()
    {
        $view = new View('dash/index');
        
        return $view->render();
    }
}
