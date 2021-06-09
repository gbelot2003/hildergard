<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{

    public function store(Request $request)
    {
        dd($request-all());
        $grade = Grade::create($request()->validate(['name' => 'required']));
    
        //return redirect()->to('admin/grades')->with('flash', 'El nuevo grado a sido creado');
    }
}
