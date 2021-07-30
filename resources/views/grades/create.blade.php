@extends('adminlte::page')

@section('title', 'Creación de Grados')

@section('content_header')
    <h1>Creación de Grados</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {{ Form::open(['route' => ['admin.grades.store']]) }}
                @include('grades.form')
            {{ Form::close() }}
        </div>
    </div>
@stop
