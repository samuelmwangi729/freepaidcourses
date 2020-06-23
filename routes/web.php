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

Route::get('/','IndexController@home');
Route::get('/cat', function () {
    return view('Single');
});
Route::get('/rDAveiHCeuWm098JJNYPjB','IndexController@index');
Auth::routes();
// Route::post('/Login/check','Auth\LoginController@index')->name('login');

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/Menus',[
    'uses'=>'MenusController@index',
    'as'=>'menus'
]);
Route::post('/Menus/Add',[
    'uses'=>'MenusController@store',
    'as'=>'menu.add'
]);
Route::get('/Menus/Add/{id}',[
    'uses'=>'MenusController@destroy',
    'as'=>'menu.delete'
]);
Route::get('/Course/View/{slug}',[
    'uses'=>'CoursesController@specific',
    'as'=>'Course'
]);

Route::get('/Courses/View/{menu}',[
    'uses'=>'CoursesController@single',
    'as'=>'View'
]);

Route::get('/Course/Add',[
    'uses'=>'CoursesController@create',
    'as'=>'course.add'
]);
Route::post('/Course/Store',[
    'uses'=>'CoursesController@store',
    'as'=>'course.store'
]);
Route::get('/Course/All',[
    'uses'=>'CoursesController@index',
    'as'=>'courses'
]);
Route::get('/Course/View/{id}',[
    'uses'=>'CoursesController@show',
    'as'=>'course.view'
]);
Route::get('/Course/Delete/{id}',[
    'uses'=>'CoursesController@destroy',
    'as'=>'course.delete'
]);
Route::get('/Course/Edit/{id}',[
    'uses'=>'CoursesController@edit',
    'as'=>'course.edit'
]);
Route::post('/Course/Update/{id}',[
    'uses'=>'CoursesController@update',
    'as'=>'course.update'
]);