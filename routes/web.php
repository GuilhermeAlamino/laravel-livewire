<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

//Create prefix of routes
Route::prefix('/')->group(function () {

    //view list
    Route::get('/', [HomeController::class, 'list'])->name('list-index');

    //view create
    Route::get('/user-create', [HomeController::class, 'users_create'])->name('users-create-list');

    //post create
    Route::post('/user-create', [HomeController::class, 'create_user_data'])->name('create-user');

});

//return of routes undefined
Route::fallback(function () {
    return view('not-found');
});
