<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class discussion_answer extends Model
{
   protected $table = "discusion_Answer_details";
     protected $fillable = ['id' , 'Q_id' , 'U_id' ,'D_answer'];
}
