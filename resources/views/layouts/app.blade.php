<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <title>{{ $title}} | CV. Surya Utama</title>

    <link rel="icon" href="{{asset('img/logo-cv.png')}}" type="image/x-icon" width='100px'>

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>

    @stack('datatables-css')
    
    <link href="//fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link href="{{ asset('assets/css/@fortawesome/fontawesome-free/css/all.css') }}" rel="stylesheet" type="text/css">
    
    @yield('page_css')
    
    <link rel="stylesheet" href="{{ asset('web/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/components.css')}}">
    
    @yield('css_kerjasama')
    @yield('css_zoom')
    @yield('page_css')
    
    @yield('css')
    @stack('datepicker-css')
</head>
<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                @include('layouts.header')
            </nav>
            <div class="main-sidebar main-sidebar-postion">
                @include('layouts.sidebar')
            </div>
            <div class="main-content">

                @yield('content')

            </div>
            <footer class="main-footer">
                @include('layouts.footer')
            </footer>
        </div>
    </div>
<!-- The Modal -->

</body>
@yield('js_zoom')
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.nicescroll.js') }}"></script>
@yield('js_kerjasama')

@stack('datatables-js')
@stack('datepicker-js')

<!-- @stack('swal-js') -->

<script src="{{ asset('web/js/stisla.js') }}"></script>
<script src="{{ asset('web/js/scripts.js') }}"></script>
<script src="{{ mix('assets/js/profile.js') }}"></script>
<script src="{{ mix('assets/js/custom/custom.js') }}"></script> 

@yield('js_zoom')
@yield('page_js')
@yield('scripts')

<!-- @stack('swal-jquery') -->
</html>
