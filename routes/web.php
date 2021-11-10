<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HelloLaravelController;
Route::get('/HelloLaravel',[HelloLaravelController::class, 'index']);

use App\Http\Controllers\ProductDataController;
Route::get('/productSingup',[ProductDataController::class, 'signup']);
Route::get('/productList',[ProductDataController::class, 'list']);
Route::get('/productEdit',[ProductDataController::class, 'edit']);

use App\Http\Controllers\PurchaseDataController;
Route::get('/purchaseSingup',[PurchaseDataController::class, 'signup']);
Route::get('/purchaseList',[PurchaseDataController::class, 'list']);
Route::get('/purchaseEdit',[PurchaseDataController::class, 'edit']);

Route::get('/view', function () {
    return view('welcome');
});
//

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('welcome');
});