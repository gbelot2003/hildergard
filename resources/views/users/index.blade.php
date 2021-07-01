@extends('adminlte::page')

@section('title', 'Administración de Usuarios')

@section('content_header')
    <div class="d-flex justify-content-between">
        <h1>Administración de Usuarios</h1>
        <a href="/admin/usuarios/create" class="btn btn-primary">Nuevo Usuario</a>
    </div>
    
    
@stop

@section('content')
@if (session('info'))
    <div class="alert alert-info">
        <strong>{{ session('info') }}</strong>
    </div>
@endif
    @livewire('admin.users-table')
@stop