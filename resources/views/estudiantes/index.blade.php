@extends('adminlte::page')

@section('title', 'Administración de Alumnos')

@section('content_header')
    <div class="d-flex justify-content-between">
        <h1>Administración de Alumnos</h1>
        <a href="/admin/alumnos/create" class="btn btn-primary">Añadir Alumnos</a>
    </div>
@stop

@section('content')
    @livewire('admin.alumnos-table')
@stop
