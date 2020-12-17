<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountsController;
use App\Http\Controllers\PostsController;

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

Route::redirect('/', '/home', 301);

Route::get("/home", [PostsController::class, "home"])->name("/home");

Route::resources([
    '/blog' => PostsController::class,
    '/account' => AccountsController::class
    ]);

// Route::resource('/blog', PostsController::class)->only(['index'])->middleware('auth');

Auth::routes();
