<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>@yield('title')</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('template/assets/images/favicon.png') }}" type="image/png">

    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="{{ asset('template/assets/css/animate.css') }}">

    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="{{ asset('template/assets/css/tiny-slider.css') }}">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="{{ asset('template/assets/fonts/lineicons/font-css/LineIcons.css') }}">

    <!--====== Tailwind CSS ======-->
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">

</head>

<body>

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @yield('content')

    <footer id="footer" class="footer_area bg-black relative z-10">
        <div class="shape absolute left-0 top-0 opacity-5 h-full overflow-hidden w-1/3">
            <img src="{{ asset('template/assets/images/footer-shape-left.png') }}" alt="">
        </div>
        <div class="shape absolute right-0 top-0 opacity-5 h-full overflow-hidden w-1/3">
            <img src="{{ asset('template/assets/images/footer-shape-right.png') }}" alt="">
        </div>
        <div class="container">
            <div class="footer_widget pt-18 pb-120">
                <div class="row justify-center">
                    <div class="md:w-1/2 lg:w-3/12">
                        <div class="footer_about mt-13 mx-3">
                            <div class="footer_logo">
                                <a href="#"><img src="{{ asset('template/assets/images/logo-footer.svg') }}" alt=""></a>
                            </div>
                            <div class="footer_content mt-8">
                                <p class="text-white">{{ $comproDetail->summary }}</p>
                            </div>
                        </div> <!-- footer about -->
                    </div>
                    <div class="flex-grow">
                        <div class="footer_link_wrapper flex flex-wrap mx-3">
                            <div class="footer_link w-1/2 md:pl-13 mt-13">
                                <h2 class="footer_title text-xl font-semibold text-white">Quick Links</h2>
                                <ul class="link pt-4">
                                    <li>
                                        <a href="#home" class="text-white mt-4 hover:text-theme-color">
                                            Home
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#section-feature" class="text-white mt-4 hover:text-theme-color">
                                            Fitur
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#section-package" class="text-white mt-4 hover:text-theme-color">
                                            Paket
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#section-testimony" class="text-white mt-4 hover:text-theme-color">
                                            Testimoni
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div> <!-- footer link wrapper -->
                    </div>
                </div> <!-- row -->
            </div> <!-- footer widget -->
            <div class="footer_copyright pt-3 pb-6 border-t-2 border-solid border-white border-opacity-10 sm:flex justify-between">
                <div class="footer_social pt-4 mx-3 text-center">
                    <ul class="social flex justify-center sm:justify-start">
                        <li class="mr-3"><a href="https://facebook.com/uideckHQ"><i class="lni lni-facebook-filled"></i></a></li>
                        <li class="mr-3"><a href="https://twitter.com/uideckHQ"><i class="lni lni-twitter-filled"></i></a></li>
                        <li class="mr-3"><a href="https://instagram.com/uideckHQ"><i class="lni lni-instagram-original"></i></a></li>
                        <li class="mr-3"><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                    </ul>
                </div> <!-- footer social -->
                <div class="footer_copyright_content pt-4 text-center">
                    <p class="text-white">Copyright &copy; {{ $comproDetail->name }} {{ date('Y') }}</p>
                </div> <!-- footer copyright content -->
            </div> <!-- footer copyright -->
        </div> <!-- container -->
    </footer>

    <a href="#" class="scroll-top"><i class="lni lni-chevron-up"></i></a>

    <script src="{{ asset('template/assets/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('template/assets/js/wow.min.js') }}"></script>
    @stack('scripts')
    <script src="{{ asset('template/assets/js/main.js') }}"></script>

</body>

</html>
