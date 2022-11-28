<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\FormulirController;
use App\Http\Controllers\TransaksiController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//public routes
// Route::get('me', [AuthController::class, 'me']);



// Route::get('/authors', [AuthorController::class, 'index']);
// Route::get('/authors/{id}', [AuthorController::class, 'show']);


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

//Route::resource('kendaraan', KendaraanController::class)->except(
//    ['create','edit']
//);

//Route::resource('author', AuthorController::class)->except(
//    ['create','edit']
//);    
//Route::get('/author', [AuthorController::class, 'index']);
//Route::get('/author/{id}', [AuthorController::class, 'show']);
//Route::post('/author', [AuthorController::class, 'store']);
//Route::put('/author/{id}', [AuthorController::class, 'update']);
//Route::delete('/author/{id}', [AuthorController::class]);

// Route::resource('author', AuthorController::class)->except(
    // ['create', 'edit']
// );
// Route::get('author', [AuthorController::class, 'index']);
// Route::get('author/{id}', [AuthorController::class, 'show']);//detail
// Route::post('author', [AuthorController::class, 'store']);
// Route::put('author/{id}', [AuthorController::class, 'update']);
// Route::delete('/author/{id}', [AuthorController::class, 'destroy']);

Route::get('/kendaraans', [KendaraanController::class, 'index']);
Route::get('/kendaraans/{id}', [KendaraanController::class, 'show']);

//protected routes
Route::middleware('auth:sanctum')->group(function (){
    

Route::post('/kendaraans', [KendaraanController::class, 'store']);
Route::put('/kendaraans/{id}', [KendaraanController::class, 'update']);
Route::delete('kendaraan/{id}', [KendaraanController::class, 'destroy']);

Route::get('/formulir', [FormulirController::class, 'index']);
Route::post('/formulir', [FormulirController::class, 'store']);
Route::get('/formulir/{id}', [FormulirController::class, 'show']);
Route::put('/formulir/{id}', [FormulirController::class, 'update']);
Route::delete('formulir/{id}', [FormulirController::class, 'destroy']);

Route::get('/transaksi', [TransaksiController::class, 'index']);
Route::post('/transaksi', [TransaksiController::class, 'store']);
Route::get('/transaksi/{id}', [TransaksiController::class, 'show']);
Route::put('/transaksi/{id}', [TransaksiController::class, 'update']);
Route::delete('transaksi/{id}', [TransaksiController::class, 'destroy']);
Route::post('/logout', [AuthController::class, 'logout']);
    // Route::resource('authors', AuthorController::class)->except(
    // ['create', 'edit', 'index', 'show']
    // );
});

// Route::resource('/kendaraan', KendaraanController::class)->except(
//     ['create', 'edit']
// );

