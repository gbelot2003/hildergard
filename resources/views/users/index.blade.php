@extends('adminlte::page')

@section('title', 'Administración de Usuarios')

@section('content_header')
    <h1>Administración de Usuarios</h1>
@stop

@section('content')
    @livewire('admin.users-table')
@stop