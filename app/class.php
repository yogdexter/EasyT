<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class class extends Model
{
    protected $table = "Class_details";
     protected $fillable = ['id' , 'Class_id' , 'C_name' ,'Teacher_Id' ,'Student_Id'];
}
