<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class discussion_answer extends Model
{
   protected $table = "Discussion_Answer_details";
     protected $fillable = ['id' , 'Q_id' , 'U_id' ,'Type' ,'D_answer'];
}
