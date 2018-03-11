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
    	$i->Principle_Name = $r->p_name;
    	$i->Email_id=$r->email;
    	$i->website=$r->website;
    	$i->phone_number=$r->p_number;
    	$i->Login_Id=$r->email;
    	$i->password=bcrypt($r->password);
    	$i->save();
    	return redirect('/login');
    }
}
