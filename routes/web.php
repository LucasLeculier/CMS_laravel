<?php

use Illuminate\Support\Facades\Route;


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

Route::get('/register', 'App\Http\Controllers\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'App\Http\Controllers\RegisterController@register');

Route::get('/login', 'App\Http\Controllers\LoginController@showLoginForm')->name('login');
Route::post('/login', 'App\Http\Controllers\LoginController@login');

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

Route::get('/index_projet', 'App\Http\Controllers\ProjectController@index')->name('projects.index')->middleware('auth');
Route::get('/create_projet', 'App\Http\Controllers\ProjectController@create')->name('projects.create')->middleware('auth');




use App\Http\Controllers\ProjectController;

Route::post('/projet', [ProjectController::class, 'store'])->name('project.store');
