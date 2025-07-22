<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/card', function () {
    return view('lp1');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/login', function () {
    return view('auth.login');
});
Route::post('/login', function () {
    return view('auth.login');
});
Route::get('/registration', function () {
    return view('auth.registration');
});
Route::post('/registration', function () {
    return view('auth.registration');
});

Route::post('/login', [App\Http\Controllers\AuthenticationController::class, 'login']);
Route::post('/registration', [App\Http\Controllers\AuthenticationController::class, 'registration']);

Route::middleware('auth')->group(function(){
    Route::get('/admin/dashboard', [Controller::class, 'dashboard']);
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
