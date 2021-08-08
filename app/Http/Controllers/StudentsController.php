<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index()
    {
        return view('estudiantes.index');
    }

    public  function edit($id)
    {
        $student = User::findOrFail($id);
        return view('estudiantes.edit');
    }
}
