<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BlogController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewpostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IndexController;

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


Route::get('/', [IndexController::class, 'index']);

Route::get('/blog', [BlogController::class, 'blog']);

Route::get('/about', [AboutController::class, 'about']);

Route::get('/contact', [ContactController::class, 'contact']);

Route::get('/new-post', [NewpostController::class, 'newpost']);

Route::get('/category', [CategoryController::class, 'category']);

Route::post('/create-job', [NewpostController::class, 'create'])->name('job.create');