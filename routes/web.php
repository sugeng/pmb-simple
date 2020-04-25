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

Route::get('/', "FrontendController@index");
Route::get("registration", "RegistrationController@index")->name("registration.index");
Route::post("registration", "RegistrationController@store")->name("registration.store");

Route::get("test", function () {
    return view("registration.confirmation_page");
    //return \App\Libraries\Models\RegistrationNumber::registrationNumber('2020', '4');
});
