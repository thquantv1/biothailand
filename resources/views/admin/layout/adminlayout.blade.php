<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>BIO THAI LAND - Trang Quản trị</title>
    <base href="{{ asset('') }}">
    <link rel="icon" href="{{ asset(getlogo()) }}">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/asc_custom.css') }}">
    <!-- Datatables CSS -->
    <link rel="stylesheet" type="text/css" href="lib/datatables/datatables.min.css"/>
    @yield('style')
    <!-- Font Awesome -->
    <link href="{{ asset('fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
     <!-- CKEditor-->
    <script type="text/javascript" language="javascript" src="{{ asset('lib/ckeditor/ckeditor.js') }}" ></script>



</head>

<body>

    <div class="wrapper">
        <!-- Sidebar Holder -->
        @include('admin.layout.sidebar')

        <!-- Page Content Holder -->
        <div id="content">
            @include('admin.layout.topmenu')

            @yield('content')

        </div>
    </div>


    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/asc_custom.js') }}"></script>
    <script type="text/javascript" src="lib/datatables/datatables.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.form.min.js') }}"></script>

    @yield('topscript')
    @yield('script')
</body>

</html>
