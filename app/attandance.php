<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class attendance extends Model
{
    protected $table = "attendance_details";
     protected $fillable = ['id' , 'Student_id' , 'teacher_id' ,'Attandances' ,'Date'];
}
