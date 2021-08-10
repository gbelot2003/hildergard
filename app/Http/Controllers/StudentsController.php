<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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
        return view('estudiantes.create');
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
        return view('estudiantes.edit');
    }

    /**
     *
     */
    public function update(Request $reques, $id)
    {
        $user = User::findOrFail($id);
        return $user;
    }
}
