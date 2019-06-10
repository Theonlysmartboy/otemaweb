<!DOCTYPE html>
<html lang="en">
<!-- index-kenburns11:31  -->
<head>
    <meta charset="utf-8" />
    <title>Otema - The Home of Digital Solutions</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('images/frontend_images/favicon.png')}}">
    <!-- Template CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/frontend_css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/frontend_css/font-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/frontend_css/magnific-popup.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/frontend_css/style.css')}}" />
    <link rel="stylesheet" type="text/css" title="blueviolet" href="{{asset('css/frontend_css/skins/blueviolet.css')}}" />
    <!-- Revolution Slider CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{asset('js/frontend_js/plugins/revolution/css/settings.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('js/frontend_js/plugins/revolution/css/layers.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('js/frontend_js/plugins/revolution/css/navigation.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/frontend_css/styleswitcher.css')}}" />
    <!-- Template JS Files -->
    <script src="{{asset('js/frontend_js/modernizr.js')}}"></script>
</head>
<body class="double-diagonal dark">
<!--header section to have the menu-->
@include('layouts.frontlayout.header')
<!--page content section-->
@yield('content')
<!--footer section-->
@include('layouts.frontlayout.footer')
<!-- Template JS Files -->
<script src="{{asset('js/frontend_js/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('js/frontend_js/plugins/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('js/frontend_js/plugins/bootstrap.min.js')}}"></script>
<script src="{{asset('js/frontend_js/plugins/jquery.bxslider.min.js')}}"></script>
<script src="{{asset('js/frontend_js/plugins/jquery.filterizr.js')}}"></script>
<script src="{{asset('js/frontend_js/plugins/jquery.magnific-popup.min.js')}}"></script>

<!-- Revolution Slider Main JS Files -->
<script src="{{asset('js/frontend_js/plugins/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('js/frontend_js/plugins/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<!-- Revolution Slider Extensions -->
<script src="{{asset('js/frontend_js/plugins/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('js/frontend_js/plugins/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('js/frontend_js/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('js/frontend_js/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('js/frontend_js/plugins/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('js/frontend_js/plugins/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('js/frontend_js/plugins/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('js/frontend_js/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('js/frontend_js/plugins/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
<!-- Live Style Switcher JS File - only demo -->
<script src="{{asset('js/frontend_js/styleswitcher.js')}}"></script>
<!-- Main JS Initialization File -->
<script src="{{asset('js/frontend_js/custom.js')}}"></script>
</body>
<!-- index-kenburns13:00  -->
</html>
