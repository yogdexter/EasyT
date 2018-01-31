<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\student;
class StudentController extends Controller
{
     public function create(Request $r)
    {
    	$s = new student;
    	$s->Name =$r->S_name;
    	$s->Address =$r->S_address;
    	$s->Email =$r->Email;
    	$s->Contact =$r->P_number;
    	$s->Gender =$r->Gender;
    	$s->DOB =$r->DOB;
    	$s->Class_ID =$r->Standard;
    	$s->save();
        return redirect('/student');
    }
    public function index(Request $r)
    {
        $s = student::all();
        return view('student')->with('students',$s);    
    }
}
