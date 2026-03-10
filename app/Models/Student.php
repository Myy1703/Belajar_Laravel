<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = [
        'name',
        'email',
        'phone',
        'address',
        'gender',
        'image',
    ];
}
