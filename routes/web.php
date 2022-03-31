<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\UsersController;
use Illuminate\Support\Facades\Route;

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
//Route::middleware(['auth:sanctum', 'role:admin'])->prefix('admin')->name('admin.')->group(function ()


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware(['auth:web'])->prefix('admin')->group(function () {

    Route::get('/', [AdminController::class, 'index']);

    Route::resources([
        'users'  => UsersController::class,
        'news'  => NewsController::class,
    ]);



});

