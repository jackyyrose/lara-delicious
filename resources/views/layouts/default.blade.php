<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', config("app.name") ) - Deliver you the delicious</title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
</head>

<body>
  @include('layouts._header')
  <div class="container">
    <div class="offset-md-1 col-md-10">
      @include('shared._messages')
      @yield('content')
      @include('layouts._footer')
    </div>
  </div>
  <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
