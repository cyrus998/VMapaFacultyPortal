<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\SubmissionController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Livewire\Subjects;



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

Route::get('subjects', Subjects::class)->middleware('auth');

Route::controller(UserController::class)->group(function () {
    Route::get('/users', 'index')->name('user.index');
    Route::get('/user/create', 'create')->name('user.create');
    Route::post('/user/store', 'store')->name('user.store');
    Route::get('/user/{user}', 'show')->name('user.show');
    Route::get('/user/{user}/edit', 'edit')->name('user.edit');
    Route::put('/user/{user}/update', 'update')->name('user.update');
    Route::delete('/user/{user}/delete', 'delete')->name('user.delete');
});

Route::resource('contact', ContactController::class);

Route::resource('submissions', SubmissionController::class);

Route::resource('announcements', AnnouncementController::class);

Route::view('/home','home')->middleware(['auth','verified']);

Route::get('export', [PDFController::class, 'CreatePDF']);

Route::get('redirects', 'App\Http\Controllers\HomeController@index')->middleware(['auth','verified']);

Route::get('/portal', function () {
    return view('welcome');
});

Route::get('/missionandvision', function () {
    return view('missionandvision');
});

Route::get('/aboutview', function () {
    return view('aboutview');
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

    Route::get('/myhandledsections', function () {
        return view('myhandledsections');
    })->name('myhandledsections');
});
