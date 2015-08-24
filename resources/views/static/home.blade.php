@extends('templates.main')

@section('titulo', 'Home')

@section('css')

@stop

@section('conteudo')

    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">

        @foreach($slides as $slide)
          <div class="item {{ $slides->first() === $slide ? 'active' : ''}}">
            <img src="{{asset('images/'.$slide->file_name)}}">
            <div class="carousel-caption">
              {{$slide->description}}
            </div>
          </div>
        @endforeach

      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <div class="jumbotron">
      <h1>Hello, World!</h1>
      <p>Site institucional base</p>
      <p><a class="btn btn-primary btn-lg" href="#" role="button">Saiba mais</a></p>
    </div>

@stop

@section('javascript')

@stop