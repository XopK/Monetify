<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [GameController::class, 'index']);

Route::get('/catalog', [GameController::class, 'catalog']);

Route::POST('/filter', [GameController::class, 'filter']);

Route::get('/edit', function () {
    return view('editProfile');
});
Route::get('/myGame', function () {
    return view('myGame');
});
Route::get('/balance', function () {
    return view('balance');
});
Route::get('/admin/', [GameController::class, 'adminIndex']);

Route::get('/game/{game_id}', [GameController::class, 'detailGame']);

Route::get('/admin/genres', [GenreController::class, 'indexGenres']);

Route::get('/admin/addGame', [GameController::class, 'addGame']);

Route::POST('/admin/addGame/store', [GameController::class, 'store']);

Route::POST('/admin/addGenre/create', [GenreController::class, 'storeGenres']);

Route::get('/admin/{game}/delete', [GameController::class, 'destroy']);

Route::get('/admin/{genre}/deleteGenre', [GenreController::class, 'destroy']);

Route::get('/admin/editGame/{gameEdit}', [GameController::class, 'editShow']);

Route::patch('/admin/editGame/update', [GameController::class, 'updateGame']);

Route::get('/game/{cart}/addCart', [CartController::class, 'addToCart']);

Route::get('/game/{cart}/removeCart', [CartController::class, 'destroy']);

Route::get('/game/create/Order', [CartController::class, 'createOrder']);

Route::get('/admin/addGenre', function () {
    return view('admin.addGenre');
});
Route::get('/admin/editGenre', function () {
    return view('admin.editGenre');
});
Route::patch('/balance/pay', [ProfileController::class, 'balance'])->name('balance');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
