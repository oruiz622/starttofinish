<?php

use App\Http\Controllers\UploadVideoController;
use App\Http\Controllers\SubscriptionController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('channels', 'ChannelController');

Route::get('videos/{video}', [VideoController::class, 'show']);

Route::middleware(['auth'])->group(function () {
    Route::resource('channels/{channel}/subscriptions', 'SubscriptionController')->only(['store', 'destroy']);
    Route::get('channels/{channel}/videos', [UploadVideoController::class, 'index'])->name('channels.upload');
    Route::post('channels/{channel}/videos', [UploadVideoController::class, 'store']);
});
