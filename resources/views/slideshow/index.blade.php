@extends('templates.main')

@section('titulo', 'Slideshow')

@section('css')

@endsection

@section('conteudo')

  <h1>Opções de SlideShow</h1>

  <hr/>

  @if(count($images) > 0)
    <input name="csrf_token" value="{{ csrf_token() }}" class="hidden"/>
    @foreach($images as $image)
      <div class="slide-options row">
        <div class="col-md-2">
          <div class="img-thumbnail">
            <img class="img-responsive" src="{{asset('images/slideshow/'.$image->file_name)}}" alt="">
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
  @else
    <div class="alert alert-danger">
      Não há imagens no slideshow atualmente.
    </div>
  @endif

  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
    Launch demo modal
  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Adcionar Slide</h4>
        </div>
        <div class="modal-body">
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
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default"
                  data-dismiss="modal">Fechar</button>
          <button type="button" class="btn btn-primary">Salvar</button>
        </div>
      </div>
    </div>
  </div>

@endsection

@section('javascript')
  <script type="text/javascript" src="{{asset('javascript/slides-manager.js')}}"></script>
@endsection