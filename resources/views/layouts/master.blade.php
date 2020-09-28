<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('img/core-img/favicon.ico')}}">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">

</head>

<body class="light-version">
    <!-- Preloader -->
    <div id="preloader">
        <div class="preload-content">
            <div id="dream-load"></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    @include('includes.navbar')
    <!-- ##### Header Area End ##### -->

    <!-- ##### Login Area Start ##### -->
    @include('includes.login')
    <!-- ##### Login Area End ##### -->

    <!-- ##### Content Area Start ##### -->
    @yield('content')
    <!-- ##### Content Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area bg-img">

      <!-- ##### team Area Start ##### -->
      @yield('team-content')
      <!-- ##### team Area End ##### -->

      @include('includes.footer')
    </footer>

    <!-- ##### Footer Area End ##### -->

    <!-- ########## All JS ########## -->
    <!-- jQuery js -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('js/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- All Plugins js -->
    <script src="{{asset('js/plugins.js')}}"></script>
    <!-- Parallax js -->


    <script src="{{asset('js/jquery.syotimer.min.js')}}"></script>

    <!-- script js -->
    <script src="{{asset('js/script.js')}}"></script>

</body>

</html>
