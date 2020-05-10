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

Route::post("graduate", "GraduatedController@show")->name("graduated.show");
Route::get("graduate/check", "GraduatedController@check")->name("graduated.check");

Route::get("test", function (\App\Libraries\Models\Exam $exam) {
    // return $exam->search("2020", "41");
//    $data = $registrant->where('noreg', '20300028')->first();
//    $r = $data->load("departement");
//
//    return $r;
    return view("graduate.index");
    //return \App\Libraries\Models\RegistrationNumber::registrationNumber('2020', '4');
});
