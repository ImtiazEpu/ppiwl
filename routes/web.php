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
Route::get('execute-payment', 'PaymentController@execute')->name('execute');
Route::post('create-payment', 'PaymentController@create')->name('payment');
Route::get('plan/create','SubscriptionController@createPlane');
Route::get('plan/list','SubscriptionController@listPlan');
Route::get('plan/{id}','SubscriptionController@showPlan');
Route::get('plan/{id}/activate','SubscriptionController@planActivate');
//Route::get('execute-agreement', 'PaymentController@create')->name('payment');

