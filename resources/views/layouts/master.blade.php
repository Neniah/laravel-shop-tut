<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    {{ Html::style('css/bootstrap.min.css') }}
  </head>
  <body>
    @section('sidebar')
      This is the master sidebar
    @show

    <div class="container">
      @yield('content')
    </div>
  </body>
</html>
