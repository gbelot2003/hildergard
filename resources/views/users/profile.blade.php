@extends('adminlte::page')

@section('title', "Perfil de $user->name")

@section('content_header')
    <div class="d-flex justify-content-between">
        <h1>Perfil de {{  $user->name }}</h1>
    </div>
@stop

@section('content')
    
@stop