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
})->name('welcome');

Route::get('/home', function () {

    return view('website.home');
})->name('home');


Route::get('/News', function () {

    return view('website.news');
})->name('news');


Route::get('/About Us', function () {

    return view('website.about_us');
})->name('aboutUs');




//show register form
Route::get('/register', 'RegisterController@index')->name('register');
// tempo solution
Route::Post('/', 'RegisterController@createTeacher')->name('teacherRegister');

Route::Post('/register', 'UserRegisterController@createStudent')->name('registerStudent');
// show login form
Route::get('/login', 'Student\Auth\StudentLoginController@index')->name('login');
Route::Post('/logout','LogoutController@index' )->name('logout');


// student login routes
Route::get('/student', 'Student\Auth\StudentLoginController@show')->name('student.dashboard')->middleware('auth:student');

Route::Post('/login/teacher', 'Student\Auth\StudentLoginController@authenticate')->name('loginStudent');

//Route::prefix('/Student')->name('student.')->namespace('Student')->group(function(){
    //All theteacher routes will be defined here...
  //});



// teacher login routes
Route::get('/teacher', 'Teacher\Auth\TeacherLoginController@show')->name('teacher.dashboard')->middleware('auth:teacher');

Route::Post('/login', 'Teacher\Auth\TeacherLoginController@authenticate')->name('loginTeacher');

//Route::prefix('teacher')->name('teacher.')->namespace('Teacher')->group(function(){


    //All theteacher routes will be defined here...
 // });
// student routes middleware 
 // post resource route 
 Route::resource('posts','PostController' );
  

 // students form routes 
 Route::get('student/{form}','FormController@form')->name('showfrom')->middleware('auth:student');
 Route::get('/{post}','FormController@download')->name('download');


 