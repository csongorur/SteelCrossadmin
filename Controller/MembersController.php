<?php

namespace Controller;

use Config\App;
use Core\Controller;
use Core\Request;
use Core\Response;
use Core\View;
use Model\Member;

/**
 * Members controller.
 */
class MembersController extends Controller
{
    private $member_model;
    private $request;
    
    function __construct()
    {
        $this->member_model = new Member();
        $this->request = Request::getInstance();
    }
    public function index()
    {
        $members = $this->member_model->all();
        
        $view = new View('members/index');
        $view->assign(['members' => $members]);
        
        return $view->render();
    }
    
    public function create()
    {
        $view = new View('members/create');
        
        return $view->render();
    }
    
    public function store()
    {
        if ($this->request->hasPost('instrument') && $this->request->hasPost('name') && $this->request->hasPost('image')) {
            
            
            $this->member_model->create([
                'instrument' => $this->request->post('instrument'),
                'name' => $this->request->post('name'),
                'image' =>  $this->request->post('image')
            ]);
        }
        
        return Response::redirect('/members');
    }
    
    public function edit()
    {
        if ($this->request->hasGet('id')) {
            $member = $this->member_model->find($this->request->get('id'));
            
            $view = new View('members/edit');
            $view->assign(['member' => $member]);
            
            return $view->render();
        }
        
        return Response::redirect('/members');
    }

    public function update()
    {
        if ($this->request->hasGet('id') && $this->request->hasPost('instrument') && $this->request->hasPost('name') && $this->request->hasPost('image')) {
            $this->member_model->update($this->request->get('id'), [
                'instrument' => $this->request->post('instrument'),
                'name' => $this->request->post('name'),
                'image' =>  $this->request->post('image')
            ]);
        }
        
        return Response::redirect('/members/edit?id=' . $this->request->get('id'));
    }

    public function delete()
    {
        if ($this->request->hasGet('id')) {    
            $this->member_model->delete($this->request->get('id'));
        }
        
        return Response::redirect('/members');
    }
}
