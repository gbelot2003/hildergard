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
    
    Route::get('grados', [GradeController::class, 'index'])->name('admin.grades.index');
    Route::get('grados/create', [GradeController::class, 'create'])->name('admin.grades.create');
    Route::post('grados', [GradeController::class, 'store'])->name('admin.grades.store');
    Route::get('grados/{id}/edit', [GradeController::class, 'edit'])->name('admin.grades.edit');
    Route::get('grados/{id}', [GradeController::class, 'show']);
    

    Route::get('profile/{slug}', [ProfileController::class, 'show']);
});
