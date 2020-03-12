<!DOCTYPE html>
<html lang="en-US">
<head>
    @section('head')
        @include('includes.head')
    @show
</head>
<body class="home page page-id-9 page-template-default om-wpb sidebar--hidden om_theme wheelsberry_theme om-animation-enabled primary-menu-highlight-active titles--uppercase wpb-js-composer js-comp-ver-4.12 vc_responsive">
  
    <!--=================HEADER=======================-->
    @include('includes.header.logo_menu')
    @include('includes.header.slideshow')
    {{-- ============================================ --}}

    @yield('content')
    
</body>
</html>
