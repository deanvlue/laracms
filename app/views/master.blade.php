<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Cats DB</title>
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>

<body>
  <div class="container">
    <div class="page-header">
      @yield('header')
    </div><!--page-header-->
    @if(Session::has('message'))
    <div class="alert alert-success">
      {{Session::get('message')}}
    </div><!--alert-->
    @endif
    @yield('content')
  </div><!--container -->

</body>

</html>

