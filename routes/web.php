<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Users1Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\LessonsController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use \App\Http\Controllers\LessonCommentController;
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
    Route::get('/subscribe',[UserController::class, 'subscribe'])->name('subscribe');
    Route::get('/dashboard', function () {
        return view('dashboard');})
        ->name('dashboard');
    Route::get('/settings',function() {
       return view('settings');
    })->name('settings');
    Route::prefix('post')->group(function()
    {
        Route::get('/', [PostController::class,'index'])->name('post-view');
        Route::get('/create-post', [PostController::class,'create'] )->name('create-post');
        Route::post('/create-post',[PostController::class,'store'])->name('add-post');
        Route::get('/{id}',[PostController::class,'show','id'])->name('show-post');
        Route::post('/{id}/remove',[PostController::class,'destroy','id'])->name('remove-post');
    });

    Route::prefix('learn')->group(function()
    {

        Route::get('/',[CategoriesController::class, 'index'])->name('show-categories');
        Route::get('/{title}',[CategoriesController::class, 'showlessons','title'])->name('show-lessons');
        Route::get('/{title}/{lesson}',[LessonsController::class, 'show','title','lesson'])->name('show-lesson');
        Route::get('/{title}/{lesson}/edit',[LessonsController::class, 'edit' ,'title','lesson'])->name('edit-lesson')->middleware('IsAdmin');
        Route::put('/{title}/{lesson}',[LessonsController::class, 'update','title','lesson'])->name('update-lesson')->middleware('IsAdmin');

        Route::post('/{title}/{lesson}',[LessonCommentController::class,'store'])->name('add-lesson-comment');
        Route::get('/{title}/{lesson}/{id}',[LessonCommentController::class,'show','title','lesson','id'])->name('lesson-comment');
        Route::delete('/{title}/{lesson}',[LessonCommentController::class,'destroy','comment-id'])->name('remove-lesson-comment');
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
        Route::prefix('/users')->group(function() {
            Route::get('/',[Users1Controller::class,'index'])->name('show-users');
            Route::post('/delete/{id}',[Users1Controller::class,'destroy'])->name('users.destroy');
            Route::get('/{id}',[Users1Controller::class,'edit','id'])->name('users.edit');
            Route::post('/{id}/update',[Users1Controller::class,'update'])->name('users.update');
            //Route::put('/users/{id}', [UserController::class,'ban','id'])->name('ban');
            Route::get('/search',[UserController::class,'Search'])->name('search');
            Route::get('/filter',[UserController::class,'Filter'])->name('filter');
        });

        Route::get('edit-category',[CategoriesController::class,'edit'])->name('edit-category');
        Route::post('edit-category',[CategoriesController::class,'update'])->name('update-category');
    });

});

require __DIR__.'/auth.php';
