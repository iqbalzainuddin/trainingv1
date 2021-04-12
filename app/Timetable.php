<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    public $table = "student_timetables";

    protected $fillable = [
        'student_id', 'day_id', 'subject_id', 'hall_id', 'time_from', 'time_to'
    ];
}
