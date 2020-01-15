<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'nisn', 'name', 'birth_date', 'gender', 'religion', 'address'
    ];

    protected $primaryKey = 'nisn';
}
