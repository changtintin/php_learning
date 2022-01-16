<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ctrlr01;
use App\Http\Controllers\PostController;


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
Route::get('/de', function () {
    return view('debug');
});


Route::get('/home/square', [ctrlr01::class, 'square'])->name('square');
Route::get('/home/root', [ctrlr01::class, 'root'])->name('root');
Route::get('/home/prime', [ctrlr01::class, 'prime'])->name('prime');

Route::get('/home', function () {
    return view('homepage');
});

Route::resource('user', PostController::class);
Route::get('/info', [PostController::class, 'index']);
