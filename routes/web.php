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


Route::post('/Course/Store',[
    'uses'=>'CoursesController@store',
    'as'=>'course.store'
]);
Route::get('/Course/EDAqAP7B/0W0ujLdMFdO6M9U3yLrrpI9urhugjfI',[
    'uses'=>'CoursesController@index',
    'as'=>'courses'
]);
Route::get('/Course/View/{id}',[
    'uses'=>'CoursesController@show',
    'as'=>'course.view'
]);
Route::group(['middleware' => ['auth']], function () {
    Route::get('/Course/EDgXSAqAP7BgLHT/0W0ujLdMFdO6M9U3y9urhugjfIagXS/{id}',[
        'uses'=>'CoursesController@destroy',
        'as'=>'course.delete'
    ]);
    Route::get('/Course/EDgXSAqAP7BgLHT/0W0ujLdMM9U3yLrrpI9urhugjfIag/{id}',[
        'uses'=>'CoursesController@edit',
        'as'=>'course.edit'
    ]);
    Route::post('/Course/ESAqAP7BgLHT/0W0ujLdMFdO6M9U3yLrrpI9urhugjfIag/{id}',[
        'uses'=>'CoursesController@update',
        'as'=>'course.update'
    ]);
    Route::get('/Course/EDgXSAqAP7BgLHT/0W0ujLdMFdO6M9U3yLrrpI9urhugjfIagXS',[
        'uses'=>'CoursesController@create',
        'as'=>'course.add'
    ]);
});