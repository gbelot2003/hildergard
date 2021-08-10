@extends('adminlte::page')

@section('title', 'Crear Nuevo Alumno')

@section('content_header')
    <div class="d-flex justify-content-between">
        <h1>Crear Nuevo Alumno</h1>
    </div>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {{ Form::open(['route' => ['admin.alumnos.store']]) }}
            <div class="row">
                <div class="form-group col-md-12">

                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
@stop