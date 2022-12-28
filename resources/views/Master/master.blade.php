<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Barber </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/slicknav.css">
    <link rel="stylesheet" href="../assets/css/flaticon.css">
    <link rel="stylesheet" href="../assets/css/gijgo.css">
    <link rel="stylesheet" href="../assets/css/animate.min.css">
    <link rel="stylesheet" href="../assets/css/animated-headline.css">
    <link rel="stylesheet" href="../assets/css/magnific-popup.css">
    <link rel="stylesheet" href="../assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/slick.css">
    <link rel="stylesheet" href="../assets/css/nice-select.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>


    <header>
        <div class="header-area header-transparent " style="background-color:black;  ">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->

                        <div class="col-xl-2 col-lg-2 col-md-1">

                            <div class="logo">
                                <a href="index.php"><img src="../assets/img/logo/logo.png" alt=""></a>
                            </div>

                        </div>


                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <div class="menu-main d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">

                                    <nav>
                                        <ul id="navigation">
                                            @if (Auth::user() != null && Auth::user()->role == 'admin')
                                                <li><a href="/dashboard" id="contact">Dashboard</a></li>
                                            @endif
                                            <li class="{{str_contains(url()->current() , '/home') ? 'active' : ''}}"><a href="/">Home</a></li>
                                            <li class="{{str_contains(url()->current() , '/barbers') ? 'active' : ''}}"><a href="/barbers" id="barbers">Barbers</a></li>
                                            <li class="{{str_contains(url()->current() , '/about') ? 'active' : ''}}"><a href="/about" id="about">About</a></li>
                                            <li class="{{str_contains(url()->current() , '/contact') ? 'active' : ''}}"><a href="/contact" id="contact">Contact</a></li>


                                            {{-- <a href="/profile" style="color:#d19f68">{{ Auth::user()->name }}</a> --}}
                                        </ul>
                                    </nav>

                                    <style>
                                        .dropbtn {
                                            background-color: #04AA6D;
                                            color: white;
                                            padding: 16px;
                                            font-size: 16px;
                                            border: none;
                                        }

                                        .dropdown {
                                            position: relative;
                                            display: inline-block;
                                        }

                                        .dropdown-content {
                                            display: none;
                                            position: absolute;
                                            background-color: #f1f1f1;
                                            min-width: 118px;
                                            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
                                            z-index: 1;
                                        }

                                        .dropdown-content a {
                                            color: black;
                                            padding: 12px 16px;
                                            text-decoration: none;
                                            display: block;
                                        }

                                        .dropdown-content a:hover {
                                            background-color: #ddd;
                                        }

                                        .dropdown:hover .dropdown-content {
                                            display: block;
                                        }

                                        .dropdown:hover .dropbtn {
                                            background-color: #fff;
                                        }

                                        .colorBtn:hover {
                                            color: white;
                                        }
                                    </style>






                                </div>

                                @if (!Auth::user())
                                    <div class="header-right-btn f-right d-none d-lg-block ml-30">
                                        <a href="/register" class="btn header-btn">became a member</a>
                                    </div>
                                @endif
                                @if (Auth::user() != null && Auth::user()->role == 'user')
                                    <div class="header-right-btn f-right d-none d-lg-block ml-30" style="10px">
                                        <div class="dropdown">

                                            <a href="/profile"> <button type="submit"
                                                    class="btn header-btn  colorBtn">Profile</button></a>

                                            <div class="dropdown-content">
                                                <form method="post" action="/logout">
                                                    @csrf
                                                    <button type="submit" class="btn header-btn  colorBtn"
                                                        style="background-color: #fff">
                                                        Logout
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endif



                                @if (Auth::user() != null && Auth::user()->role == 'admin')
                                    <div class="header-right-btn f-right d-none d-lg-block ml-30">
                                        <form method="post" action="/logout">
                                            @csrf
                                            <button type="submit" class="btn header-btn  colorBtn">
                                                Logout
                                            </button>
                                        </form>
                                    </div>
                                @endif

                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>


    @yield('section')

    <!--? Footer Start-->
    <footer>

        <div class="footer-area section-bg" data-background="../assets/img/gallery/footer_bg.png">
            <div class="container">
                <div class="footer-top footer-padding">
                    <div class="row d-flex justify-content-between">
                        <div class="col-xl-3 col-lg-4 col-md-5 col-sm-8">
                            <div class="single-footer-caption mb-50">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="index.html"><img src="../assets/img/logo/logo2_footer.png" alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p class="info1">Receive updates and latest news direct from Simply enter.</p>
                                    </div>
                                </div>
                                <div class="footer-number">
                                    <h4><span>+564 </span>7885 3222</h4>
                                    <p>youremail@gmail.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Location </h4>
                                    <ul>
                                        <li><a href="#">Advanced</a></li>
                                        <li><a href="#"> Management</a></li>
                                        <li><a href="#">Corporate</a></li>
                                        <li><a href="#">Customer</a></li>
                                        <li><a href="#">Information</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Explore</h4>
                                    <ul>
                                        <li><a href="#">Cookies</a></li>
                                        <li><a href="#">About</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Proparties</a></li>
                                        <li><a href="#">Licenses</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Location</h4>
                                    <div class="footer-pera">
                                        <p class="info1">Subscribe now to get daily updates</p>
                                    </div>
                                </div>
                                <!-- Form -->
                                <div class="footer-form">
                                    <div>
                                        <form action="/newsletterform" method="post" novalidate="true">
                                            @csrf
                                            <input type="email" name="email" id="newsletter-form-email" required
                                                @if (Auth::check()) value="{{ auth()->user()->email }}" @endif
                                                placeholder=" Email Address " class="placeholder hide-on-focus"
                                                onfocus="this.placeholder = ''"
                                                onblur="this.placeholder = 'Your email address'">
                                            <div class="form-icon">
                                                <button type="submit" name="submit" id="newsletter-submit"
                                                    class="email_icon newsletter-submit button-contactForm">Send</button>

                                                    
                                            </div>
                                            @error('email')
                                                <p class="text-white small" style="margin-top: -1.5rem">
                                                    {{ $message }}</p>
                                            @enderror
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        </div>
        </div>
        </div>
        <!-- Footer End-->
    </footer>
    <script src="../assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="../assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="../assets/js/wow.min.js"></script>
    <script src="../assets/js/animated.headline.js"></script>
    <script src="../assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="../assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="../assets/js/jquery.nice-select.min.js"></script>
    <script src="../assets/js/jquery.sticky.js"></script>

    <!-- counter , waypoint,Hover Direction -->
    <script src="../assets/js/jquery.counterup.min.js"></script>
    <script src="../assets/js/waypoints.min.js"></script>
    <script src="../assets/js/jquery.countdown.min.js"></script>
    <script src="../assets/js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="../assets/js/contact.js"></script>
    <script src="../assets/js/jquery.form.js"></script>
    <script src="../assets/js/jquery.validate.min.js"></script>
    <script src="../assets/js/mail-script.js"></script>
    <script src="../assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/main.js"></script>
</body>

</html>
