<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\LessonsController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/show-categories',[CategoriesController::class, 'index'])->middleware(['auth'])->name('show-categories');
Route::get('/show-lesson/{title}',[CategoriesController::class, 'showlessons','title'])->middleware(['auth'])->name('show-lessons');
Route::get('/show-lessons/{title}',[LessonsController::class, 'show','title'])->middleware(['auth'])->name('show-lesson');
require __DIR__.'/auth.php';
