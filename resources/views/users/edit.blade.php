@extends('adminlte::page')

@section('title', 'Edición de Usuarios')

@section('content_header')
    <h1>Edición de Usuarios</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {{ Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'put']) }}
            <form-group class="mb-5">
                <label for="name">Nombre</label>
                {{ Form::text('name', null, ['class' => 'form-control']) }}
            </form-group>

            <form-group>
                <label for="email">E-Mail</label>
                {{ Form::email('email', null, ['class' => 'form-control']) }}
            </form-group>

            <form-group>
                <label>Roles administrativos</label>
                @foreach ($roles as $role)
                    <div>
                        <label>
                            {{ Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) }}
                            {{ $role->name }}
                        </label>
                    </div>
                @endforeach

            </form-group>
        {{ Form::close() }}

    </div>
</div>
@stop