<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

/*
Route::get('/', function () {
    return view('welcome');
});
*/
//Route::get('/', '\App\Http\Controllers\PostController@index')->name('blog.index');

Route::get('/', [PostController::class, 'index'])->name('post.index');
Route::get('/search', [PostController::class, 'search'])->name('post.search');
Route::get('/create', [PostController::class, 'create'])->name('post.create');
Route::post('/store', [PostController::class, 'store'])->name('post.store');
Route::get('/show/{id}', [PostController::class, 'show'])->name('post.show');
Route::get('/edit/{id}', [PostController::class, 'edit'])->name('post.edit');
Route::patch('/update/{id}', [PostController::class, 'update'])->name('post.update');
Route::delete('/destroy/{id}', [PostController::class, 'destroy'])->name('post.delete');
