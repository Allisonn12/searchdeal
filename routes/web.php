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
use App\Http\Controllers\ContactController;


Route::get('/', [SearchADealConroller::class, 'index'])->name('index');
Route::get('/service', [SearchADealConroller::class, 'service'])->name('service');
Route::get('/success', [SearchADealConroller::class, 'success'])->name('success');
Route::get('/car-insurance-success', [SearchADealConroller::class, 'carInsuresuccess'])->name('car_insure_success');
Route::get('/car-track-success', [SearchADealConroller::class, 'carTrackerSuccess'])->name('car_track_success');
Route::get('/terms-and-conditions', [SearchADealConroller::class, 'terms'])->name('terms');
Route::get('/private-policy', [SearchADealConroller::class, 'policy'])->name('policy');
Route::get('/car-insure-sales', [SearchADealConroller::class, 'cicslhcf'])->name('cicslhcf');
Route::get('/car-track-up', [SearchADealConroller::class, 'carTrackerup'])->name('car-track-up');


Route::get('/contact', [SearchADealConroller::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

Route::get('/car-insurance', [CarInsureController::class, 'index'])->name('car-insurance');
Route::get('/car-insure', [CarInsureController::class, 'landing'])->name('car-insure');
Route::post('/car-insurance', [CarInsureController::class, 'store'])->name('car.insure.submit');
Route::post('/car-insure', [CarInsureController::class, 'store'])->name('car.insure.submit');

Route::get('/motor-warrenty', [MotorController::class, 'index'])->name('motor');
Route::post('/motor-warrenty', [MotorController::class, 'store'])->name('motor.insure.submit');

Route::get('/debt-white-list', [DebtController::class, 'index'])->name('debt');
Route::post('/debt-white-list', [DebtController::class, 'store'])->name('debt.submit');

Route::get('/car-tracker', [TrackerController::class, 'index'])->name('tracker');
Route::post('/car-tracker', [TrackerController::class, 'store'])->name('tracker.submit');

Route::get('/life-insurance', [LifeController::class, 'index'])->name('life');
Route::post('/life-insurance', [LifeController::class, 'store'])->name('life.submit');

Route::get('/wl-loans', [LoanController::class, 'index'])->name('wl-loan');
Route::post('/wl-loans', [LoanController::class, 'store'])->name('loan.submit');

Route::get('/loans', [LoanController::class, 'loans'])->name('loans');
Route::post('/loans', [LoanController::class, 'store'])->name('loan.submit');

Route::get('/medical-insurance', [MedicalController::class, 'index'])->name('medical');
Route::post('/medical-insurance', [MedicalController::class, 'store'])->name('medical.submit');

// Cookies
/**
 * Accepts and stores a cookie consent.
 *
 * This function is a route handler for the '/cookie-accept' endpoint. It sets a cookie named 'cookie_consent'
 * with a value of 'true' and an expiration time of 1 year. The function returns a response with the text 'OK'
 * and the newly set cookie.
 *
 * @return \Illuminate\Http\Response The response with the 'OK' text and the 'cookie_consent' cookie.
 */
// Route::post('/cookie-accept', function () {
//     return response('OK')->cookie('cookie_consent', true, 60 * 24 * 365); // 1 year
// })->name('cookie.accept');
