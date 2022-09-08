<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\SubmissionController;
use App\Http\Controllers\PDFController;

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
Route::resource('submissions', SubmissionController::class);

Route::resource('announcements', AnnouncementController::class);

Route::view('/home','home')->middleware(['auth','verified']);

Route::get('export', [PDFController::class, 'CreatePDF']);

Route::get('redirects', 'App\Http\Controllers\HomeController@index')->middleware(['auth','verified']);

Route::get('/portal', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('homeview');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified','auth','verified'
    
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/portfolio', function () {
        return view('portfolio');
    })->name('portfolio');
});
