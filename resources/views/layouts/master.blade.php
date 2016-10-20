<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    {{ Html::style('css/bootstrap.min.css') }}

  </head>
  <body>
    @include('layouts.header')
    @section('sidebar')
      This is the master sidebar
    @show

    <div class="container">
      @yield('content')
    </div>
  </body>
</html>
