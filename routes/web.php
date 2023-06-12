<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/index/users', [UserController::class, 'index'] )->name('user.index');
// Route::get('/index/users/old'. 'UserControler@index')->name('user.index.old');
Route::get('/index/post', [PostController::class, 'index'] )->name('post.index');

Route::get('/post/show/{post}', [PostController::class, 'show'] )->name('post.show');
Route::get('/post/edit/{post}', [PostController::class, 'edit'])->name('post.edit');
Route::post('/post/eliminar/{id}', [PostController::class,'destroy'])->name('post.eliminar');
Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
Route::post('/post/store', [PostController::class, 'store'])->name('post.store');
Route::post('/post/update', [PostController::class, 'update'])->name('post.update');


