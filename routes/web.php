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
Route::middleware('auth')->group( function ()
{
    Route::get('/dashboard', function () {
        return view('dashboard');})
        ->name('dashboard');
    Route::get('/show-categories',[CategoriesController::class, 'index'])->name('show-categories');
    Route::get('/show-lesson/{title}',[CategoriesController::class, 'showlessons','title'])->name('show-lessons');
    Route::get('/show-lesson/{title}/{id}',[LessonsController::class, 'show','title','id'])->name('show-lesson');
});


Route::middleware(['auth','IsAdmin'])->group(function(){
    Route::get('/admin',function ()
    {
        return view('admin');
    })->name('admin');
    Route::get('/addcategory',[CategoriesController::class, 'create'])->name('add-category');
    Route::post('/addcategory', [CategoriesController::class, 'store'])->name('store-category');
    Route::get('/addlesson',[LessonsController::class, 'create'])->name('add-lesson');
    Route::post('/addlesson',[LessonsController::class, 'store'])->name('store-lesson');
});
require __DIR__.'/auth.php';
