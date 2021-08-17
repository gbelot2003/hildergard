<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Flash\Flash;

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

        Flash('flash', 'El nuevo grado a sido creado');
        return redirect()->to('admin/grados');
    }


    public function edit($id)
    {
        $grade = Grade::findOrFail($id);
        $maestros = User::teachers()->pluck('name', 'id');

        return view('grades.edit', compact('grade', 'maestros'));
    }

    public function update(Request $request, $id)
    {
        $grade = Grade::findOrFail($id);
        $grade->update($request->validate([
            'name' => 'required',
            'teacher_id' => 'required',
            'year' => 'required'
        ]));

        Flash('El registro a sido actualizado');
        return redirect()->to('admin/grados');
    }
}
