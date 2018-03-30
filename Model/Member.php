<?php

namespace Model;

use Core\Model;

/**
 * Member model.
 */
class Member extends Model
{
    protected $fillable = ['id', 'instrument', 'name', 'image'];
    protected $table = 'members';
}
