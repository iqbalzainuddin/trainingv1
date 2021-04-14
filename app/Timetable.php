<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    public $table = "student_timetables";

    protected $fillable = [
        'student_id', 'day_id', 'subject_id', 'hall_id', 'time_from', 'time_to'
    ];

    public function subjects(){
        return $this->belongsTo(Subject::class, 'subject_id');
    }

    public function days(){
        return $this->belongsTo(Day::class, 'day_id');
    }

    public function lecture_halls(){
        return $this->belongsTo(Hall::class, 'hall_id');
    }
}
