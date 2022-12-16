<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\HomeController;
use App\Models\Video;

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

Route::post('/register',[UserController::class,'store'])->name('auth.register');
Route::get('/register',[UserController::class,'show'])->name('register');
Route::get('/',[HomeController::class,'home'])->name('index');
Route::get('/logout',[UserController::class,'logout'])->name('logout');


Route::get('/login',[UserController::class,'showLogin'])->name('login');
Route::post('/login_url',[UserController::class,'postlogin'])->name('auth.login');




Route::get('/add',[VideoController::class,'add'])->name('add');
Route::post('/addvideo',[VideoController::class,'addvideo'])->name('addvideo');
Route::get('/listvideo',[VideoController::class,'listvideo'])->name('listvideo');

Route::get('/video-delete/{id}',[VideoController::class,'destroy'])->name('video.delete');
Route::get('/video-update/{id}',[VideoController::class,'editvideo'])->name('video.update');
Route::post('/video-update-success',[VideoController::class,'update'])->name('video.edit');

Route:: post('/search',[HomeController::class, 'search'])->name('search');
Route:: post('/searchlist',[HomeController::class, 'searchlist'])->name('searchlist');


Route::get('/buymusic{id}',[VideoController::class,'buy'])->name('buy.music');