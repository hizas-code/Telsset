<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>
        @section('title')
            Telsset Dashboard
        @show
    </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->

    <link href="{{ url('assets/css/app.css') }}" rel="stylesheet" type="text/css"/>
    <!-- font Awesome -->

    <style>
        .body header{
            position : fixed;
        }
    </style>
    <!-- end of global css -->
    <!--page level css-->
    @yield('header_styles')
            <!--end of page level css-->

<body class="skin-josh">
    <header class="header">
        <a href="{{ url('index') }}" class="logo">
            <img src="{{ url('assets/img/logo.png') }}" alt="logo">
        </a>
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->

        </nav>
    </header>
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="left-side sidebar-offcanvas">
            <section class="sidebar ">
                <div class="page-sidebar  sidebar-nav">
                    <div class="clearfix"></div>
                    <!-- BEGIN SIDEBAR MENU -->
                    @include('layouts._left_menu')
                    <!-- END SIDEBAR MENU -->
                </div>
            </section>
        </aside>
        <aside class="right-side">

            <!-- Notifications -->
            @include('layouts._notifications')

                    <!-- Content -->
            @yield('content')

        </aside>
        <!-- right-side -->
    </div>
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top"
       data-toggle="tooltip" data-placement="left">
        <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
    </a>
    <!-- global js -->
    <script src="{{ asset('assets/js/app.js') }}" type="text/javascript"></script>


    <!-- end of global js -->
    <!-- begin page level js -->
    @yield('footer_scripts')
            <!-- end page level js -->
</body>
</html>
