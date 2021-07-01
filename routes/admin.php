<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\UserController;

Route::group(['middleware' => 'auth'], function() {  
    
    Route::group(['middleware' => 'role:administrador|editor'], function(){
        Route::resource('usuarios', UserController::class)->names('admin.users');
    });
    
    Route::get('grados', [GradeController::class, 'index']);
    Route::get('grados/{id}', [GradeController::class, 'show']);
    Route::post('grados', [GradeController::class, 'store']);

    Route::get('profile/{id}', [ProfileController::class, 'show']);
});
