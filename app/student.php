<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{

 protected $table = "students_Details";
     protected $fillable = ['id' ,'Name' ,'Address' ,'Contact','Email','Gender','DOB','Class_Id','Teacher_Id'];
}
