<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MakerController;
use App\Http\Controllers\carModelController;
use App\Http\Controllers\FuelController;
use App\Http\Controllers\BodyController;
use App\Http\Controllers\GearshiftController;
use App\Http\Controllers\ColorController;

Route::get('/', function () {
    return view('welcome');
});

//MAKER
Route::get('makers', [MakerController::class, 'index'])->name('makers');
Route::get('makers/create', [MakerController::class, 'create'])->name('makers.create');
Route::patch('makers/{id}', [MakerController::class, 'update'])->name('makers.update');
Route::post('makers', [MakerController::class, 'store'])->name('makers.store');
Route::get('makers/{id}/edit', [MakerController::class, 'edit'])->name('makers.edit');
Route::delete('makers/{id}', [MakerController::class, 'destroy'])->name('makers.destroy');
Route::get('maker-models/{id}', [carModelController::class, 'makerModels'])->name('makerModels');

//FUEL
Route::get('fuels', [FuelController::class, 'index'])->name('fuels');
Route::get('fuels/create', [FuelController::class, 'create'])->name('fuels.create');
Route::post('fuels', [FuelController::class, 'store'])->name('fuels.store');
Route::get('fuels/{id}', [FuelController::class, 'update'])->name('fuels.update');
Route::get('fuels/{id}/edit', [FuelController::class, 'edit'])->name('fuels.edit');
Route::delete('fuels/{id}', [FuelController::class, 'destroy'])->name('fuels.destroy');

//CARMODEL
Route::get('carModels', [carModelController::class, 'index'])->name('carModels');
Route::get('carModels/create', [CarModelController::class, 'create'])->name('carModels.create');
Route::post('carModels', [carModelController::class, 'store'])->name('carModels.store');
Route::patch('carModels/{id}', [CarModelController::class, 'update'])->name('carModels.update');
Route::get('carModels/{id}/edit', [CarModelController::class, 'edit'])->name('carModels.edit');
Route::delete('carModels/{id}', [CarModelController::class, 'destroy'])->name('carModels.destroy');

//BODY
Route::get('bodies', [BodyController::class, 'index'])->name('bodies');
Route::get('bodies/create', [BodyController::class, 'create'])->name('bodies.create');
Route::post('bodies', [BodyController::class, 'store'])->name('bodies.store');
Route::patch('bodies/{id}', [BodyController::class, 'update'])->name('bodies.update');
Route::get('bodies/{id}/edit', [BodyController::class, 'edit'])->name('bodies.edit');
Route::delete('bodies/{id}', [BodyController::class, 'destroy'])->name('bodies.destroy');

//GEARSHIFT
Route::get('gearshifts', [GearshiftController::class, 'index'])->name('gearshifts');
Route::get('gearshifts/create', [GearshiftController::class, 'create'])->name('gearshifts.create');
Route::post('gearshifts', [GearshiftController::class, 'store'])->name('gearshifts.store');
Route::patch('gearshifts/{id}', [GearshiftController::class, 'update'])->name('gearshifts.update');
Route::get('gearshifts/{id}/edit', [GearshiftController::class, 'edit'])->name('gearshifts.edit');
Route::delete('gearshifts/{id}', [GearshiftController::class, 'destroy'])->name('gearshifts.destroy');

//COLOR
Route::get('colors', [ColorController::class, 'index'])->name('colors');
Route::get('colors/create', [ColorController::class, 'create'])->name('colors.create');
Route::post('colors', [ColorController::class, 'store'])->name('colors.store');
Route::patch('colors/{id}', [ColorController::class, 'update'])->name('colors.update');
Route::get('colors/{id}/edit', [ColorController::class, 'edit'])->name('colors.edit');
Route::delete('colors/{id}', [ColorController::class, 'destroy'])->name('colors.destroy');