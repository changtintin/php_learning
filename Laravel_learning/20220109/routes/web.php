<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Test01Controller;
use App\Http\Controllers\Test02Controller;
use App\Http\Controllers\Test03Controller;

// use 是c++ #include

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

Route::get('/temprac', function () {
    return view('template_practice');
});

Route::get('/new', function () {
    return view('/new_file/latte');
});

Route::get('/getnum', [Test02Controller::class, 'hasNumber'])
    ->name('asdasd');

Route::get('/getname', [Test01Controller::class, 'hasName']);


// Route::match(['get', 'post'], '/postname', function(){
//     return view('/post_name');
// });

Route::post('/postname', [Test03Controller::class, 'postName']);

Route::get('/postname', [Test03Controller::class, 'getName']);
