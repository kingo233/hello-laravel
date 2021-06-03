<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', '论坛 App') - 山东大学威海校园论坛</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
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
  </body>
  <script src="{{ mix('js/app.js') }}"></script>
</html>