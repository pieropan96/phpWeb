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
    </div>
    <a href="javascript:history.go(-1)">Voltar</a>
@stop