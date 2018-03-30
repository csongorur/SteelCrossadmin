<?php

namespace Controller;

use Core\Controller;
use Core\Request;
use Core\Response;
use Core\View;
use Model\About;

/**
 * About controller
 */
class AboutController extends Controller
{
    protected $about_model;
    protected $request;

    public function __construct()
    {
        if (!authCheck()) {
            return Response::redirect('/');
        }
        
        // init model
        $this->about_model = new About();

        // init request
        $this->request = Request::getInstance();
    }

    public function edit()
    {
        $about = $this->about_model->all();

        $view = new View('about/edit');
        
        $view->assign(['about' => $about]);
        
        return $view->render();
    }

    public function update()
    {
        if ($this->request->hasPost('title') && $this->request->hasPost('text')) {
            $this->about_model->update($this->request->post('id'), ['title' => $this->request->post('title'), 'text' => $this->request->post('text')]);
        }
        
        return Response::redirect('/about');
    }
}
