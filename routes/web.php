<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\MainpagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\UserdatasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboards',function(){
        return view('dashboards.index');
    })->name('dashboards.index');
    Route::resource('posts',PostsController::class);
    Route::resource('tags',TagsController::class);
    Route::resource('comments',CommentsController::class);
    Route::resource('userdatas',UserdatasController::class);

    Route::resource('mainpages',MainpagesController::class);


});

require __DIR__.'/auth.php';
