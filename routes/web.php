<?php

use App\Http\Controllers\UploadVideoController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('channels', 'ChannelController');
Route::resource('channels/{channel}/subscriptions', 'SubscriptionController')->only(['store', 'destroy'])->middleware(['auth']);
Route::get('channels/{channel}/videos', [UploadVideoController::class, 'index'])->name('channels.upload');
