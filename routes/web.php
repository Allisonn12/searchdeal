<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchADealConroller;
use App\Http\Controllers\CarInsureController;
use App\Http\Controllers\MotorController;
use App\Http\Controllers\DebtController;
use App\Http\Controllers\TrackerController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\MedicalController;
use App\Http\Controllers\LifeController;
use App\Http\Controllers\SuccessController;

// Route::get('/', function () {
//     return view('');
// });
Route::get('/', [SearchADealConroller::class, 'index'])->name('index');

Route::get('/service', [SearchADealConroller::class, 'service'])->name('service');
Route::get('/contact', [SearchADealConroller::class, 'contact'])->name('contact');

// Insurance Pages
Route::get('/car-insurance', [CarInsureController::class, 'index'])->name('car-insurance');
Route::post('/car-insurance', [CarInsureController::class, 'store'])->name('car.insure.submit');

Route::get('/motor-warrenty', [MotorController::class, 'index'])->name('motor');
Route::post('/motor-warrenty', [MotorController::class, 'store'])->name('motor.insure.submit');

Route::get('/debt-white-list', [DebtController::class, 'index'])->name('debt');
Route::post('/debt-white-list', [DebtController::class, 'store'])->name('debt.submit');

Route::get('/car-tracker', [TrackerController::class, 'index'])->name('tracker');
Route::post('/car-tracker', [TrackerController::class, 'store'])->name('tracker.submit');


Route::get('/life-insurance', [LifeController::class, 'index'])->name('life');
Route::post('/life-insurance', [LifeController::class, 'store'])->name('life.submit');


Route::get('/wl-loans', [LoanController::class, 'index'])->name('loans');
Route::post('/wl-loans', [LoanController::class, 'store'])->name('loan.submit');

Route::get('/medical-insurance', [MedicalController::class, 'index'])->name('medical');
Route::post('/medical-insurance', [MedicalController::class, 'store'])->name('medical.submit');


Route::get('/success', [SuccessController::class, 'index']);
