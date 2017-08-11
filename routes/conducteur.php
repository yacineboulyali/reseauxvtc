<?php

Route::get('/conducteur', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('conducteur')->user();

    //dd($users);

    return view('conducteur.home');
})->name('home');

