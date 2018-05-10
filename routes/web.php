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
    return view('welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('teachers','TeacherController');
Route::get('/teacher/create',['as'=>'teacher.create','uses'=>'TeacherController@create']);
Route::post('/teacher/store',['as'=>'teacher.store','uses'=>'TeacherController@store']);
Route::get('/teacher/index',['as'=>'teacher.index','uses'=>'TeacherController@index']);
