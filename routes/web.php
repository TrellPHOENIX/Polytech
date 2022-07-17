<?php

use App\Http\Controllers\ApplicantsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

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
    return view('pages.home');
})->name('home');

Route::get('/{language}', function ($language) {
    App::setLocale($language);
    return view('home');
});


Route::get('/studentsForm', [ApplicantsController::class, 'index']);
Route::post('/store-form', [ApplicantsController::class, 'store']);
