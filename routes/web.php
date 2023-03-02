<?php

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

//2. make get route for the queue blade
Route::get('/queue', function () {
    return view('queue');
});

//3. make a action post route for the form
Route::post('queue',[\App\Http\Controllers\mailController::class, 'queue'])->name('queue');