<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
//show register form
Route::get('/register', 'RegisterController@index')->name('register');
// tempo solution
Route::Post('/', 'RegisterController@createTeacher')->name('teacherRegister');

Route::Post('/register', 'UserRegisterController@createStudent')->name('registerStudent');
// show login form
Route::get('/login', 'StudentLoginController@index')->name('login');


// student login routes
Route::get('/login/student', 'TeacherLoginController@show')->name('student_dashboard');

Route::Post('/login', 'StudentLoginController@authenticate')->name('loginStudent');



// teacher login routes
Route::get('/login/teacher', 'TeacherLoginController@show')->name('teacher_dashboard');

Route::Post('/login/teacher', 'TeacherLoginController@authenticate')->name('loginTeacher');
