@extends('templates.main')

@section('titulo', 'Contato')

@section('conteudo')

  <h1>Contato</h1>

  <hr>

  <form action = "{{action('HomeController@postContato')}}" method = "post">
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

    <!-- Campo nome -->
    <div class = "form-group">
      <label for = "nome" class = "control-label">Nome:</label>
      <input type = "text" name = "nome" id = "nome" class = "form-control" placeholder = "Nome">
    </div>

    <!-- Campo email -->
    <div class = "form-group">
      <label for = "email" class = "control-label">Email:</label>
      <input type = "email" name = "email" id = "email" class = "form-control" placeholder = "Email">
    </div>

    <!-- Campo telefone -->
    <div class = "form-group">
      <label for = "telefone" class = "control-label">Telefone:</label>
      <input type = "text" name = "telefone" id = "telefone" class = "form-control" placeholder = "Telefone">
    </div>

    <!-- Campo assunto -->
    <div class = "form-group">
      <label for = "assunto" class = "control-label">Assunto:</label>
      <input type = "text" name = "assunto" id = "assunto" class = "form-control" placeholder = "Assunto">
    </div>

    <!-- Campo de texto mensagem -->
    <div class = "form-group">
      <label for = "mensagem" class = "control-label">Mensagem:</label>
      <textarea name = "mensagem" id = "mensagem" class = "form-control" placeholder = "Mensagem" rows = "7"></textarea>
    </div>

    <!-- Botão de envio -->
    <div class = "form-group">
      <input type = "submit" id = "enviar" value = "Enviar" class = "btn btn-success">
    </div>

  </form>

@endsection