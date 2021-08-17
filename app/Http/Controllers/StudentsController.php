<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Flash\Flash;

class StudentsController extends Controller
{

    /**
     *
     **/
    public function index()
    {
        return view('estudiantes.index');
    }

    /**
     *
     **/
    public function create()
    {
        $grades = Grade::all()->pluck('name', 'id');
        return view('estudiantes.create', compact('grades'));
    }

    /**
     *
     */
    public function store(Request $request)
    {
        // Generamos password random
        $password = rand(6, 6);
        $request['password'] = bcrypt($password);
        $request['status'] = true;

        // Validamos y creamos al usuario
        $user = User::create($request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'phone_2' => 'nullable',
            'status' => 'required'
        ]));


        // Debe guardar la informacion extra

        // Debe generar una nueva contraseña
        // Debe enviar un email con la contraseña generada

        return redirect()->to('/admin/alumnos')->with('flash', 'El registro a sido creado');

    }

    /**
     *
     **/
    public  function edit($id)
    {
        $student = User::findOrFail($id);
        $grades = Grade::all()->pluck('name', 'id');
        return view('estudiantes.edit', compact('student', 'grades'));
    }

    /**
     *
     */
    public function update(Request $reques, $id)
    {
        //TODO: Validacion

        $user = User::findOrFail($id);
        $user->update($reques->all());
        $user->grades()->sync($reques->get('grade_id'));
        Flash('El registro a sido creado', 'success');
        return redirect()->to('/admin/alumnos');

    }
}
