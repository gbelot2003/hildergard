<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\Admin\UserController;

Route::resource('usuarios', UserController::class)->names('admin.users');

Route::post('grados', [GradeController::class, 'store']);