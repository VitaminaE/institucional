@extends('templates.main')

@section('titulo', 'Home')

@section('css')
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.7/slick.css"/>
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.7/slick.css"/>

@stop

@section('conteudo')

    <div class="slider">
      <img src = "{{asset('images/product2.png')}}" alt = "">
      <img src = "{{asset('images/product2.png')}}" alt = "">
      <img src = "{{asset('images/product2.png')}}" alt = "">
      <img src = "{{asset('images/product2.png')}}" alt = "">
    </div>

    <div class="jumbotron">
      <h1>Hello, World!</h1>
      <p>Site institucional base</p>
      <p><a class="btn btn-primary btn-lg" href="#" role="button">Saiba mais</a></p>
    </div>

@stop

@section('javascript')
  <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.7/slick.min.js"></script>
@stop