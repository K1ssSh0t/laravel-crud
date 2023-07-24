<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Models\Category;
use App\Http\Controllers\CategoryController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/games', [GameController::class, 'index'])->name('games');

Route::get('/games/create', [GameController::class, 'create'])->name('gamesCreate');

Route::get('/games/{name_game}/{categoria?}', [GameController::class, 'help']);

Route::post('/games/storeVideogame', [GameController::class, 'storeVideogame'])->name('createVideogame');

Route::get('/view/{game_id}', [GameController::class, 'view'])->name('viewGame');

Route::post('/games/updateVideogame', [GameController::class, 'updateVideogame'])->name('updateVideogame');

Route::get('/delete/{game_id}', [GameController::class, 'delete'])->name('deleteGame');

Route::resource('categories', CategoryController::class);
