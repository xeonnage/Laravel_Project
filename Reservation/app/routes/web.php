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
Route::Resource('admin/rooms','Admin\RoomController',['except' => 'create'] );
Route::get('admin/rooms/create/{id}', 'Admin\RoomController@create')->name('rooms.create');;

Route::Resource('admin/Reservations','Admin\ReservationsController',['except' => 'create'] );
Route::get('/Reservations/create/{id}', 'Admin\ReservationsController@create')->name('rooms.create');;

// Route::Resource('admin/problemtype','Admin\ProblemTypeController');
Route::get('admin/Problemtype','Admin\ProblemTypeController@create');
Route::get('admin/Problemtype','Admin\ProblemTypeController@index');
Route::post('admin/Problemtype','Admin\ProblemTypeController@store');
Route::get('admin/Problemtype/edit/{id}','Admin\ProblemTypeController@edit');
Route::post('admin/Problemtype/update/{id}','Admin\ProblemTypeController@update');
// Route::get('admin/deleteProblemtype/{id}','Admin\ProblemTypeController@delete');



Route::Resource('admin/reportproblem','Admin\RoomController');




//Route::Resource('admin/dormitory/show','Admin\RoomController');

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

