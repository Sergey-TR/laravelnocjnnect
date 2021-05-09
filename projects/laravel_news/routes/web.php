<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AboutController;
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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::get('/main', [\App\Http\Controllers\MainController::class, 'index'])->name('template');
Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/news', [NewsController::class, 'allNews'])->name('news.index');
//Route::get('/news/add', [NewsController::class, 'create'])->name('news.create');
Route::get('/news/{news}', [NewsController::class, 'show'])->name('news.show');
Route::get('/news.main_news', [\App\Http\Controllers\NewsController::class, 'index'])->name('news.main_news');

Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/{category}', [CategoryController::class, 'show'])->name('category.show');


