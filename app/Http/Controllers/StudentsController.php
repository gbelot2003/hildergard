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
        // Debe crear un nuevo usuario

        // Debe guardar la informacion extra

        // Debe generar una nueva contraseña
        // Debe enviar un email con la contraseña generada

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
