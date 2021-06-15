<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{

    public function index()
    {
        $grades = Grade::all();
        return view('grades.index', compact('grades'));
    }

    public function show($id)
    {
        $grado = Grade::findOrFail($id);
        return view('grades.show', ['grade' => $grade]);
    }

    public function store(Request $request)
    {
        /**
         * TODO: validar que solo usuarios con rol "mestros" puedan ser guias.
         * TODO: Solo Miebros "EDITORES y ADMIN" pueden crear grados. 
         **/
        $grade = Grade::create($request->validate(
            [
                'name' => 'required',
                'teacher_id' => 'required',
                'year' => 'required' 
            ]
        ));

        return redirect()->to('admin/grades')->with('flash', 'El nuevo grado a sido creado');
    }
}
