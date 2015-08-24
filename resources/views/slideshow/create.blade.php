@extends('templates.main')

@section('titulo', 'Create SlideShow')

@section('conteudo')

  <h1>Adcionar Imagem</h1>

  <hr/>

  <form action = "{{action('SlideShowController@store')}}" method = "post" enctype="multipart/form-data">
    {!! csrf_field() !!}

    @if(count($errors) > 0)
      <div class="alert alert-danger">
        <ul class = "list-unstyled">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    @if(Session::has('message'))
      <div class="alert alert-success">
        {{ Session::get('message') }}
      </div>
    @endif

  <!-- Campo imagem -->
    <div class = "form-group">
      <label for = "imagem" class = "control-label">Imagem:</label>
      <input type = "file" name = "imagem" id = "imagem" class = "form-control" placeholder = "Imagem">
    </div>

        <!-- Campo de texto descricao -->
      <div class = "form-group">
      <label for = "descricao" class = "control-label">Descrição:</label>
      <textarea name = "descricao" id = "descricao" class = "form-control" placeholder = "Descricao"></textarea>
    </div>

        <!-- Botão de envio -->
      <div class = "form-group">
      <input type = "submit" id = "enviar" value = "Enviar" class = "btn btn-success">
    </div>
  </form>


@endsection