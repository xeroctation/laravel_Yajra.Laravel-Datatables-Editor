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
    return redirect()->route('users.index');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/users', [App\Http\Controllers\UsersController::class, 'index'])->name('users.index');
Route::post('/users', [App\Http\Controllers\UsersController::class, 'store'])->name('users.store');
