@extends('layouts.master')
@section('content')
    <div class="row">
        @foreach($produtos as $produto)
            <div class="col-sm-4">
                <h4>{{$produto->title}}</h4>
                @if(file_exists("./img/produtos/". md5($produto->id). ".jpg"))
                    <a href="{{url('tasks/)'.$produto->id)}}" class="thumbnail">
                        {{Html::image(asset("img/produtos/". md5($produto->id).'.jpg'))}} </a>
                @else
                    <a href="{{url('tasks/'.$produto->id)}}" class="thumbnail">
                        {{$produto->titulo}}
                    </a>
                @endif
                <a href="{{ route('tasks.show',$produto ) }}" class="btn btn-default">Negociar</a>
            </div>
        @endforeach
    </div>
@stop