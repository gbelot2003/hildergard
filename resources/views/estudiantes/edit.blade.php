@extends('adminlte::page')

@section('title', 'Edición de Alumnos')

@section('content_header')
    <div class="card">
        <div class="card-body">
            {{ Form::model($student, ['route' => ['admin.alumnos.update', $student], 'method' => 'put']) }}
                @include('estudiantes._form')
            {{ Form::close() }}
        </div>
    </div>
@stop

