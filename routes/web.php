<?php

use App\Http\Controllers\AdminAppointmentController;
use App\Http\Controllers\Appointment;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\UserAppointmentController;
use App\Models\Doctor;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/",[HomeController::class,'index']);

Route::get("/home",[HomeController::class,'redirect']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//Admin Doctor
Route::get("/doctors_create","App\Http\Controllers\Admin\DoctorController@create");

Route::post("/doctors_store","App\Http\Controllers\Admin\DoctorController@store");

Route::get("/doctors/{view}","App\Http\Controllers\Admin\DoctorController@index");

Route::get("/doctors_destroy/{id}","App\Http\Controllers\Admin\DoctorController@destroy");

Route::get("/doctors_edit/{id}","App\Http\Controllers\Admin\DoctorController@edit");

Route::post("/doctors_update/{id}","App\Http\Controllers\Admin\DoctorController@update");


//Admin Appointments

Route::get("/admin_appointments","App\Http\Controllers\Admin\AppointmentsController@index");

Route::get("/admin_appointments_approve/{id}","App\Http\Controllers\Admin\AppointmentsController@approve");

Route::get("/admin_appointments_reject/{id}","App\Http\Controllers\Admin\AppointmentsController@reject");



//User Appointment
Route::get("/appointment_create","App\Http\Controllers\User\AppointmentsController@create");

Route::post("/appointment_store","App\Http\Controllers\User\AppointmentsController@store");

Route::get("/user_appointments","App\Http\Controllers\User\AppointmentsController@index");

Route::get("/user_appointments_destroy/{id}","App\Http\Controllers\User\AppointmentsController@destroy");


//User Feed
Route::get("/feed","App\Http\Controllers\User\FeedController@index");



