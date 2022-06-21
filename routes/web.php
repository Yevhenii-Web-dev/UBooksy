<?php


use App\Http\Controllers\EquipmentController;
use Illuminate\Support\Facades\Route;


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

Route::get('/equipments', [EquipmentController::class, 'index'])->name('posts.index');
Route::get('/equipments/create', [EquipmentController::class, 'create'])->name('posts.index');
Route::get('/equipments/update', [EquipmentController::class, 'update'])->name('posts.index');
Route::get('/equipments/delete', [EquipmentController::class, 'delete'])->name('posts.index');
Route::get('/equipments/first_or_create', [EquipmentController::class, 'firstOrCreate'])->name('posts.index');
Route::get('/equipments/update_or_create', [EquipmentController::class, 'updateOrCreate'])->name('posts.index');
