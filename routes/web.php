<?php

use App\Http\Controllers\UpdateController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('header', function () {
    return view('header');
});

Route::get('footer', function () {
    return view('footer');
});

Route::get('tots-and-tinies', function () {
    return view('tots-and-tinies');
});

Route::get('cheer', function () {
    return view('cheer');
});

Route::get('tumbling', function () {
    return view('tumbling');
});

Route::get('hip-hop', function () {
    return view('hip-hop');
});

Route::get('theme', function () {
    return view('theme');
});

Route::get('parent-handbook', function () {
    return view('parent-handbook');
});

Route::get('our-staff', function () {
    return view('our-staff');
});

Route::get('parties', function () {
    return view('parties');
});

Route::get('facility-rentals', function () {
    return view('facility-rentals');
});

Route::get('newsletter', function () {
    return view('newsletter');
});

Route::get('calendar', function () {
    return view('calendar');
});

Route::resource('updates', UpdateController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
