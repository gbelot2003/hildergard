@extends('adminlte::page')

@section('title', 'Creación de Usuarios')

@section('content_header')
    <h1>Creación de Usuarios</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {{ Form::open(['route' => ['admin.users.store']]) }}
        <div class="form-group col-md-12 mb-3">
            <label for="name">Nombre</label>
            {{ Form::text('name', null, ['class' => 'form-control']) }}
        </div>
        <div class="form-group col-md-12 mb-3">
            <label for="email">E-Mail</label>
            {{ Form::email('email', null, ['class' => 'form-control']) }}
        </div>
        
        <div class="form-group col-md-12 mb-5">
            <label class="h5">Listadod de Roles</label>
            @foreach ($roles as $role)
                <div>
                    <label>
                        {{ Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) }}
                        {{ $role->name }}
                    </label>
                </div>
            @endforeach
        </div>
        <div class="col-md-12">
            {{ Form::submit('Crear', ['class' => 'btn btn-primary']) }}
        </div>
        {{ Form::close() }}
    </div>
</div>
@stop