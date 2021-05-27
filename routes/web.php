<?php

use App\Http\Controllers\AmplifierController;
use App\Http\Controllers\ModelController;
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
    return view('home');
})->name('home');

Route::get('/amplifiers', [AmplifierController::class, 'index'])->name('amplifier.index');
Route::get('/amplifiers/{amplifier:slug}', [AmplifierController::class, 'show'])->name('amplifier.show');

Route::get('/models/{model:slug}', [ModelController::class, 'show'])->name('model.show');

Route::get('/impulse-responses', function () {
    return view('impulse-responses');
})->name('impulse-responses');

Route::get('/tips', function () {
    return view('tips-and-tricks');
})->name('tips');

Route::get('/about', function () {
    return view('about');
})->name('about');

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['guest'])->name('dashboard');

require __DIR__.'/auth.php';
