<!doctype html>
<html lang = "en">
  <head>
    <meta charset = "UTF-8">

    @yield('meta')

    <title>@yield('titulo') | Site institucional</title>

    @yield('css')

    <!-- Bootstrap css main cdn file -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  </head>
  <body>

    <div class="container">
      @yield('conteudo')
    </div>

    <!-- Jquery cdn file  -->
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <!-- Bootstrap javascript cdn file -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    @yield('javascript')
  </body>
</html>