<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public $table = "subjects";

    protected $fillable = [
        'course_code', 'course_name', 'semester'
    ];
}
