<?php

namespace Model;

use Core\Model;

/**
 * About model
 */
class About extends Model
{
    protected $table = 'about';
    protected $fillable = ['id', 'title', 'text'];
}
