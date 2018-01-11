<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dropout extends Model
{
  protected $table = "dropout_details";
     protected $fillable = ['id' , 'Student_id' , 'Dropout Student' ,'Teacher Discription By councilor'];
}
