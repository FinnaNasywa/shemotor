<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KendaraanController;

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

// Route::get('/kendaraans', [KendaraanController::class, 'index']);
// Route::get('/kendaraans/{id}', [KendaraanController::class, 'show']);

// Route::get('/authors', [AuthorController::class, 'index']);
// Route::get('/authors/{id}', [AuthorController::class, 'show']);


// Route::post('/register', [AuthController::class, 'register']);
// Route::post('/login', [AuthController::class, 'login']);

//Route::resource('kendaraan', KendaraanController::class)->except(
//    ['create','edit']
//);
//Route::delete('kendaraan/{id}', [KendaraanController::class, 'destroy']);
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


//protected routes
// Route::middleware('auth:sanctum')->group(function (){
//     Route::resource('kendaraans', KendaraanController::class)->except(
//         ['create', 'edit', 'index', 'show']
//     );
//     // Route::post('/logout', [AuthController::class, 'logout']);
//     // Route::resource('authors', AuthorController::class)->except(
//     // ['create', 'edit', 'index', 'show']
//     // );
// });

Route::resource('/kendaraan', KendaraanController::class)->except(
    ['create', 'edit']
);
