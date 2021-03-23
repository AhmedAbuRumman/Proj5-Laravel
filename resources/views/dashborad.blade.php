<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('theme/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('theme/img/favicon.ico')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Light Bootstrap Dashboard - Free Bootstrap 4 Admin Dashboard by Creative Tim</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="{{asset('theme/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('theme/css/light-bootstrap-dashboard.css?v=2.0.0 ')}}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('theme/css/demo.css')}}" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="{{asset('theme/img/sidebar-5.jpg') }}">

          <!--Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag -->

            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="" class="simple-text">
                        IT PATH
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item ">
                        <a class="nav-link" href=" /welcome_admin">
                            <i class="nc-icon nc-notes"></i>
                            <p>Welcome</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href=" /Admin">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Manage Admins</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="/Categories">
                            <i class="nc-icon nc-grid-45"></i>
                            <p>Manage Category</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="/Major">
                            <i class= "nc-icon nc-circle-09"></i>
                            <p>Manage Majors</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="/Jobs">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Manage Jobs</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="/Skill">
                            <i class= "nc-icon nc-circle-09"></i>
                            <p>Manage Skills</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="/Users">
                            <i class= "nc-icon nc-circle-09"></i>
                            <p>Manage users</p>
                        </a>
                    </li>
               

                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">

                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>

                        
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->


            @yield('contant')



        </div>
    </div>



</body>
<!--   Core JS Files   -->
<script src="{{ asset('theme/js/core/jquery.3.2.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('theme/js/core/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('theme/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{ asset('theme/js/plugins/bootstrap-switch.js') }}"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="{{ asset('theme/js/plugins/chartist.min.js') }}"></script>

<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="{{ asset('theme/js/light-bootstrap-dashboard.js?v=2.0.0') }} " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ asset('theme/js/demo.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.showNotification();

    });
</script>

</html>
