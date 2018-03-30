<?php

namespace Model;

use Core\Model;

/**
 * Contact model.
 */
class Contact extends Model
{
    protected $fillable = ['id', 'name', 'telefon', 'email', 'img'];
    protected $table = 'contact';
}
