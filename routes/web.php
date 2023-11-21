<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendanceController;

// Rota para exibir o formulário de presenças
Route::get('/attendance/add/{uc_id}/{class_id}', [AttendanceController::class, 'showForm']);

// Rota para processar o envio do formulário de presenças
Route::post('/attendance/add/{uc_id}/{class_id}', [AttendanceController::class, 'processForm']);

// Rota para exibir a listagem de presenças
Route::get('/attendance/show/{uc_id}/{class_id}', [AttendanceController::class, 'showAttendanceList']);


