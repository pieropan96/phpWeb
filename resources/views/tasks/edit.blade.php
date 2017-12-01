@extends('layouts.master')

@section('content')
    <h1>PRODUTO</h1>
    <hr>

    <div class="form-group">

        {{Form::open(['route' => ['tasks.update', $produto->id], 'enctype'=> 'multipart/form-data','method' => 'PUT'])}}
        {!! Form::label('title','Título:',['class' => 'control-label']) !!}
        {!! Form::text('title',$produto->title,['class' => 'form-control']) !!}
        {!! Form::label('valor','Valor:',['class' => 'control-label']) !!}
        {!! Form::text('valor',$produto->valor,['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('description','Descrição:',['class' => 'control-label']) !!}
        {!! Form::textarea('description',$produto->description,['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {{Form::label('fotoproduto','ESCOLHA IMAGEM')}}
        {{Form::file('fotoproduto',['class' => 'form-control','id'=>'fotoproduto'])}}
    </div>
    {!! Form::submit('EDITAR!',['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection