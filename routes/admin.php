<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\Admin\UserController;

Route::group(['middleware' => 'auth'], function() {  
    
    Route::group(['middleware' => 'role:administrador|editor'], function(){
        /** Usuarios */
        Route::resource('usuarios', UserController::class)->names('admin.users')->except('destroy');
    });
   
    /** Grados */
    Route::resource('grados', GradeController::class)->names('admin.grades')->except('destroy');

    /** Estudiantes */
    Route::get('alumnos', [StudentsController::class, 'index'])->name('admin.alumnos.index');
    Route::get('alumnos/{id}/edit', [StudentsController::class, 'edit'])->name('admin.alumnos.edit');
    Route::get('alumnos/create', [StudentsController::class, 'create'])->name('admin.alumnos.create');
    
    /**  
    *  Route::group(['middleware' => 'role:administrador|editor|maestro'], function(){
    * });
    */

    Route::get('profile/{slug}', [ProfileController::class, 'show']);
});
