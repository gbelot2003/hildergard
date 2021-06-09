@extends('adminlte::page')

@section('title', 'Administración de Grados')

@section('content_header')
    <h1>Administración de Grados</h1>
@stop

@section('content')
@if (session('info'))
    <div class="alert alert-info">
        <strong>{{ session('info') }}</strong>
    </div>
@endif
    <div class="card">
        <div class="card-body">
            <ul>
                @foreach ($grades as $grade)
                    <li>{{ $grade->name }}</li>     
                @endforeach
            </ul>
        </div>
    </div>
@stop