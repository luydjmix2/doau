@extends('layouts.adminTheme')

@section('title', 'DoAu Admin')

@section('content')
hola <a href="{{ route('createProduct') }}" class="btn btn-primary" role="button" aria-pressed="true">Crear producto</a>
@endsection 