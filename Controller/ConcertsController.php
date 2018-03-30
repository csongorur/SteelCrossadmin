<?php

namespace Controller;

use Core\Controller;
use Core\Request;
use Core\Response;
use Core\View;
use Model\Concert;

/**
 * Concerts controller.
 */
class ConcertsController extends Controller
{
    private $concert_model;
    private $request;
    
    function __construct()
    {
        $this->concert_model = new Concert();
        $this->request = Request::getInstance();
    }
    
    public function index()
    {
        $concerts = $this->concert_model->all();
        
        $view = new View('concerts/index');
        $view->assign(['concerts' => $concerts]);
        
        return $view->render();
    }
    
    public function create()
    {
        $view = new View('concerts/create');
        
        return $view->render();
    }
    
    public function store()
    {
        if ($this->request->hasPost('date') && $this->request->hasPost('place') && $this->request->hasPost('time')) {
            $this->concert_model->create([
                'date' => $this->request->post('date'),
                'place' => $this->request->post('place'),
                'mikor' => $this->request->post('time')
            ]);
        }
        
        return Response::redirect('/concerts');
    }
    
    public function edit()
    {
        if ($this->request->hasGet('id')) {
            $concert = $this->concert_model->find($this->request->get('id'));
            
            $view = new View('concerts/edit');
            $view->assign(['concert' => $concert]);
            
            return $view->render();
        }
        
        return Response::redirect('/concerts');
    }
    
    public function update()
    {
        if ($this->request->hasPost('date') && $this->request->hasPost('place') && $this->request->hasPost('time')) {
            $this->concert_model->update($this->request->get('id'), [
                'date' => $this->request->post('date'),
                'place' => $this->request->post('place'),
                'mikor' => $this->request->post('time')
            ]);
        }
        
        return Response::redirect('/concerts/edit?id=' . $this->request->get('id'));
    }
    
    public function delete()
    {
        if ($this->request->hasGet('id')) {
            $this->concert_model->delete($this->request->get('id'));
        }
        
        return Response::redirect('/concerts');
    }
}
