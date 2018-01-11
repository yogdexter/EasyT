<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
 protected $table = "student_details";
     protected $fillable = ['id' , 'Student_id' , 'Name' ,'Address' ,'Contact','Email','Gender','DOB','Class_Id','Teacher_Id'];
}
