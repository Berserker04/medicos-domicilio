<?php

use App\Http\Controllers\Admin\AppointmentController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Client\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/citas', [AdminHomeController::class, 'appointment'])->name('admin.appointment');

// Route::get('/doctores', [DoctorController::class, 'index'])->name('admin.doctor');
Route::resource('/citas', AppointmentController::class);
Route::resource('/doctores', DoctorController::class);


Route::get('/', [HomeController::class, 'index'])->name('client.home');
