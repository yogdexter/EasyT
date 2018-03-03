<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});
Route::get('/land', function () {
    return view('landing');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/registration', function () {
    return view('registration');
});
Route::get('/teacher_registration', function () {
    return view('teacher_registration');
});
Route::get('/student_registration', function () {
    return view('student_registration');
});   
route::get('/add_exam',function () {
	return view('examadd');   
});
Route::get('/student', 'Studentcontroller@index');
Route::get('/exam', function () {
Route::get('/teacher', 'Teachercontroller@index' );
    return view('exam');
});
Route::get('/discussion', 'DiscussionController@index');
Route::get('/ask_question', function () {
    return view('ask_question');
});
Route::get('/question_detail/{id}', 'DiscussionController@detail');
Route::get('/submitAnswer', 'DiscussionController@submitAnswer');
Route::post('ask_question','DiscussionController@create');
Route::post('/doRegister','InstituteController@create');
Route::post('/addTeacher','Teachercontroller@create');
Route::post('/addStudent','StudentController@create');


Route::get('/home', 'HomeController@index')->name('home');
route::post('/addexam','ExamController@create');
Route::get('/attendance', function () {
    return view('attendance');
});
route::get('/dropout', function () {
	return view('dropout');
});
Route::get('/teacher_editing', function () {
    return view('teacher_editing');
});    
Route::get('/student_editing/{id}', 'Studentcontroller@showEditForm');    