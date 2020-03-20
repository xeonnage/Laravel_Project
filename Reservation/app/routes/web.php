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


Route::Resource('admin/dormitory','Admin\DormitoryController');
Route::Resource('admin/roomtype','Admin\RoomTypeController');
Route::Resource('admin/rooms','Admin\RoomController');

Route::Resource('admin/dormitory/show','Admin\RoomsController');


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

