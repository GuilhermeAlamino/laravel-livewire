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

    //edit user
    Route::get('/{id}/edit', [HomeController::class, 'edit_user_data'])->where('id','[0-9]+')->name('edit-user');

    //put update edit user
    Route::put('/{id}', [HomeController::class, 'update_edit_user_data'])->where('id','[0-9]+')->name('update-edit-user');
    
    //delete user
    Route::delete('/{id}', [HomeController::class, 'delete_user_data'])->where('id','[0-9]+')->name('delete_user');

});

//return of routes undefined
Route::fallback(function () {
    return view('not-found');
});
