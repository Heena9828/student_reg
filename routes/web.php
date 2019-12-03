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

    Route::get('/', function ()
    {
        return view('welcome');
    });

    Auth::routes();
    ///login and register
    Route::get('/home', 'HomeController@index')->name('home');
    Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function ()
    {
        Route::get('/', 'Auth\LoginController@showLoginForm');
        Route::post('login', 'Auth\LoginController@login');
        Route::get('logout', 'Auth\LoginController@logout');
    });

    //Logout
    Route::get('logout', 'Auth\LoginController@logout');

    ///home page
    Route::get('index', 'HomeController@index');

    ////Class
    Route::resource('classes', 'ClassController');


    ///Section
    Route::resource('sections', 'SectionController');

    //// Student
    Route::resource('students', 'StudentController');

    ////Multiple Students
    Route::get('multi_students', 'StudentController@add_multi_students');
    Route::post('multi_students', 'StudentController@import')->name('import');

    /////Attendance
    Route::resource('attendances', 'AttendanceController');
    Route::post('/attendance', 'AttendanceController@store');

    Route::get('getStudentByClass/{cid}/{sid}', 'AttendanceController@getStudents');








    