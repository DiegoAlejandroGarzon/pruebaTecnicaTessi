<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empleados extends Model
{
    protected $fillable = [
        'name', 
        'email', 
        'phone', 
        'address', 
        'position', 
        'salary', 
        'skills', 
    ];
}
