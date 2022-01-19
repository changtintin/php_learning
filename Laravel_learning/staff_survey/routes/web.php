<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SurveyController;

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
Route::get('/home', function () {
    return view('mainpage');
});
Route::resource('survey', SurveyController::class);
Route::get('/home/show', [SurveyController::class, 'show_bridge'])->name('show_bridge');
Route::get('/home/showall', [SurveyController::class, 'show_all'])->name('show_all');
Route::get('/home/delete', [SurveyController::class, 'delete'])->name('delete');
