<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class TeacherController extends Controller
{
	public function create(Request $r)
	{
		$i= new Teacher;
		$i->Teacher name = $r->t_name;
		$i->Address = $r->t_address;
		$i->Contact = $r->c_number;
		$i->Gender = $r->gender;
		$i->DOB = $r->dob;
		$i->save();
	}
}