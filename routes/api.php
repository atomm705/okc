<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;

Route::middleware('throttle:public')->group(function(){
    Route::get('/departmentDoctorList', [DoctorController::class, 'apiDoctorDepartmentList']);
    Route::get('/doctorList/{departmentId}', [DoctorController::class, 'apiDoctorList']);
    Route::get('/doctorShow/{doctorId}', [DoctorController::class, 'apiDoctorShow']);
});
