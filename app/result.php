<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class result extends Model
{
  protected $table = "Result_Detail";
     protected $fillable = ['id' ,'Exam_id' ,'Subject_marks' ,'Student_Id'];
}
