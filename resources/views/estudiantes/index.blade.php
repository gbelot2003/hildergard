@extends('adminlte::page')

@section('title', 'Administración de Alumnos')

@section('content_header')
    <div class="d-flex justify-content-between">
        <h1>Administración de Alumnos</h1>
        <a href="/admin/alumnos/create" class="btn btn-primary">Añadir Alumnos</a>
    </div>
@stop

@section('content')
@if (session('info'))
    <div class="alert alert-info">
        <strong>{{ session('info') }}</strong>
    </div>
@endif
    @livewire('admin.alumnos-table')
@stop