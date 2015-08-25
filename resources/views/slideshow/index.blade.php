@extends('templates.main')

@section('titulo', 'Slideshow')

@section('css')

@endsection

@section('conteudo')

  <h1>Opções de SlideShow</h1>

  <hr/>

  <input name="csrf_token" value="{{ csrf_token() }}" class="hidden"/>
  @foreach($images as $image)
    <div class="slide-options row">
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

@endsection

@section('javascript')
  <script type="text/javascript" src="{{asset('javascript/slides-manager.js')}}"></script>
@endsection