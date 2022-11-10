<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
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
Route::get('/show-categories',[CategoriesController::class, 'index'])->middleware(['auth', 'verified'])->name('show-categories');
Route::get('/show-lesson/{title}',[CategoriesController::class, 'showlessons','title'])->middleware(['auth', 'verified'])->name('show-lessons');
require __DIR__.'/auth.php';
