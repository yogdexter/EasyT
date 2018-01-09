<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = "teacher_details";
     protected $fillable = ['id' , 'Teacher_Name' , 'Address' ,'Contact' ,'Email' , 'Gender' , 'DOB'];
}
