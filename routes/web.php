<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\LessonsController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\UserController;
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

Route::middleware('auth',)->group( function ()
{
    Route::prefix('post')->group(function()
    {
        Route::get('/', [PostController::class,'index'])->name('post-view');
        Route::get('/create-post', [PostController::class,'create'] )->name('create-post');
        Route::post('/create-post',[PostController::class,'store'])->name('add-post');
        Route::get('/{id}',[PostController::class,'show','id'])->name('show-post');
    });

    Route::get('/subscribe',[UserController::class, 'subscribe'])->name('subscribe');
    Route::get('/dashboard', function () {
        return view('dashboard');})
        ->name('dashboard');
    Route::prefix('show')->group(function()
    {
        Route::get('/',[CategoriesController::class, 'index'])->name('show-categories');
        Route::get('/{title}',[CategoriesController::class, 'showlessons','title'])->name('show-lessons');
        Route::get('/{title}/{lesson}',[LessonsController::class, 'show','title','lesson'])->name('show-lesson');
        Route::get('/{title}/{lesson}/edit',[LessonsController::class, 'edit' ,'title','lesson'])->name('edit-lesson')->middleware('IsAdmin');
        Route::put('/{title}/{lesson}',[LessonsController::class, 'update','title','lesson'])->name('update-lesson')->middleware('IsAdmin');
    });
});
Route::middleware(['auth','IsAdmin'])->group(function(){
    Route::prefix('admin')->group(function(){
        Route::get('/',function ()
        {
            return view('admin');
        })->name('admin');
        Route::get('/addcategory',[CategoriesController::class, 'create'])->name('add-category');
        Route::post('/addcategory', [CategoriesController::class, 'store'])->name('store-category');
        Route::get('/addlesson',[LessonsController::class, 'create'])->name('add-lesson');
        Route::post('/addlesson',[LessonsController::class, 'store'])->name('store-lesson');

        Route::get('/send-mail', [EmailController::class, 'index'])->name('show-email');
        Route::post('/send-mail', [EmailController::class, 'store'])->name('send-email');
    });

});

require __DIR__.'/auth.php';
