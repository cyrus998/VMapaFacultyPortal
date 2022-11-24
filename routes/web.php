<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\SubmissionController;
use App\Http\Controllers\PortfolioPDFController;
use App\Http\Controllers\SchedulePDFController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ChartJSController;
use App\Http\Controllers\ContactController;
use App\Http\Livewire\Subjects;
use App\Http\Livewire\Users;
use App\Http\Livewire\Portfolios;
use App\Http\Livewire\Selfinfos;
use App\Http\Livewire\Adminchat;
use App\Http\Livewire\Facultyannouncements;
use App\Http\Livewire\Publicannouncements;
use App\Http\Livewire\Replies;

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
Route::get('sched', [SchedulePDFController::class, 'generatePDF']);

Route::get('gg', [PortfolioPDFController::class, 'generatePDF']);

Route::post('/send', [Replies::class, 'send'])->name('send.email');

Route::get('allcontactusmessages', Replies::class)->middleware('auth');


Route::get('publicannouncements', Publicannouncements::class);

Route::get('facultyannouncements', Facultyannouncements::class)->middleware('auth');

Route::get('adminchat', Adminchat::class)->middleware('auth');

Route::get('selfinfos', Selfinfos::class)->middleware('auth');

Route::get('chart', [ChartJSController::class, 'index']);

Route::get('portfolios', Portfolios::class)->middleware('auth');

Route::get('subjects', Subjects::class)->middleware('auth');

Route::get('users', Users::class)->middleware('auth');

Route::resource('contact', ContactController::class);

Route::resource('submissions', SubmissionController::class);

Route::resource('announcements', AnnouncementController::class);

Route::view('/home', 'home')->middleware(['auth', 'verified']);

Route::get('export', [PDFController::class, 'CreatePDF']);

Route::get('redirects', 'App\Http\Controllers\HomeController@index')->middleware(['auth', 'verified']);

Route::get('/portal', function () {
    return view('welcome');
});

Route::get('/publicnews', function () {
    return view('publicnews');
});

Route::get('/awardees', function () {
    return view('awardees');
});

Route::get('/missionandvision', function () {
    return view('missionandvision');
});

Route::get('/aboutview', function () {
    return view('aboutview');
});

Route::get('/', function () {
    return view('homeview');
})->name('homeview');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified', 'auth', 'verified'

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
