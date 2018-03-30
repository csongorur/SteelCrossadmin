<?php

namespace Controller;

use Core\Controller;
use Core\Request;
use Core\Response;
use Core\View;
use Model\Contact;
use function authCheck;

/**
 * Contacts controller
 */
class ContactsController extends Controller
{
    private $contact_model;
    private $request;

    function __construct()
    {
        if (!authCheck()) {
            return Response::redirect('/');
        }

        $this->contact_model = new Contact();

        $this->request = Request::getInstance();
    }

    public function index()
    {
        $contacts = $this->contact_model->all();

        $view = new View('contacts/index');
        $view->assign(['contacts' => $contacts]);

        return $view->render();
    }

    public function create()
    {
        $view = new View('contacts/create');

        return $view->render();
    }

    public function store()
    {
        if ($this->request->hasPost('name') && $this->request->hasPost('telefon') && $this->request->hasPost('email')) {
            $this->contact_model->create([
                'name' => $this->request->post('name'),
                'telefon' => $this->request->post('telefon'),
                'email' => $this->request->post('email'),
                'img' => ''
            ]);
        }

        return Response::redirect('/contacts');
    }

    public function edit()
    {
        $contact = $this->contact_model->find($this->request->get('id'));

        $view = new View('contacts/edit');
        $view->assign(['contact' => $contact]);

        return $view->render();
    }

    public function update()
    {
        if ($this->request->hasGet('id') && $this->request->hasPost('name') && $this->request->hasPost('telefon') && $this->request->hasPost('email')) {
            $this->contact_model->update($this->request->get('id'), [
                'name' => $this->request->post('name'),
                'telefon' => $this->request->post('telefon'),
                'email' => $this->request->post('email')
            ]);
        }

        return Response::redirect('/contacts/edit?id=' . $this->request->get('id'));
    }

    public function delete()
    {
        if ($this->request->hasGet('id')) {
            $this->contact_model->delete($this->request->get('id'));
        }

        return Response::redirect('/contacts');
    }
}
