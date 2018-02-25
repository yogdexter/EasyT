<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discussion_Question extends Model
{
    protected $table = 'discussion__questions';
    protected $fillable = ['id' , 'uid' ,'question' ,'description'];
}
