<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class exam_Question extends Model
{
 protected $table = "exam_question";
     protected $fillable = ['id' , 'Q_id' , 'Exam_Id' ,'Questions' ,'Answer1','Answer2','Answer3','Answer4'];
}
