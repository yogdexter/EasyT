<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\exam;
class ExamController extends Controller
{
   public function create(request $r)
   {
   	$i= new exam;
		$i->id= $r->e_id;
		$i->exam_id = $r->e_examid;
		$i->Description = $e->e_description;
		$i->Exam_time = $r->e_examtime;
		// $i->class_id = $r->e_classid;
		$i->subjects = $r->e_subjects;
		$i->total = $r->e_total;
		$i->save();
		return redirect('/exam');
	}
	public function index(Request $r)
	{
		$e = exam::all();
		return view('exam')->with('exams',$e);	

   }
}
