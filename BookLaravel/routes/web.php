<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


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
Route::resource('products', ProductController::class);

Route::post('create', [ProductController::class, 'create']);
Route::post('edit', [ProductController::class, 'update']);
Route::get('/delete/{id}', [ProductController::class, 'delete']);

Route::get('/searchuser', [ProductController::class, 'searchuser']);