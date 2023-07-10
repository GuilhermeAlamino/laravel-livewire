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

    //post create
    Route::post('/user-create', [HomeController::class, 'store'])->name('create-user');

    //put update edit user
    Route::put('/{id}', [HomeController::class, 'update'])->where('id','[0-9]+')->name('update-edit-user');
    
    //delete user
    Route::delete('/{id}', [HomeController::class, 'delete'])->where('id','[0-9]+')->name('delete_user');

});

//return of routes undefined
Route::fallback(function () {
    return view('not-found');
});
