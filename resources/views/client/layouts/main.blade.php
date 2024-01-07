<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="INSPIRO" />
    <meta name="description" content="Themeforest Template Polo">
    <!-- Document title -->
    <title>POLO | The Multi-Purpose HTML5 Template</title>
    <!-- Stylesheets & Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,800,700,600|Montserrat:400,500,600,700|Raleway:100,300,600,700,800" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/plugins.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet"> </head>

<body>


<!-- Wrapper -->
<div id="wrapper">

    <!-- TOPBAR -->
@include('client.layouts.topbar')
<!-- end: TOPBAR -->

    <!-- Header -->
@include('client.layouts.header')
<!-- end: Header -->

@yield('content')

    <!-- Footer -->
@include('client.layouts.footer')
<!-- end: Footer -->

</div>
<!-- end: Wrapper -->

<!-- Go to top button -->
<a id="goToTop"><i class="fa fa-angle-up top-icon"></i><i class="fa fa-angle-up"></i></a>
<!--Plugins-->
<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/js/plugins.js')}}"></script>

<!--Template functions-->
<script src="{{asset('assets/js/functions.js')}}"></script>

</body>

</html>
