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

Route::get("graduate/letter", function(
    \Illuminate\Http\Request $request,
    \App\Libraries\Reports\GraduateLetter $letter,
    \App\Libraries\Models\Registrant $Registrant
) {

    if ($request->get('registration_number')) {
        $registrant = $Registrant->where('noreg', $request->get('registration_number'))->first();

        if (empty($registrant->shift)) {
            if ($registrant->kdju1 == '11')
                $shift = 'D';
            else
                $shift = 'A';
        } else {
            $shift = $registrant->shift;
        }

        $biaya = DB::table('tbumb')
                   ->join('tbkod', function($join) {
                       $join->on('tbumb.kdbia', '=', 'tbkod.kdkod')->on('tbkod.kdgrp', '=', DB::raw('99'));
                   })
                   ->where('tahun', $registrant->thusm)
                   ->where('kdgel', $registrant->kdgel)
                   ->where('kdjur', $registrant->kdju1)
                   ->where('shift', $shift)
                   ->where('grade', $registrant->grusm)
                   ->orderBy('kdbia')
                   ->get();

        $letter->registrant($registrant);
        $letter->tuition($biaya);
        $letter->render();
    } else {
        return redirect("/");
    }

})->name('graduated.letter');

Route::get("test", function (\App\Libraries\Models\Exam $exam) {
    // return $exam->search("2020", "41");
//    $data = $registrant->where('noreg', '20300028')->first();
//    $r = $data->load("departement");
//
//    return $r;
    return view("graduate.index");
    //return \App\Libraries\Models\RegistrationNumber::registrationNumber('2020', '4');
});

Route::get('t1', function (\App\Libraries\Reports\GraduateLetter $letter, \App\Libraries\Models\Registrant $Registrant) {
    $registrant = $Registrant->where('noreg', '20200001')->first();

    if (empty($registrant->shift)) {
        if ($registrant->kdju1 == '11')
            $shift = 'D';
        else
            $shift = 'A';
    } else {
        $shift = $registrant->shift;
    }

    $biaya = DB::table('tbumb')
        ->join('tbkod', function($join) {
            $join->on('tbumb.kdbia', '=', 'tbkod.kdkod')->on('tbkod.kdgrp', '=', DB::raw('99'));
        })
                ->where('tahun', $registrant->thusm)
                ->where('kdgel', $registrant->kdgel)
                ->where('kdjur', $registrant->kdju1)
                ->where('shift', $shift)
                ->where('grade', $registrant->grusm)
                ->orderBy('kdbia')
                ->get();

    $letter->registrant($registrant);
    $letter->tuition($biaya);
    $letter->render();
});
