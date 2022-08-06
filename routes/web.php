<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
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

Route::get('/', [ProjectController::class, 'home']);

Route::get('/home', [ProjectController::class, 'landing']);

Route::get('/books/index',[ProjectController::class, 'index'])->name('books.index');

Route::get('/books/show',[ProjectController::class, 'show'])->name('books.show');

Route::get('/blogs/index',[BlogController::class, 'index'])->name('blogs.index');

Route::get('/blogs/show',[BlogController::class, 'show'])->name('blogs.show');

Route::get('/user-registration',[UserController::class, 'index']);

Route::post('/user-store',[UserController::class, 'userPostRegistration']);

Route::get('/user-login',[UserController::class, 'userLoginIndex']);

Route::post('/login',[UserController::class, 'userPostLogin']);

Route::get('/logout',[UserController::class, 'logout']);
