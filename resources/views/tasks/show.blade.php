@extends('layouts.master')
@section('content')
    <h3>Produto - {{$produto->title}}</h3>
    <div class="row">
        <div class="col-sm-7">
            <ul style="list-style: none">
                <li>Produto -{{$produto->title}}</li>
                <li>Preço -{{($produto->valor)}}</li>
                <li>Descrição -{{$produto->description}}</li>
                <li>Criado -{{date("d,m,Y", strtotime($produto->created_at))}}</li>
            </ul>
        </div>
        @if(file_exists("./img/produtos/". md5($produto->id). ".jpg"))
            <div class='col-sm-5'>
                <a href="{{asset('/img/produtos/'.md5($produto->id).'.jpg')}}" class="thumbnail">
                    {{Html::image(asset("img/produtos/". md5($produto->id).'.jpg'))}} </a>
            </div>
        @endif
        @if($userl != $produto->users_id)
            {{Form::open(['route' => ['trocas.enviarProposta', $produto->id], 'enctype'=> 'multipart/form-data','method' => 'POST'])}}
            <div class="form-group">
                {!! Form::label('descricao','FAÇA SUA PROPOSTA',['class' => 'control-label']) !!}
                {!! Form::textarea('descricao',null,['class' => 'form-control']) !!}
                <hr>
                {!! Form::label('tasks_id_my','PRODUTO',['class' => 'control-label']) !!}
                {!! Form::select('tasks_id_my', $meusprodutos, '1') !!}
                <hr>
                {!! Form::label('valor','DESEJA ACRESCENTAR ALGUM VALOR?',['class' => 'control-label']) !!}
                {!! Form::text('valor',null,['class' => 'form-control']) !!}
                {{ Form::hidden('users_recebeu', $produto->users_id) }}
            </div>
            {!! Form::submit('Enviar',['class' => 'btn btn-primary']) !!}
            <a href="javascript:history.go(-1)" class="btn btn-default">Voltar</a>
            {!! Form::close() !!}
        @endif
    </div>
@stop
