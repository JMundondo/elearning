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
Route::get('/login', 'Student\Auth\StudentLoginController@index')->name('login');


// student login routes
Route::get('/student', 'Student\Auth\StudentLoginController@show')->name('student.dashboard');

Route::Post('/login/teacher', 'Student\Auth\StudentLoginController@authenticate')->name('loginStudent');

//Route::prefix('/Student')->name('student.')->namespace('Student')->group(function(){
    //All theteacher routes will be defined here...
  //});



// teacher login routes
Route::get('/teacher', 'Teacher\Auth\TeacherLoginController@show')->name('teacher.dashboard');

Route::Post('/login', 'Teacher\Auth\TeacherLoginController@authenticate')->name('loginTeacher');

//Route::prefix('teacher')->name('teacher.')->namespace('Teacher')->group(function(){


    //All theteacher routes will be defined here...
 // });
// student routes middleware 
 // post resource route 
 Route::resource('posts','PostController' );
  

 // students form routes 
 Route::get('form/{form}','FormController@show');
 