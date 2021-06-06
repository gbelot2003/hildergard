@extends('adminlte::page')

@section('title', 'Administración de Usuarios')

@section('content_header')
    <h1>Administración de Usuarios</h1>
@stop

@section('content')
@if (session('info'))
    <div class="alert alert-info">
        <strong>{{ session('info') }}</strong>
    </div>
@endif
    @livewire('admin.users-table')
@stop