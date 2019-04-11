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
Route::post('/AddMember', 'AddMemberController@index');
Route::resource('Order', 'OrdersController');
Route::resource('Dashboard', 'DashboardController');
Route::get('/ViewAndEdit/{orde}','OrdersController@show');
Route::get('/Unpaid','OrdersController@Unpaid');
Route::get('/OrderToSend','OrdersController@OrderToSend');
Route::get('/RequestsSubmitted','OrdersController@RequestsSubmitted');
Route::get('/Profile/{user}','ProfileController@Profile');
Route::get('/ChangePassword','ProfileController@ChangePassword');
Route::patch('/UpdateProfile/{user}','ProfileController@UpdateProfile');








