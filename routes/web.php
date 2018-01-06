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
Route::get('/registration', function () {
    return view('registration');
});
Route::get('/teacher', function () {
    return view('teacher');
});