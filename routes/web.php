<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubmissionController;
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


Route::get('/',[SubmissionController::class,'importForm'])->name('importForm');
Route::POST('import',[SubmissionController::class,'import'])->name('import.save');
Route::get('show-submission',[SubmissionController::class,'showsubmission'])->name('show.submission');
Route::get('single-customer-information/{id}',[SubmissionController::class,'singlecustomer'])->name('single.customer');


Route::get('client-full-details',[SubmissionController::class,'clientdata'])->name('client.data');
Route::POST('client-full-details',[SubmissionController::class,'clientdatasave'])->name('client.data.save');
