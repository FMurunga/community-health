<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('communityhealthworker')->user();

    //dd($users);

    return view('communityhealthworker.home');
})->name('home');

Route::resource('/patientreferrals','HealthWorkers\ReferralController');
Route::resource('/houses','HealthWorkers\HouseHoldController');
Route::resource('/surveys', 'HealthWorkers\SurveyController');
Route::resource('/tasks', 'HealthWorkers\TaskController');