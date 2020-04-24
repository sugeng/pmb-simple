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

Route::get("registration", function () {
    return view('registration.index');
});

Route::post("registration", function (\Illuminate\Http\Request $request) {
    (new \App\Libraries\Registration\Registration(
        new \App\Libraries\Models\Registrant(),
        $request->all()
    ))->store();
});

Route::get("test", function () {
    return \App\Libraries\Models\RegistrationNumber::registrationNumber('2020', '4');
});
