<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\Admin\UserController;

Route::group(['middleware' => 'auth'], function() {  
    Route::resource('usuarios', UserController::class)->names('admin.users');

    Route::get('grados', [GradeController::class, 'index']);
    Route::get('grados/{id}', [GradeController::class, 'show']);
    Route::post('grados', [GradeController::class, 'store']);
});
