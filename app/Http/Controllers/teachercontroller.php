<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Teacher;
class TeacherController extends Controller
{
	public function create(Request $r)
	{
		$i= new Teacher;

		$i->Teacher_name = $r->t_name;
		$i->Address = $r->t_address;
		$i->Contact = $r->c_number;
		$i->Email=$r->email;
		$i->Gender = $r->Gender;
		$i->DOB = $r->dob;
		$i->save();
		return redirect('/teacher');
	}
	public function index(Request $r)
	{
		$t = Teacher::all();
		return view('teacher')->with('teachers',$t);
	}
	public function showEditForm($id)
	{
		$t = teacher::find($id);
		return view('teacher_editing')->with('teacher',$t);	
	}
}