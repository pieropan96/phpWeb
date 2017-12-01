@extends('layouts.master')

@section('content')
    <h1>PRODUTO</h1>
    <p class="lead">Novo Produto</p>
    <hr>
    {!! Form::open(['route'=>'tasks.store']) !!}
    <div class="form-group">
        {!! Form::label('title','Título:',['class' => 'control-label']) !!}
        {!! Form::text('title',null,['class' => 'form-control']) !!}
        {!! Form::label('valor','Valor:',['class' => 'control-label']) !!}
        {!! Form::text('valor',null,['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('description','Descrição:',['class' => 'control-label']) !!}
        {!! Form::textarea('description',null,['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {{Form::label('fotoproduto','ESCOLHA IMAGEM')}}
        {{Form::file('fotoproduto',['class' => 'form-control','id'=>'fotoproduto'])}}
    </div>

    {!! Form::submit('Criar novo Produto!',['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection