@extends('adminlte::page')

@section('title', 'Administración de Grados')

@section('content_header')

        <div class="d-flex justify-content-between">
        <h1>Administración de Grados</h1>
        <a href="/admin/grados/create" class="btn btn-primary">Nuevo Grado Lectivo</a>
    </div>
@stop

@section('content')
    @livewire('admin.grades-table')
@stop
