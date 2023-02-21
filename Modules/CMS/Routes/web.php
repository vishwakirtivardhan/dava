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

// CMS Routes Start
Route::prefix('cms')->middleware(['auth'])->group(function() {

    Route::get('/', function () { // After Login Dashboard
        return view('cms::Dashboard.Dashboard');
    });

Route::controller(CreateProfileController::class)->group(function () {// ***** Create profiles ***** \\
    Route::get('/CreateProfile', 'create');
    Route::post('/orders', 'store');
}); // CMS Route Close



});
