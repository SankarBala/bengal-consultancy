<!DOCTYPE HTML>
<html lang="en-US">

<!-- Mirrored from webitkurigram.com/html/visapro/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Jun 2021 05:32:54 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bengal Consultancy visa services</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="{{ asset('frontend/assets/images/fav-icon/icon.png') }}">
    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" type="text/css" media="all" />
    <!-- carousel CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}" type="text/css"
        media="all" />
    <!-- responsive CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}" type="text/css" media="all" />
    <!-- nivo-slider CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/nivo-slider.css') }}" type="text/css" media="all" />
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css') }}" type="text/css" media="all" />
    <!-- animated-text CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animated-text.css') }}" type="text/css" media="all" />
    <!-- font-awesome CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/all.min.css') }}" type="text/css" media="all" />
    <!-- font-flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/flaticon.css') }}" type="text/css" media="all" />
    <!-- theme-default CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/theme-default.css') }}" type="text/css" media="all" />
    <!-- meanmenu CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/meanmenu.min.css') }}" type="text/css" media="all" />
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}" type="text/css" media="all" />
    <!-- transitions CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.transitions.css') }}" type="text/css"
        media="all" />
    <!-- venobox CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/venobox/venobox.css') }}" type="text/css" media="all" />
    <!-- widget CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/widget.css') }}" type="text/css" media="all" />
    <!-- modernizr js -->
    <script type="text/javascript" src="{{ asset('frontend/assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>

    @stack('style')

</head>

<body>

    <!--==================================================-->
    {{-- <div class="header-top-menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="header-top-address">
                        <ul>
                            <li><a href="#"><i class="far fa-envelope"></i> {{ env('APP_EMAIL') }}</a></li>
                            <li><a href="#"><i class="fas fa-map-marker-alt"></i> {{ env('APP_ADDRESS') }}</a></li>
                            <li><a href="#"><i class="fas fa-phone"></i> {{ env('APP_PHONE') }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="hrader-top-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--==================================================-->

    <div class="header-area transparent" id="sticky-header">
        <div class="container">
            <div class="m-logo">
                <a href="{{ route('home') }}"><span class="logo-txt"></span></a>
            </div>
            <div class="menu-toggle"><i class="fas fa-bars"></i></div>
            <div class="menu-wrapper">
                <div class="row align-items-center d-flex">
                    <div class="col-lg-3">
                        <div class="header-logo">
                            <a class="main-logo" href="{{ route('home') }}"><img
                                    src="{{ asset('frontend/assets/images/logo.png') }}" alt=""></a>
                            <a class="stiky-logo" href="{{ route('home') }}"><img
                                    src="{{ asset('frontend/assets/images/logo.png') }}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="header-menu">
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a>
                                </li>
                                <li><a href="#">Countries <span><i class="fas fa-angle-down"></i></span><span
                                            class="mobile-menu-icon"><i class="fas fa-angle-right"></i></span></a>
                                    <div class="sub-menu">
                                        <ul>
                                            @foreach ($countries as $country)
                                                <li><a href="{{ route('showCountry', $country->name) }}">{{ $country->name }}
                                                    </a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="">About us</a></li>
                                <li><a href="">Contact us</a></li>
                            </ul>
                            <div class="mobile-menu-social-icon d-lg-none mt-40">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fas fa-map-marker-alt"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @yield('content')

    <!--==================================================-->

    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-content mb-30">
                        <div class="footer-logo">
                            {{-- <img src="{{ asset('frontend/assets/images/logo2.png') }}" alt=""> --}}
                            <h2 class="text-white">বেঙ্গল কন্সালটেন্সি</h2>
                        </div>
                        <div class="dreamit-footer-content">
                            <p>
                                আমাদের বেঙ্গল কন্সালটেন্সি দীর্ঘদিন ধরে সফলভাবে ভিসা প্রসেসিং করে আসছে। আমাদের সকল
                                গ্রাহকগন আমাদের সেবায় সন্তুষ্ট।
                            </p>
                        </div>
                        <div class="dreamit-footer-social-address">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="footer-content mb-30">
                        <div class="footer-title">
                            <h2>যোগাযোগ</h2>
                            <p></p>
                        </div>
                        <div class="footer-adderss">
                            <p><b>ঠিকানা:</b> <span>{{ env('APP_ADDRESS') }}</span></p>
                            <p><b>ফোন:</b> <span>{{ env('APP_PHONE') }}</span></p>
                            <p><b>ইমেইল:</b> <span>{{ env('APP_EMAIL') }}</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="footer-content mb-30">
                        <div class="footer-title">
                            <h2>নিউজলেটার</h2>
                            <p>
                                সকল নতুন তথ্য পেতে সাবস্ক্রাইব করে রাখুন।
                            </p>
                        </div>
                        <form method="post" action="{{route('subscription')}}">
                            @csrf
                            <div class="subscribe-area">
                                <input class="subscribe-mail-box" type="email" placeholder="Enter Your Email...."
                                    required="" name="email">
                                <button class="subscribe-button" type="submit">
                                    <i class="fab fa-telegram-plane"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row bd-top-footer pt-15">
                <div class="col-lg-6 col-md-6">
                    <div class="copy-right-text">
                        <p>Developed by Sankar Bala</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer-text-menu">
                        <ul>
                            <li><a target="_blank" href="https://sankarbala.github.io/portfolio/">Visit my portfolio</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->

    <!-- jquery js -->
    <script type="text/javascript" src="{{ asset('frontend/assets/js/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- bootstrap js -->
    <script type="text/javascript" src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <!-- carousel js -->
    <script type="text/javascript" src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
    <!-- counterup js -->
    <script type="text/javascript" src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}"></script>
    <!-- waypoints js -->
    <script type="text/javascript" src="{{ asset('frontend/assets/js/waypoints.min.js') }}"></script>
    <!-- wow js -->
    <script type="text/javascript" src="{{ asset('frontend/assets/js/wow.js') }}"></script>
    <!-- imagesloaded js -->
    <script type="text/javascript" src="{{ asset('frontend/assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <!-- venobox js -->
    <script type="text/javascript" src="{{ asset('frontend/venobox/venobox.js') }}"></script>
    <!-- ajax mail js -->
    <script type="text/javascript" src="{{ asset('frontend/assets/js/ajax-mail.js') }}"></script>
    <!--  animated-text js -->
    <script type="text/javascript" src="{{ asset('frontend/assets/js/animated-text.js') }}"></script>
    <!-- venobox min js -->
    <script type="text/javascript" src="{{ asset('frontend/venobox/venobox.min.js') }}"></script>
    <!-- isotope js -->
    <script type="text/javascript" src="{{ asset('frontend/assets/js/isotope.pkgd.min.js') }}"></script>
    <!-- jquery nivo slider pack js -->
    <script type="text/javascript" src="{{ asset('frontend/assets/js/jquery.nivo.slider.pack.js') }}"></script>
    <!-- jquery meanmenu js -->
    <script type="text/javascript" src="{{ asset('frontend/assets/js/jquery.meanmenu.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
    <!-- jquery scrollup js -->
    <script type="text/javascript" src="{{ asset('frontend/assets/js/jquery.scrollUp.js') }}"></script>
    <!-- theme js -->
    <script type="text/javascript" src="{{ asset('frontend/assets/js/theme.html') }}"></script>
    <!-- jquery js -->
    <script type="text/javascript" src="{{ asset('frontend/assets/js/main.js') }}"></script>
</body>

<!-- Mirrored from webitkurigram.com/html/visapro/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Jun 2021 05:34:20 GMT -->

</html>
