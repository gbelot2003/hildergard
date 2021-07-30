@extends('adminlte::page')

@section('title', 'Edición de Grado')

@section('content_header')
    <h1>Edición de Grados</h1>
@stop

@section('content')

{{ Form::model($grade, ['method' => 'PATCH', 'route' => ['admin.grades.update', $grade->id]]) }}
    @include('grades.form')
{{ Form::close() }}

@stop