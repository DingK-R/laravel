<!DOCTYPE html>
<html lang="en" class="app">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="{{ asset('asset/css/app.v1.css')}}" type="text/css" />
    <script src="{{ asset('asset/js/app.v1.js')}}"></script>
    <script src="{{ asset('asset/js/app.plugin.js')}}"></script>
  </head>
  <body>
  @yield('content')
  </body>
</html>