<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class attandance extends Model
{
    protected $table = "Attandance_details";
     protected $fillable = ['id' , 'Student_id' , 'Teacher_id' ,'Attandance' ,'Date'];
}
