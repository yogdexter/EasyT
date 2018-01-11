<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class attandance extends Model
{
    protected $table = "attandance_details";
     protected $fillable = ['id' , 'Student_id' , 'teacher_id' ,'Attandance' ,'Date'];
}
