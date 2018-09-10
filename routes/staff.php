<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('staff')->user();

    //dd($users);

    return view('staff.staffdashboard');
})->name('staffdashboard');

Route::resource('/communityhealthworker','Staff\HealthWorkerController');
Route::resource('/patientreferrals','Staff\ReferralController');
Route::resource('/houses','Staff\HouseHoldController');
Route::resource('/surveys','Staff\SurveyController');


