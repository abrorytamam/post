<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    postcontroller,
    commentcontroller
};
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

Route::get('/posts', [postcontroller::class,'index']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::post('/posts/store', [PostController::class, 'store']);
Route::get('posts/edit/{id}', [PostController::class, 'edit']);
Route::put('posts/update/{id}', [PostController::class, 'update']);
Route::get('posts/show/{id}', [PostController::class, 'show']);
Route::get('/posts/back/', [PostController::class, 'back']);
Route::get('/posts/delete/{id}', [PostController::class, 'delete']);
Route::post('/posts/comment/store', [commentcontroller::class, 'store']);