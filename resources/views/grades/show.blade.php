@extends('adminlte::page')

@section('title', 'Administración de Grados')

@section('content_header')
    <h1>Administración de Grados</h1>
@stop

@section('content')
    <h2>{{ $grade->name }}</h2>
@stop