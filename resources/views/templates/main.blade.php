<!doctype html>
<html lang = "en">
  <head>
    <meta charset = "UTF-8">

    <title>@yield('titulo') | Site institucional</title>

    <!-- Bootstrap css main cdn file -->
    <link rel="stylesheet" href="{{ asset('libraries/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">

    @yield('css')
  </head>
  <body>

    <div class="header">
      @include('static.partials.menu')
    </div>

    <div class="container">
      @yield('conteudo')
    </div>

    <!-- Jquery cdn file  -->
    <script src="{{ asset('libraries/jquery/jquery-1.11.2.min.js') }}"></script>
    <!-- Bootstrap javascript cdn file -->
    <script src="{{ asset('libraries/bootstrap/js/bootstrap-ie9.min.js') }}"></script>

    @yield('javascript')
  </body>
</html>