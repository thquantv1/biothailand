<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Trà Sữa Huy - @yield('page_description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset($cauhinh->get('logo')->value) }}">
    <title>Trà Sữa Huy - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/agency.css') }}">
    <link rel="stylesheet" href="{{ asset('css/asc_static.css') }}">
    <link href="{{ asset('fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <base href="{{ asset('') }}">
    @yield('metatag')

    @yield('style')
</head>
<body>
      @include('layout.menu')
      <div class="container-fluid">
          <div class="jumbotron jumbotron-fluid">
              <div class="container">
                  @yield('content')
              </div>
          </div>
      </div>
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('script')
</body>
</html>

