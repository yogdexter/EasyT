<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class discussion_question extends Model
{
   protected $table = "Discussion_Question_details";
     protected $fillable = ['id' , 'Q_id' , 'U_id' ,'Type' ,'Q_discussion'];
}
