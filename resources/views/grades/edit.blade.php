@extends('adminlte::page')

@section('title', 'Edición de Grado')

@section('content_header')
    <h1>Edición de Grados</h1>
@stop

@section('content')
<div class="col-md-12">
    <a href="#" class="btn btn-info">Administrar Alumnos</a>
    <a href="#" class="btn btn-primary">Administrar Clases</a>
</div>
{{ Form::model($grade, ['method' => 'PATCH', 'route' => ['admin.grades.update', $grade->id]]) }}
    @include('grades.form', ['edit' => true])
{{ Form::close() }}

@stop