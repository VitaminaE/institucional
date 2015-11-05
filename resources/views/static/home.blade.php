@extends('templates.main')

@section('titulo', 'Home')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/slideshow.css') }}">
@stop

@section('conteudo')

    @include('static.slideshow')

    <div class="jumbotron">
      <h1>Hello, World!</h1>
      <p>Site institucional base</p>
      <p><a class="btn btn-primary btn-lg" href="#" role="button">Saiba mais</a></p>
    </div>

@stop

@section('javascript')

@stop