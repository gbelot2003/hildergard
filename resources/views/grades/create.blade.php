@extends('adminlte::page')

@section('title', 'Creación de Grados')

@section('content_header')
    <h1>Creación de Grados</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {{ Form::open(['route' => ['admin.grades.store']]) }}
                <div class="row">
                    <div class="form-group col-md-12">
                        <label>Nombre de Grado</label>
                        {{ Form::text('name', null, ['class' => 'form-control']) }}
                    </div>
                    
                    <div class="form-group col-md-12">
                        <label>Año de Trabajo</label>
                        {{ Form::number('year', null, ['class' => 'form-control']) }}
                    </div>

                    <div class="form-group col-md-12">
                        <label>Maestro/a Guía</label>
                        {{ Form::select('teacher_id', $maestros, null , ['class' => 'form-control']) }}
                    </div>

                    <div class="form-group col-md-12">
                        <button type="submit" class="btn btn-primary">Crear</button>
                    </div>

                </div>
            {{ Form::close() }}
        </div>
    </div>
@stop
