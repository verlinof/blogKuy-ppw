<?php

use App\Models\Account;
use App\Models\Categories;
use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Events\Registered;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CategoriesController;

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

Route::get('/', function(){
    return view('home', [
    "title" => "home",
    "isLogin" => false]);
});

Route::get('/search', function(){
    return view('search', [
        'title' => 'search',
        'isLogin' => false
    ]);
});

Route::get('/login', [LoginController::class, 'index']);

Route::get('/register', [LoginController::class, 'register']);

Route::get('/account', [AccountController::class, 'index']);

Route::get('/post', [PostController::class, 'index']);

Route::get('/user', [AccountController::class, 'user']);

Route::get('/category', [CategoriesController::class, 'index']);
