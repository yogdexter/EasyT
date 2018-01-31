<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Discussion_Question;
use App\Discusion_Answer_Details;
use Auth;
use Redirect;
class DiscussionController extends Controller
{
    public function create(Request $r)
    {
    	$dq= new Discussion_Question;
    	$dq->uid =  Auth::id();
    	$dq->question = $r->input('question');
    	$dq->description = $r->input('description');
    	$dq->save();
    	return redirect('/discusion');
    }
    public function index()
    {
    	$d = Discussion_Question::all();
    	return view('Discussion_Question')->with('questions' , $d);
    }
    public function detail($id)
    {
    	$d = Discussion_Question::where('id',$id)->first();
    	return view('question_detail');->with('question',$d)
    }
    public function submitAnswer(Request $r)
    {
    	$da = new Discusion_Answer_Details;
    	$da->Q_id = $r->input('question_id');
    	$da->U_id = Auth::id();
    	$da->answer = $r->input('answer');
    	$da->save();
    	return Redirect::back();
    }
}
