<?php

namespace Model;

use Core\Model;

class User extends Model
{
    protected $fillable = ['id', 'username', 'password'];
    protected $table = 'login';
}
