<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discussion_Question extends Model
{
    protected $table = 'discussion__questions';
    protected $fillable = ['id' , 'D_Qid', 'uid' ,'Type','Q_Discussion'];
}
