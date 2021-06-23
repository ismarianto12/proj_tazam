<?php

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
// Auth

// use Modules\Parameter\Http\Livewire\Parameter;
Auth::routes();

Route::prefix('parameter')->name('parameter.')->group(function () {
    Route::get('/',Modules\Parameter\Http\Livewire\Parameter::class)->name('');
});
