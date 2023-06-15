<!DOCTYPE html>
<html lang="en" class="no-js">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Identity</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Themesdesign" />

    <link rel="shortcut icon" href="{{asset('assets/frontend/images/favicon.ico')}}">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.min.css')}}" type="text/css">

    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/materialdesignicons.min.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/fontawesome.css')}}" />

    <!-- selectize css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/selectize.css')}}" />

    <!--Slider-->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/owl.carousel.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/frontend/css/owl.theme.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/frontend/css/owl.transitions.css')}}" />

    <!-- Custom  Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/style.css')}}" />

    @yield('stylesheet')

</head>

<body>
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- Loader -->

    <!-- Navigation Bar-->
    <header id="topnav" class="defaultscroll scroll-active">
        <!-- Tagline STart -->
        <div class="tagline">
            <div class="container">
                <div class="float-left">
                    <div class="phone">
                        <i class="mdi mdi-phone-classic"></i> +1 800 123 45 67
                    </div>
                    <div class="email">
                        <a href="#">
                            <i class="mdi mdi-email"></i> Support@mail.com
                        </a>
                    </div>
                </div>
                <div class="float-right">
                    <ul class="topbar-list list-unstyled d-flex" style="margin: 11px 0px;">
                        <li class="list-inline-item"><a href="javascript:void(0);"><i class="mdi mdi-account mr-2"></i>Benny Simpson</a></li>
                        <li class="list-inline-item">
                            <select id="select-lang" class="demo-default">
                                <option value="">Language</option>
                                <option value="4">English</option>
                                <option value="1">Spanish</option>
                                <option value="3">French</option>
                                <option value="5">Hindi</option>
                            </select>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- Tagline End -->

        <!-- Menu Start -->
        <div class="container">
            <!-- Logo container-->
            <div>
                <a href="index.html" class="logo">
                    <img src="images/logo-light.png" alt="" class="logo-light" height="18" />
                    <img src="images/logo-dark.png" alt="" class="logo-dark" height="18" />
                </a>
            </div>
            <div class="buy-button">
                <a href="{{route('login')}}" class="btn btn-primary"><i class="mdi mdi-cloud-upload"></i> Login</a>
            </div><!--end login button-->
            <!-- End Logo container-->
            <div class="menu-extras">
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>

            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="has-submenu">
                        <a href="javascript:void(0)">Jobs</a><span class="menu-arrow"></span>
                        
                    </li>

                    <li class="has-submenu">
                        <a href="javascript:void(0)">Pages</a><span class="menu-arrow"></span>
                        
                    </li>
                    <li>
                        <a href="contact.html">contact</a>
                    </li>
                </ul><!--end navigation menu-->
            </div><!--end navigation-->
        </div><!--end container-->
        <!--end end-->
    </header><!--end header-->
    <!-- Navbar End -->


    @yield('content')


 
    <hr>
    <footer class="footer footer-bar">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="">
                        <p class="mb-0">© 2023 . Design with <i class="mdi mdi-heart text-danger"></i> by <a href="https://1.envato.market/themesdesign" target="_blank">Termux</a>.</p>
                    </div>
                </div>
            </div>
        </div><!--end container-->
    </footer><!--end footer-->
    <!-- Footer End -->

    <!-- Back to top -->
    <a href="#" class="back-to-top rounded text-center" id="back-to-top">
        <i class="mdi mdi-chevron-up d-block"> </i>
    </a>
    <!-- Back to top -->

    <!-- javascript -->
    <script src="{{asset('assets/frontend/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/plugins.js')}}"></script>

    <!-- selectize js -->
    <script src="{{asset('assets/frontend/js/selectize.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/jquery.nice-select.min.js')}}"></script>

    <script src="{{asset('assets/frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/counter.int.js')}}"></script>

    <script src="{{asset('assets/frontend/js/app.js')}}"></script>
    <script src="{{asset('assets/frontend/js/home.js')}}"></script>
    @yield('script')

</body>

</html>
