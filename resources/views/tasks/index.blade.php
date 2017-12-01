@extends('layouts.master')
@section('content')
    <h1>MEUS PRODUTOS</h1>
    <div class="row">
        @foreach($produtos as $produto)
            <div class="col-sm-3">
                <h4>{{$produto->title}}</h4>
                @if(file_exists("./img/produtos/". md5($produto->id). ".jpg"))
                    <a href="{{url('tasks/)'.$produto->id)}}" class="thumbnail">
                        {{Html::image(asset("img/produtos/". md5($produto->id).'.jpg'))}} </a>
                @else
                    <a href="{{url('tasks/'.$produto->id)}}" class="thumbnail">
                        {{$produto->titulo}}
                    </a>
                @endif
                {{Form::open(['route'=>['tasks.destroy',$produto->id],'method'=> 'DELETE'])}}
                <a href="{{url('tasks/'.$produto->id)}}" class="btn btn-default">Ver</a>
                <a href="{{url('tasks/'.$produto->id.'/edit/')}}" class="btn btn-default">Editar</a>
                {{Form::submit('Excluir',['class'=>'btn btn-default'])}}
                {{Form::close()}}
            </div>
        @endforeach
    </div>
    <hr>
    <hr>
    <div class="row">
        @foreach($trocas as $troca)
            <div class="col-sm-3">
                <h4>PROPOSTAS RECEBIDAS</h4>
                @if(file_exists("./img/produtos/". md5($troca->tasks_id_my). ".jpg"))
                    <a href="{{url('tasks/)'.$produto->id)}}" class="thumbnail">
                        {{Html::image(asset("img/produtos/". md5($troca->tasks_id_my).'.jpg'))}} </a>
                @else
                    <a href="{{url('tasks/'.$produto->id)}}" class="thumbnail">
                        {{$produto->titulo}}
                    </a>
                @endif
                <ul>
                    <li>MEU PRODUTO INTERESADO {{$troca->tasks_id}}</li>
                    <br>
                    <li>DESCRIÇÃO {{$troca->descricao}}</li>
                    <br>
                    <li>ACRÉSCIMO ${{$troca->valor}}</li>
                </ul>
                Se interessou? Contate-o {{$troca->users_id}} nome...<br>
                {{Form::open(['route'=>['trocas.destroy',$troca->id],'method'=> 'DELETE'])}}
                <center>{{Form::submit('Excluir',['class'=>'btn btn-danger'])}}</center>
                {{Form::close()}}
            </div>
        @endforeach
    </div>

@stop
