<!DOCTYPE HTML>
<html lang="en">
  <head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="robots" content="index, follow"/>
    @if(isset($page->meta_tag) && isset($page->meta_description))
    <meta name="keywords" content="{{ $page->meta_tag }}">
    <meta name="description" content="{{ $page->meta_description }}">
    <title>{{$gs->title}}</title>
    @elseif(isset($blog->meta_tag) && isset($blog->meta_description))
    <meta name="keywords" content="{{ $blog->meta_tag }}">
    <meta name="description" content="{{ $blog->meta_description }}">
    <title>{{$gs->title}}</title>
    @else
    <meta name="keywords" content="{{ $seo->meta_keys }}">
    <meta name="author" content="Primex Infosys">
    <title>@yield('title')</title>
    @endif
    <!--=============== css  ===============-->
    <link type="text/css" rel="stylesheet" href="{{asset('web/css/reset.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('web/css/plugins.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('web/css/style.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('web/css/yourstyle.css')}}">
    <!--=============== favicons ===============-->
    <link rel="shortcut icon" href="{{asset('web/images/favicon.ico')}}">
  </head>
  <body>
    <!--Loader  -->
    <div class="loader"><i class="fa fa-refresh fa-spin"></i></div>
    <!--LOader end  -->
    <!--================= main start ================-->
    <div id="main">
        <!--=============== header ===============-->
        @include('web.include.navbar')
        <!--header end -->
        <!--=============== wrapper ===============-->
        <div id="wrapper">
            <!--=============== Content holder  ===============-->
            @yield('content')
            <!-- content holder end -->
        </div>
        <!-- wrapper end -->
        <div class="left-decor"></div>
        <div class="right-decor"></div>
        <!--=============== Footer ===============-->
        <footer>
            <div class="policy-box">
                <span>&#169; Outdoor 2015 . All rights reserved. </span>
                <ul>
                    <li><a href="#">yourmail@domain.com</a></li>
                    <li><a href="#">+7(111)123456789</a></li>
                </ul>
            </div>
            <!-- footer social -->
            <div class="footer-social">
                <ul>
                    <li><a href="#" target="_blank" ><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" target="_blank" ><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#" target="_blank" ><i class="fa fa-pinterest"></i></a></li>
                    <li><a href="#" target="_blank" ><i class="fa fa-tumblr"></i></a></li>
                </ul>
            </div>
            <!-- footer social end -->
            <div class="to-top"><i class="fa fa-angle-up"></i></div>
        </footer>
        <!-- footer end -->
    </div>
    <!-- Main end -->
    <!--=============== scripts  ===============-->
    <script type="text/javascript" src="{{asset('web/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('web/js/plugins.js')}}"></script>
    <script type="text/javascript" src="{{asset('web/js/scripts.js')}}"></script>
  </body>
</html>