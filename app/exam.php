<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class exam extends Model
{
  protected $table = "Exam_details";
     protected $fillable = ['id' , 'Exam_id' , 'Exam_Type' ,'Exam_Time' ,'Class_id','Subject','Total'];
}
