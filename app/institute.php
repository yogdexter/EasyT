<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class institute extends Model
{
 protected $table = "institute_details";
     protected $fillable = ['id' , 'I_Name' ,'I_Address' ,'Principal_Name','Login_Id','Password'];
}
