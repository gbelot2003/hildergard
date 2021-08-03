<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index()
    {
        $students = User::students()->get();
        return view('estudiantes.index', compact('students'));
    }
}
