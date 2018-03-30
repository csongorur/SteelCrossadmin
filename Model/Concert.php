<?php

namespace Model;

use Core\Model;

/**
 * Concert model.
 */
class Concert extends Model
{
    protected $fillable = ['id', 'date', 'place', 'mikor'];
    protected $table = 'concert';
}
