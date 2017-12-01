@extends('layouts.master')

@section('content')

    <h1>Home</h1>
    <p class="lead">BEM VINDO AO OLX.</p>
    <hr>

    <a href="{{ route('tasks.index') }}" class="btn btn-info">Meus Produtos</a>
    <a href="{{ route('tasks.create') }}" class="btn btn-primary">Adicionar Produto</a>

@stop