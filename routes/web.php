<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PublisherController;
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

Route::get('/', [BookController::class, 'showHomePage'])->name('index');
Route::get('/book/{book}', [BookController::class, 'showBookDetailPage'])->name('book');
Route::get('/publishers', [PublisherController::class, 'showPublisherPage'])->name('publishers');
Route::get('/publisher/{publisher}', [PublisherController::class, 'showPublisherDetail'])->name('publisher');
Route::get('/category/{category}', [CategoryController::class, 'showCategoryPage'])->name('category');
Route::get('/contact', [CategoryController::class, 'showContactPage'])->name('contact');

