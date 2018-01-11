<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class result extends Model
{
  protected $table = "result_details";
     protected $fillable = ['id' ,'Exam_id' ,'Subject_marks' ,'Student_Id'];
}
