<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('hospital')->user();

    //dd($users);

    return view('hospital.dashboard');
})->name('dashboard');

Route::resource('/staff', 'FacilityStaffController');
Route::resource('/communityhealthworker','HealthWorkerController');
Route::resource('/patientreferrals','ReferralController');
Route::resource('/houses','HouseHoldController');
Route::resource('/surveys', 'SurveyController');



