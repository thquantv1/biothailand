<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="BIO Thái Lan - @yield('page_description')">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>BIO Thái Lan - @yield('title')</title>
  @yield('metatag')

  <base href="{{ asset('') }}">
  <!-- Fonts -->

  <!-- Custom fonts for this template -->
  <link href="{{ asset('fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Pattaya&amp;subset=latin-ext" rel="stylesheet">
  <link rel="icon" href="{{ asset($cauhinh->valueof('logo')) }}">
  <!-- Datatables CSS -->
    <link rel="stylesheet" type="text/css" href="lib/datatables/datatables.min.css"/>
  <!-- Styles -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
  <link href="{{ asset('css/agency.css') }}" rel="stylesheet">
    @yield('style')
</head>
<body id="page-top">
  <!-- Navigation -->

  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger text-uppercase" href="">
        <img src="{{  $cauhinh->valueof('logo')}}" alt="BIO Thailand">
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="">Trang chủ</a>
            </li>
            <li class="nav-item">
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="tong-quan">Giới thiệu</a>
                </li>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="sanphamDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sản Phẩm</a>
                <div class="dropdown-menu" aria-labelledby="sanphamDropdown">
                    <a class="dropdown-item" href="{{ route('dssanphamtheocatalog',['id'=>2,'ten'=>'san-pham-cho-lua']) }}">Sản phẩm cho lúa</a>
                    <a class="dropdown-item" href="{{ route('dssanphamtheocatalog',['id'=>1,'ten'=>'san-pham-cho-tom']) }}">Sản phẩm cho tôm</a>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="{{ route('dstintuctheocatalog',['id'=>1,'ten'=>'tin-cong-ty']) }}">Tin công ty</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="{{ route('dstintuctheocatalog',['id'=>3,'ten'=>'chuyen-nha-nong']) }}">Chuyện nhà nông</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="{{ route('dstintuctheocatalog',['id'=>2,'ten'=>'tuyen-dung']) }}">Tuyển dụng</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#contact">Liên hệ</a>
            </li>
        </ul>
      </div>
    </div>
  </nav>

  @include('trangchu.masthead')
  @yield('content')
  @include('trangchu.footer')

<!--Facebook share button-->
  <script>
    (function (d, s, id)
    {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>

  <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery-easing/jquery.easing.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/agency.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/jqBootstrapValidation.js') }}"></script>
  <script type="text/javascript" src="lib/datatables/datatables.min.js"></script>
  <script type="text/javascript" src="{{ asset('js/jquery.form.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/trangchu.js') }}"></script>

   @include('layout.metatag',compact('cauhinh'))

  <script type="text/javascript">

  </script>
  @yield('script')
</body>
</html>
