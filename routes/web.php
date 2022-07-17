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


// CRUD conventions laravel
Route::GET('/equipments', [EquipmentController::class, 'index'])->name('equipment.index');
Route::GET('/equipments/create', [EquipmentController::class, 'create'])->name('equipment.create');
Route::POST('/equipments', [EquipmentController::class, 'store'])->name('equipment.store');
Route::GET('/equipments/{equipment}', [EquipmentController::class, 'show'])->name('equipment.show');
Route::GET('/equipments/{equipment}/edit', [EquipmentController::class, 'edit'])->name('equipment.edit');
Route::PATCH('/equipments/{equipment}', [EquipmentController::class, 'update'])->name('equipment.update');
Route::DELETE('/equipments/{equipment}', [EquipmentController::class, 'destroy'])->name('equipment.destroy');






// test trenning
//Route::get('/equipments', [EquipmentController::class, 'index'])->name('equipment.index');
//Route::get('/equipments/create', [EquipmentController::class, 'create']);
//Route::get('/equipments/update', [EquipmentController::class, 'update']);
//Route::get('/equipments/delete', [EquipmentController::class, 'delete']);
//Route::get('/equipments/first_or_create', [EquipmentController::class, 'firstOrCreate']);
//Route::get('/equipments/update_or_create', [EquipmentController::class, 'updateOrCreate']);
