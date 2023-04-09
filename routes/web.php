<?php

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

Route::get('/', function () {
    return view('welcome');
});


Route::view('/index', 'dashboard.index');
Route::view('/starter', 'dashboard.starter');
Route::view('/forms', 'dashboard\forms\general');
Route::view('/category/index', 'dashboard\category\index');
Route::view('/category/create', 'dashboard\category\create');
// Route::prefix('/categories',)
