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
Route::post('/doRegister','InstituteController@create');
Route::post('/addTeacher','Teachercontroller@create');
Route::post('/addStudent','StudentController@create');
route::post('/addexam','ExamController@create');
Route::get('/attendance', function () {
    return view('attendance');
});
route::get('/dropout', function () {
	return view('dropout');
});