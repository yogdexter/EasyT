<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\institute;
class InstituteController extends Controller
{
    public function create(Request $r)
    {
    	$i= new institute;
    	$i->I_Name = $r->name;
    	$i->I_Address = $r->address;
    	$i->Principal_Name = $r->p_name;
    	$i->save();
    }
}
