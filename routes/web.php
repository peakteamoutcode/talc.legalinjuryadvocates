<?php

Route::group(['prefix' => '/1'], function () {

    Route::get('/', function () {
        dd('done');
        return view('1.index');
    })->name('1.index');

});

Route::group(['prefix' => '/2'], function () {

    Route::get('/', function () {
        dd('done');
        return view('1.index');
    })->name('2.index');

});

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/privacy', function () {
    return view('privacy') ;
});
