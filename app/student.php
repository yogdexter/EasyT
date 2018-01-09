<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
 protected $table = "Student_Detail";
     protected $fillable = ['id' , 'Student_id' , 'Name' ,'Address' ,'Contact','Email','Gender','DOB','Class_Id','Teacher_Id'];
}
