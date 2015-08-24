@extends('templates.main')

@section('titulo')
  Visualizar {{$image->original_name}}
@endsection

@section('css')

@endsection

@section('conteudo')
  <h1>{{$image->original_name}}</h1>

  <hr/>

  <img src = "{{asset('images/'.$image->file_name)}}" alt = "{{$image->original_name}}">

  <p>{{$image->description}}</p>
@endsection

@section('javascript')

@endsection