<?php

namespace Route;

class Web
{
    public static function getRoutes()
    {
        return [
            '/' => ['LoginController' => 'index'],
            '/login' => ['LoginController' => 'login'],
            '/logout' => ['LoginController' => 'logout'],
            '/register' => ['RegisterController' => 'index'],
            '/register/store' => ['RegisterController' => 'store'],
            '/dash' => ['DashController' => 'index'],
            '/about' => ['AboutController' => 'edit'],
            '/about/update' => ['AboutController' => 'update'],
            '/contacts' => ['ContactsController' => 'index'],
            '/contacts/create' => ['ContactsController' => 'create'],
            '/contacts/store' => ['ContactsController' => 'store'],
            '/contacts/edit' => ['ContactsController' => 'edit'],
            '/contacts/update' => ['ContactsController' => 'update'],
            '/contacts/delete' => ['ContactsController' => 'delete'],
            '/members' => ['MembersController' => 'index'],
            '/members/create' => ['MembersController' => 'create'],
            '/members/store' => ['MembersController' => 'store'],
            '/members/edit' => ['MembersController' => 'edit'],
            '/members/update' => ['MembersController' => 'update'],
            '/members/delete' => ['MembersController' => 'delete'],
            '/concerts' => ['ConcertsController' => 'index'],
            '/concerts/create' => ['ConcertsController' => 'create'],
            '/concerts/store' => ['ConcertsController' => 'store'],
            '/concerts/edit' => ['ConcertsController' => 'edit'],
            '/concerts/update' => ['ConcertsController' => 'update'],
            '/concerts/delete' => ['ConcertsController' => 'delete']
        ];
    }
}
