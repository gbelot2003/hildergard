<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\User;
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
        return view('grades.show', ['grade' => $grado]);
    }


    public function create()
    {
        $maestros = User::teachers()->pluck('name', 'id');
        return view('grades.create', compact('maestros'));
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

        return redirect()->to('admin/grados')->with('flash', 'El nuevo grado a sido creado');
    }


    public function edit($id)
    {
        $grade = Grade::findOrFail($id);
        $maestros = User::whereHas('roles', function($q){
            $q->where('name', '=', 'maestro');
        })->pluck('name', 'id');

        return view('grades.edit', compact('grade', 'maestros'));
    }

    public function update(Request $request, $id)
    {
        $grade = Grade::findOrFail($id);
        $grade->update($request->all());

        return redirect()->to('admin/grados')->with('flash', 'El grado a sido actualizado');
    }
}
