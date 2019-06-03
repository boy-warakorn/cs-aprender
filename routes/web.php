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
Route::get('tutor', function () {
    return view('tutor');
});
Route::get('tutor-info', function () {
    return view('tutor-info');
});
Route::get('tutor-setting', function () {
    return view('SettingTutor');
});
Route::get('tutor-edit', function () {
    return view('edit-tutor');
});
Route::resource('profile', 'ProfilesController');

Route::get('profile', 'UserController@profile');

Route::post('profile', 'UserController@update_avatar');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


