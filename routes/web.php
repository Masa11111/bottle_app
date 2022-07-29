<?php

use App\Http\Controllers\bottleController;
use App\Http\Controllers\UserController;
use App\Models\Bottle;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

//メインルート
Route::group(['prefix' => 'bottle'], function()
{
    Route::get('', [bottleController::class, 'index']);
    Route::get('/add', [bottleController::class, 'add']);
    Route::post('/add', [bottleController::class, 'create']);
    Route::get('/delete', [bottleController::class, 'delete']);
    Route::post('/delete', [bottleController::class, 'remove']);
    Route::get('/notion', [bottleController::class, 'notion']);
    Route::get('/serch', 
        function()
        {
            return view('bottle.bottle_serch');
        });
    Route::post('/serch', [bottleController::class, 'serch']);
});

// ログイン
Route::get('/login', [UserController::class, 'login']);
Route::post('/login', [UserController::class, 'user_check']);
Route::get('/logout', [UserController::class, 'user_logout']);





















