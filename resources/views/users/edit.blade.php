@extends('adminlte::page')

@section('title', 'Edición de Usuarios')

@section('content_header')
    <h1>Edición de Usuarios</h1>
@stop


@section('content')
@if (session('info'))
    <div class="alert alert-info">
        <strong>{{ session('info') }}</strong>
    </div>
@endif
<div class="card">
    <div class="card-body">
        {{ Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'put']) }}
            <div class="form-group col-md-12 mb-3">
                <label for="name">Nombre</label>
                {{ Form::text('name', null, ['class' => 'form-control']) }}
            </div>

            <div class="form-group col-md-12 mb-3">
                <label for="email">E-Mail</label>
                {{ Form::email('email', null, ['class' => 'form-control']) }}
            </div>

            <div class="col-md-12 mb-3">
                <div>Estado de Usuario</div>
                {{ Form::checkbox('status', null, $user->status, [
                    'data-toggle' => 'toggle',
                    'data-on' => 'Activo',
                    'data-off' => 'Desactivado',
                    'data-onstyle' => "primary"
                    ]) }}
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
                {{ Form::submit('Editar', ['class' => 'btn btn-primary']) }}
            </div>
        {{ Form::close() }}
    </div>
</div>
@stop