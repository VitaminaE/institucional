@extends('templates.main')

@section('titulo', 'Slideshow')

@section('meta')
  <meta name="csrf_token" ="{{ csrf_token() }}" />
@endsection

@section('css')

@endsection

@section('conteudo')

  <h1>Opções de SlideShow</h1>

  <hr/>

  @foreach($images as $image)
    <div class="row">
      <div class="col-md-2">
        <div class="img-thumbnail">
          <img class="img-responsive" src="{{asset('images/'.$image->file_name)}}" alt="">
        </div>
      </div>
      <div class="col-md-8">
        <!-- Campo de texto descricao -->
        <div class="form-group">
          <textarea name="descricao" class="form-control"
                    placeholder="Descrição">{{ $image->description }}</textarea>
        </div>
      </div>
      <div class="col-md-2">
        <a href="{{action('SlideShowController@update', $image->id)}}" class="action-btn">
          <button class="btn btn-primary">Update</button>
        </a>
        <a href="{{action('SlideShowController@destroy', $image->id)}}"
           class="action-btn delete">
          <button class="btn btn-danger">Delete</button>
        </a>
      </div>
    </div>
  @endforeach

  {{--<form action="{{action('SlideShowController@changeOptions')}}" method="post">--}}
    {{--<!-- Campo slide_speed -->--}}
    {{--<div class="form-group">--}}
      {{--<label for="slide_speed" class="control-label">Velocidade do slideshow:</label>--}}
      {{--<input type="text" name="slide_speed" id="slide_speed" class="form-control" placeholder="Slide_speed">--}}
    {{--</div>--}}
  {{--</form>--}}

@endsection

@section('javascript')
  <script type="text/javascript" src="{{asset('javascript/slides-manager.js')}}"></script>
@endsection