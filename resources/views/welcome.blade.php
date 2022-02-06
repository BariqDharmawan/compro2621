@extends('layouts.master')

@section('title', 'Homepage')

@section('content')
    <!--====== PRELOADER PART ENDS ======-->

    <!--====== HEADER PART START ======-->

    <section class="header_area">
        @include('partials.nav')

        <div id="home" class="header_hero bg-gray relative z-10 overflow-hidden lg:flex items-center">
            <div class="hero_shape shape_1">
                <img src="{{ asset('template/assets/images/shape/shape-1.svg') }}" alt="shape">
            </div><!-- hero shape -->
            <div class="hero_shape shape_2">
                <img src="{{ asset('template/assets/images/shape/shape-2.svg') }}" alt="shape">
            </div><!-- hero shape -->
            <div class="hero_shape shape_3">
                <img src="{{ asset('template/assets/images/shape/shape-3.svg') }}" alt="shape">
            </div><!-- hero shape -->
            <div class="hero_shape shape_4">
                <img src="{{ asset('template/assets/images/shape/shape-4.svg') }}" alt="shape">
            </div><!-- hero shape -->
            <div class="hero_shape shape_6">
                <img src="{{ asset('template/assets/images/shape/shape-1.svg') }}" alt="shape">
            </div><!-- hero shape -->
            <div class="hero_shape shape_7">
                <img src="{{ asset('template/assets/images/shape/shape-4.svg') }}" alt="shape">
            </div><!-- hero shape -->
            <div class="hero_shape shape_8">
                <img src="{{ asset('template/assets/images/shape/shape-3.svg') }}" alt="shape">
            </div><!-- hero shape -->
            <div class="hero_shape shape_9">
                <img src="{{ asset('template/assets/images/shape/shape-2.svg') }}" alt="shape">
            </div><!-- hero shape -->
            <div class="hero_shape shape_10">
                <img src="{{ asset('template/assets/images/shape/shape-4.svg') }}" alt="shape">
            </div><!-- hero shape -->
            <div class="hero_shape shape_11">
                <img src="{{ asset('template/assets/images/shape/shape-1.svg') }}" alt="shape">
            </div><!-- hero shape -->
            <div class="hero_shape shape_12">
                <img src="{{ asset('template/assets/images/shape/shape-2.svg') }}" alt="shape">
            </div><!-- hero shape -->

            <div class="container">
                <div class="row">
                    <div class="w-full lg:w-1/2">
                        <div class="header_hero_content pt-150 lg:pt-0">
                            <h2 class="hero_title text-2xl sm:text-4xl md:text-5xl lg:text-4xl xl:text-5xl font-extrabold">Creative Multipurpose Tailwind CSS <span class="text-theme-color">Template</span></h2>
                            <p class="mt-8 lg:mr-8">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna.</p>
                            <div class="hero_btn mt-10">
                                <a class="main-btn" href="#0">Get Started</a>
                            </div>
                        </div> <!-- header hero content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div class="header_shape hidden lg:block"></div>

            <div class="header_image flex items-center">
                <div class="image 2xl:pl-25">
                    <img src="{{ asset('template/assets/images/header-image.svg') }}" alt="Header Image">
                </div>
            </div> <!-- header image -->
        </div> <!-- header hero -->
    </section>

    <!--====== HEADER PART ENDS ======-->

    <!--====== SERVICES PART START ======-->

    <section class="services_area pt-120" id="about">
        <div class="container">
            <div class="row justify-center">
                <div class="w-full lg:w-1/2">
                    <div class="section_title text-center pb-6">
                        <h5 class="sub_title">About</h5>
                        <h4 class="main_title">Work Process</h4>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-center">
                <div class="w-full sm:w-10/12 md:w-6/12 lg:w-4/12">
                    <div class="single_services text-center mt-8 mx-3">
                        <div class="services_icon">
                            <i class="lni lni-write"></i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="94" height="92" viewBox="0 0 94 92">
                                <path class="services_shape" id="Polygon_12" data-name="Polygon 12" d="M42.212,2.315a11,11,0,0,1,9.576,0l28.138,13.6a11,11,0,0,1,5.938,7.465L92.83,54.018A11,11,0,0,1,90.717,63.3L71.22,87.842A11,11,0,0,1,62.607,92H31.393a11,11,0,0,1-8.613-4.158L3.283,63.3A11,11,0,0,1,1.17,54.018L8.136,23.383a11,11,0,0,1,5.938-7.465Z" />
                            </svg>
                        </div>
                        <div class="services_content mt-5">
                            <h3 class="services_title text-black font-semibold text-xl md:text-3xl">Research</h3>
                            <p class="mt-4">Lorem ipsum dolor sit amet, consetetur sadi aliquyam erat, sed diam voluptua. At vero eos accusam et justo duo dolores </p>
                        </div>
                    </div> <!-- single services -->
                </div>
                <div class="w-full sm:w-10/12 md:w-6/12 lg:w-4/12">
                    <div class="single_services text-center mt-8 mx-3">
                        <div class="services_icon">
                            <i class="lni lni-bulb"></i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="94" height="92" viewBox="0 0 94 92">
                                <path class="services_shape" id="Polygon_12" data-name="Polygon 12" d="M42.212,2.315a11,11,0,0,1,9.576,0l28.138,13.6a11,11,0,0,1,5.938,7.465L92.83,54.018A11,11,0,0,1,90.717,63.3L71.22,87.842A11,11,0,0,1,62.607,92H31.393a11,11,0,0,1-8.613-4.158L3.283,63.3A11,11,0,0,1,1.17,54.018L8.136,23.383a11,11,0,0,1,5.938-7.465Z" />
                            </svg>
                        </div>
                        <div class="services_content mt-5">
                            <h3 class="services_title text-black font-semibold text-xl md:text-3xl">Prototype</h3>
                            <p class="mt-4">Lorem ipsum dolor sit amet, consetetur sadi aliquyam erat, sed diam voluptua. At vero eos accusam et justo duo dolores </p>
                        </div>
                    </div> <!-- single services -->
                </div>
                <div class="w-full sm:w-10/12 md:w-6/12 lg:w-4/12">
                    <div class="single_services text-center mt-8 mx-3">
                        <div class="services_icon">
                            <i class="lni lni-checkmark-circle"></i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="94" height="92" viewBox="0 0 94 92">
                                <path class="services_shape" id="Polygon_12" data-name="Polygon 12" d="M42.212,2.315a11,11,0,0,1,9.576,0l28.138,13.6a11,11,0,0,1,5.938,7.465L92.83,54.018A11,11,0,0,1,90.717,63.3L71.22,87.842A11,11,0,0,1,62.607,92H31.393a11,11,0,0,1-8.613-4.158L3.283,63.3A11,11,0,0,1,1.17,54.018L8.136,23.383a11,11,0,0,1,5.938-7.465Z" />
                            </svg>
                        </div>
                        <div class="services_content mt-5">
                            <h3 class="services_title text-black font-semibold text-xl md:text-3xl">Build</h3>
                            <p class="mt-4">Lorem ipsum dolor sit amet, consetetur sadi aliquyam erat, sed diam voluptua. At vero eos accusam et justo duo dolores </p>
                        </div>
                    </div> <!-- single services -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== SERVICES PART ENDS ======-->

    <!--====== ABOUT PART START ======-->

    <section id="why" class="about_area pt-120 relative">
        <div class="about_image flex items-end justify-end">
            <div class="image lg:pr-13">
                <img src="{{ asset('template/assets/images/about.svg') }}" alt="about">
            </div>
        </div> <!-- about image -->
        <div class="container">
            <div class="row justify-end">
                <div class="w-full lg:w-1/2">
                    <div class="about_content mx-4 pt-11 lg:pt-15 lg:pb-15">
                        <div class="section_title pb-9">
                            <h5 class="sub_title">Why Choose Us</h5>
                            <h4 class="main_title">Your Goal is Our Achievement</h4>
                        </div> <!-- section title -->
                        <p>Nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat sed diam voluptua. At vero eos et accusam et justo duo dolores et rebum. Stet clita kasd gubergren, no sea takimata sanctus. </p>
                        <ul class="about_list pt-3">
                            <li class="flex mt-5">
                                <div class="about_check">
                                    <i class="lni lni-checkmark-circle"></i>
                                </div>
                                <div class="about_list_content pl-5 pr-2">
                                    <p>Vero eos et accusam et justo duo dolores et rebum. Stet clita kasd gubergrenv</p>
                                </div>
                            </li>
                            <li class="flex mt-5">
                                <div class="about_check">
                                    <i class="lni lni-checkmark-circle"></i>
                                </div>
                                <div class="about_list_content pl-5 pr-2">
                                    <p>At vero eos et accusam et justo duo dolores et rebum. Stet clita kasd gubergrenv</p>
                                </div>
                            </li>
                            <li class="flex mt-5">
                                <div class="about_check">
                                    <i class="lni lni-checkmark-circle"></i>
                                </div>
                                <div class="about_list_content pl-5 pr-2">
                                    <p>Dvero eos et accusam et justo duo dolores et rebum. Stet clita kasd gubergrenv</p>
                                </div>
                            </li>
                        </ul>
                    </div> <!-- about content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== ABOUT PART ENDS ======-->

    <!--====== SERVICES PART START ======-->

    <section id="services" class="services_area pt-120 pb-120">
        <div class="container">
            <div class="row justify-center">
                <div class="w-full lg:w-1/2">
                    <div class="section_title text-center pb-6">
                        <h5 class="sub_title">What We Do</h5>
                        <h4 class="main_title">Our Services</h4>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-center">
                <div class="w-full sm:w-10/12 md:w-6/12 lg:w-4/12">
                    <div class="single_services text-center mt-8 mx-3">
                        <div class="services_icon">
                            <i class="lni lni-layout"></i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="94" height="92" viewBox="0 0 94 92">
                                <path class="services_shape" id="Polygon_12" data-name="Polygon 12" d="M42.212,2.315a11,11,0,0,1,9.576,0l28.138,13.6a11,11,0,0,1,5.938,7.465L92.83,54.018A11,11,0,0,1,90.717,63.3L71.22,87.842A11,11,0,0,1,62.607,92H31.393a11,11,0,0,1-8.613-4.158L3.283,63.3A11,11,0,0,1,1.17,54.018L8.136,23.383a11,11,0,0,1,5.938-7.465Z" />
                            </svg>
                        </div>
                        <div class="services_content mt-5 xl:mt-10">
                            <h3 class="services_title text-black font-semibold text-xl md:text-2xl lg:text-xl xl:text-3xl">Web Design</h3>
                            <p class="mt-4">Lorem ipsum dolor sit amet, consetetur sadi aliquyam erat, sed diam voluptua. At vero eos accusam et justo duo dolores </p>
                        </div>
                    </div> <!-- single services -->
                </div>

                <div class="w-full sm:w-10/12 md:w-6/12 lg:w-4/12">
                    <div class="single_services text-center mt-8 mx-3">
                        <div class="services_icon">
                            <i class="lni lni-bullhorn"></i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="94" height="92" viewBox="0 0 94 92">
                                <path class="services_shape" id="Polygon_12" data-name="Polygon 12" d="M42.212,2.315a11,11,0,0,1,9.576,0l28.138,13.6a11,11,0,0,1,5.938,7.465L92.83,54.018A11,11,0,0,1,90.717,63.3L71.22,87.842A11,11,0,0,1,62.607,92H31.393a11,11,0,0,1-8.613-4.158L3.283,63.3A11,11,0,0,1,1.17,54.018L8.136,23.383a11,11,0,0,1,5.938-7.465Z" />
                            </svg>
                        </div>
                        <div class="services_content mt-5 xl:mt-10">
                            <h3 class="services_title text-black font-semibold text-xl md:text-2xl lg:text-xl xl:text-3xl">Digital Marketing</h3>
                            <p class="mt-4">Lorem ipsum dolor sit amet, consetetur sadi aliquyam erat, sed diam voluptua. At vero eos accusam et justo duo dolores </p>
                        </div>
                    </div> <!-- single services -->
                </div>

                <div class="w-full sm:w-10/12 md:w-6/12 lg:w-4/12">
                    <div class="single_services text-center mt-8 mx-3">
                        <div class="services_icon">
                            <i class="lni lni-mobile"></i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="94" height="92" viewBox="0 0 94 92">
                                <path class="services_shape" id="Polygon_12" data-name="Polygon 12" d="M42.212,2.315a11,11,0,0,1,9.576,0l28.138,13.6a11,11,0,0,1,5.938,7.465L92.83,54.018A11,11,0,0,1,90.717,63.3L71.22,87.842A11,11,0,0,1,62.607,92H31.393a11,11,0,0,1-8.613-4.158L3.283,63.3A11,11,0,0,1,1.17,54.018L8.136,23.383a11,11,0,0,1,5.938-7.465Z" />
                            </svg>
                        </div>
                        <div class="services_content mt-5 xl:mt-10">
                            <h3 class="services_title text-black font-semibold text-xl md:text-2xl lg:text-xl xl:text-3xl">Mobile Apps</h3>
                            <p class="mt-4">Lorem ipsum dolor sit amet, consetetur sadi aliquyam erat, sed diam voluptua. At vero eos accusam et justo duo dolores </p>
                        </div>
                    </div> <!-- single services -->
                </div>

                <div class="w-full sm:w-10/12 md:w-6/12 lg:w-4/12">
                    <div class="single_services text-center mt-8 mx-3">
                        <div class="services_icon">
                            <i class="lni lni-seo"></i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="94" height="92" viewBox="0 0 94 92">
                                <path class="services_shape" id="Polygon_12" data-name="Polygon 12" d="M42.212,2.315a11,11,0,0,1,9.576,0l28.138,13.6a11,11,0,0,1,5.938,7.465L92.83,54.018A11,11,0,0,1,90.717,63.3L71.22,87.842A11,11,0,0,1,62.607,92H31.393a11,11,0,0,1-8.613-4.158L3.283,63.3A11,11,0,0,1,1.17,54.018L8.136,23.383a11,11,0,0,1,5.938-7.465Z" />
                            </svg>
                        </div>
                        <div class="services_content mt-5 xl:mt-10">
                            <h3 class="services_title text-black font-semibold text-xl md:text-2xl lg:text-xl xl:text-3xl">SEO Consultancy</h3>
                            <p class="mt-4">Lorem ipsum dolor sit amet, consetetur sadi aliquyam erat, sed diam voluptua. At vero eos accusam et justo duo dolores </p>
                        </div>
                    </div> <!-- single services -->
                </div>

                <div class="w-full sm:w-10/12 md:w-6/12 lg:w-4/12">
                    <div class="single_services text-center mt-8 mx-3">
                        <div class="services_icon">
                            <i class="lni lni-layers"></i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="94" height="92" viewBox="0 0 94 92">
                                <path class="services_shape" id="Polygon_12" data-name="Polygon 12" d="M42.212,2.315a11,11,0,0,1,9.576,0l28.138,13.6a11,11,0,0,1,5.938,7.465L92.83,54.018A11,11,0,0,1,90.717,63.3L71.22,87.842A11,11,0,0,1,62.607,92H31.393a11,11,0,0,1-8.613-4.158L3.283,63.3A11,11,0,0,1,1.17,54.018L8.136,23.383a11,11,0,0,1,5.938-7.465Z" />
                            </svg>
                        </div>
                        <div class="services_content mt-5 xl:mt-10">
                            <h3 class="services_title text-black font-semibold text-xl md:text-2xl lg:text-xl xl:text-3xl">Graphic Design</h3>
                            <p class="mt-4">Lorem ipsum dolor sit amet, consetetur sadi aliquyam erat, sed diam voluptua. At vero eos accusam et justo duo dolores </p>
                        </div>
                    </div> <!-- single services -->
                </div>

                <div class="w-full sm:w-10/12 md:w-6/12 lg:w-4/12">
                    <div class="single_services text-center mt-8 mx-3">
                        <div class="services_icon">
                            <i class="lni lni-briefcase"></i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="94" height="92" viewBox="0 0 94 92">
                                <path class="services_shape" id="Polygon_12" data-name="Polygon 12" d="M42.212,2.315a11,11,0,0,1,9.576,0l28.138,13.6a11,11,0,0,1,5.938,7.465L92.83,54.018A11,11,0,0,1,90.717,63.3L71.22,87.842A11,11,0,0,1,62.607,92H31.393a11,11,0,0,1-8.613-4.158L3.283,63.3A11,11,0,0,1,1.17,54.018L8.136,23.383a11,11,0,0,1,5.938-7.465Z" />
                            </svg>
                        </div>
                        <div class="services_content mt-5 xl:mt-10">
                            <h3 class="services_title text-black font-semibold text-xl md:text-2xl lg:text-xl xl:text-3xl">Business Consultancy</h3>
                            <p class="mt-4">Lorem ipsum dolor sit amet, consetetur sadi aliquyam erat, sed diam voluptua. At vero eos accusam et justo duo dolores </p>
                        </div>
                    </div> <!-- single services -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== SERVICES PART ENDS ======-->

    <!--====== WORK PART START ======-->

    <section id="work" class="work_area bg-gray pt-120 pb-120">
        <div class="container">
            <div class="row justify-center">
                <div class="w-ull lg:w-1/2">
                    <div class="section_title text-center pb-6">
                        <h5 class="sub_title">Works</h5>
                        <h4 class="main_title">Some of Our Recent Works</h4>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="container-fluid">
            <div class="work_wrapper relative">
                <div class="row work_active">
                    <div class="w-full lg:w-3/12">
                        <div class="single_item mx-auto">
                            <div class="single_work mx-3">
                                <div class="work_image">
                                    <img src="{{ asset('template/assets/images/work-1.jpg') }}" alt="work" class="w-full">
                                </div>
                                <div class="work_content">
                                    <a href="#" class="arrow"><i class="lni lni-chevron-right"></i></a>
                                    <h4 class="work_title text-xl md:text-2xl"><a href="#">Marketing</a></h4>
                                    <p class="mt-2">NoCodeAPI</p>
                                </div>
                            </div>
                        </div> <!-- single work -->
                    </div>
                    <div class="w-full lg:w-3/12">
                        <div class="single_item mx-auto">
                            <div class="single_work mx-3">
                                <div class="work_image">
                                    <img src="{{ asset('template/assets/images/work-2.jpg') }}" alt="work" class="w-full">
                                </div>
                                <div class="work_content">
                                    <a href="#" class="arrow"><i class="lni lni-chevron-right"></i></a>
                                    <h4 class="work_title text-xl md:text-2xl"><a href="#">Creative Design</a></h4>
                                    <p class="mt-2">UIdeck</p>
                                </div>
                            </div>
                        </div> <!-- single work -->
                    </div>
                    <div class="w-full lg:w-3/12">
                        <div class="single_item mx-auto">
                            <div class="single_work mx-3">
                                <div class="work_image">
                                    <img src="{{ asset('template/assets/images/work-3.jpg') }}" alt="work" class="w-full">
                                </div>
                                <div class="work_content">
                                    <a href="#" class="arrow"><i class="lni lni-chevron-right"></i></a>
                                    <h4 class="work_title text-xl md:text-2xl"><a href="#">Web Design</a></h4>
                                    <p class="mt-2">GrayGrids</p>
                                </div>
                            </div>
                        </div> <!-- single work -->
                    </div>
                    <div class="w-full lg:w-3/12">
                        <div class="single_item mx-auto">
                            <div class="single_work mx-3">
                                <div class="work_image">
                                    <img src="{{ asset('template/assets/images/work-4.jpg') }}" alt="work" class="w-full">
                                </div>
                                <div class="work_content">
                                    <a href="#" class="arrow"><i class="lni lni-chevron-right"></i></a>
                                    <h4 class="work_title text-xl md:text-2xl"><a href="#">Analysis</a></h4>
                                    <p class="mt-2">Ayro UI</p>
                                </div>
                            </div>
                        </div> <!-- single work -->
                    </div>
                    <div class="w-full lg:w-3/12">
                        <div class="single_item mx-auto">
                            <div class="single_work mx-3">
                                <div class="work_image">
                                    <img src="{{ asset('template/assets/images/work-5.jpg') }}" alt="work" class="w-full">
                                </div>
                                <div class="work_content">
                                    <a href="#" class="arrow"><i class="lni lni-chevron-right"></i></a>
                                    <h4 class="work_title text-xl md:text-2xl"><a href="#">SMM</a></h4>
                                    <p class="mt-2">LineIcons</p>
                                </div>
                            </div>
                        </div> <!-- single work -->
                    </div>
                    <div class="w-full lg:w-3/12">
                        <div class="single_item mx-auto">
                            <div class="single_work mx-3">
                                <div class="work_image">
                                    <img src="{{ asset('template/assets/images/work-2.jpg') }}" alt="work" class="w-full">
                                </div>
                                <div class="work_content">
                                    <a href="#" class="arrow"><i class="lni lni-chevron-right"></i></a>
                                    <h4 class="work_title text-xl md:text-2xl"><a href="#">SEO</a></h4>
                                    <p class="mt-2">PageBulb</p>
                                </div>
                            </div>
                        </div> <!-- single work -->
                    </div>
                    <div class="w-full lg:w-3/12">
                        <div class="single_item mx-auto">
                            <div class="single_work mx-3">
                                <div class="work_image">
                                    <img src="{{ asset('template/assets/images/work-4.jpg') }}" alt="work" class="w-full">
                                </div>
                                <div class="work_content">
                                    <a href="#" class="arrow"><i class="lni lni-chevron-right"></i></a>
                                    <h4 class="work_title text-xl md:text-2xl"><a href="#">Mobile App</a></h4>
                                    <p class="mt-2">Rocket Internet LTD</p>
                                </div>
                            </div>
                        </div> <!-- single work -->
                    </div>
                </div> <!-- row -->
            </div>
        </div> <!-- container -->
    </section>

    <!--====== WORK PART ENDS ======-->

    <!--====== PRICING PLAN PART START ======-->

    <section id="pricing" class="pricing_area pt-120 pb-120">
        <div class="container">
            <div class="row justify-center">
                <div class="w-full lg:w-1/2">
                    <div class="section_title text-center pb-6">
                        <h5 class="sub_title">Pricing Plans</h5>
                        <h4 class="main_title">Choose Your Plan</h4>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="w-full">
                    <div class="pricing_menu mt-8 pb-8">
                        <ul class="flex justify-center">
                            <li class="nav-item">
                                <button class="active bg-gray text-body-color py-3 px-8 rounded-tl-full rounded-bl-full" data-tab-target="#monthlyPlan">Monthly</button>
                            </li>
                            <li class="nav-item">
                                <button class="bg-gray text-body-color py-3 px-8 rounded-tr-full rounded-br-full" data-tab-target="#yearlyPlan">Yearly</button>
                            </li>
                        </ul>
                    </div> <!-- pricing menu -->

                    <div class="pricing_content mt-6_area">
                        <div class="tab-content">
                            <div class="active tab-pane" id="monthlyPlan" data-tab-content>
                                <div class="row justify-center">
                                    <div class="w-full sm:w-9/12 md:w-7/12 lg:w-4/12">
                                        <div class="single_pricing text-center mt-8 mx-3">
                                            <div class="pricing_title relative inline-block">
                                                <h4 class="title group-hover:text-white">Basic</h4>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="112" height="110" viewBox="0 0 112 110">
                                                    <path class="services_shape" id="Polygon_15" data-name="Polygon 15" d="M51.2,2.329a11,11,0,0,1,9.6,0L96.15,19.478a11,11,0,0,1,5.927,7.466l8.76,38.665a11,11,0,0,1-2.1,9.258l-24.508,30.96A11,11,0,0,1,75.6,110H36.4a11,11,0,0,1-8.625-4.173L3.266,74.867a11,11,0,0,1-2.1-9.258l8.76-38.665a11,11,0,0,1,5.927-7.466Z" fill="#f94f4f"/>
                                                </svg>
                                            </div>
                                            <div class="pricing_content mt-6">
                                                <span class="pricing_price font-bold text-black text-4xl">$19.00</span>
                                                <p class="mt-4 leading-9">Lorem ipsum dolor sit am consetetur sadi aliquyam erat sed diam voluptua vero eos  accusam et justo duo dolores </p>
                                                <a href="" class="main-btn pricing_btn">Choose Plan</a>
                                            </div>
                                        </div>  <!-- single pricing -->
                                    </div>

                                    <div class="w-full sm:w-9/12 md:w-7/12 lg:w-4/12">
                                        <div class="single_pricing text-center mt-8 mx-3 active">
                                            <div class="pricing_title relative inline-block">
                                                <h4 class="title group-hover:text-white">Standard</h4>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="112" height="110" viewBox="0 0 112 110">
                                                    <path class="services_shape" id="Polygon_15" data-name="Polygon 15" d="M51.2,2.329a11,11,0,0,1,9.6,0L96.15,19.478a11,11,0,0,1,5.927,7.466l8.76,38.665a11,11,0,0,1-2.1,9.258l-24.508,30.96A11,11,0,0,1,75.6,110H36.4a11,11,0,0,1-8.625-4.173L3.266,74.867a11,11,0,0,1-2.1-9.258l8.76-38.665a11,11,0,0,1,5.927-7.466Z" fill="#f94f4f"/>
                                                </svg>
                                            </div>
                                            <div class="pricing_content mt-6">
                                                <span class="pricing_price font-bold text-black text-4xl">$39.00</span>
                                                <p class="mt-4 leading-9">Lorem ipsum dolor sit am consetetur sadi aliquyam erat sed diam voluptua vero eos  accusam et justo duo dolores </p>
                                                <a href="" class="main-btn pricing_btn">Choose Plan</a>
                                            </div>
                                        </div>  <!-- single pricing -->
                                    </div>

                                    <div class="w-full sm:w-9/12 md:w-7/12 lg:w-4/12">
                                        <div class="single_pricing text-center mt-8 mx-3">
                                            <div class="pricing_title relative inline-block">
                                                <h4 class="title group-hover:text-white">Premium</h4>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="112" height="110" viewBox="0 0 112 110">
                                                    <path class="services_shape" id="Polygon_15" data-name="Polygon 15" d="M51.2,2.329a11,11,0,0,1,9.6,0L96.15,19.478a11,11,0,0,1,5.927,7.466l8.76,38.665a11,11,0,0,1-2.1,9.258l-24.508,30.96A11,11,0,0,1,75.6,110H36.4a11,11,0,0,1-8.625-4.173L3.266,74.867a11,11,0,0,1-2.1-9.258l8.76-38.665a11,11,0,0,1,5.927-7.466Z" fill="#f94f4f"/>
                                                </svg>
                                            </div>
                                            <div class="pricing_content mt-6">
                                                <span class="pricing_price font-bold text-black text-4xl">$99.00</span>
                                                <p class="mt-4 leading-9">Lorem ipsum dolor sit am consetetur sadi aliquyam erat sed diam voluptua vero eos  accusam et justo duo dolores </p>
                                                <a href="" class="main-btn pricing_btn">Choose Plan</a>
                                            </div>
                                        </div>  <!-- single pricing -->
                                    </div>
                                </div> <!-- row -->
                            </div>
                            <div class="tab-pane" id="yearlyPlan" data-tab-content>
                                <div class="row justify-center">
                                    <div class="w-full sm:w-9/12 md:w-7/12 lg:w-4/12">
                                        <div class="single_pricing text-center mt-8 mx-3">
                                            <div class="pricing_title relative inline-block">
                                                <h4 class="title group-hover:text-white">Basic</h4>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="112" height="110" viewBox="0 0 112 110">
                                                    <path class="services_shape" id="Polygon_15" data-name="Polygon 15" d="M51.2,2.329a11,11,0,0,1,9.6,0L96.15,19.478a11,11,0,0,1,5.927,7.466l8.76,38.665a11,11,0,0,1-2.1,9.258l-24.508,30.96A11,11,0,0,1,75.6,110H36.4a11,11,0,0,1-8.625-4.173L3.266,74.867a11,11,0,0,1-2.1-9.258l8.76-38.665a11,11,0,0,1,5.927-7.466Z" fill="#f94f4f"/>
                                                </svg>
                                            </div>
                                            <div class="pricing_content mt-6">
                                                <span class="pricing_price font-bold text-black text-4xl">$99.00</span>
                                                <p class="mt-4 leading-9">Lorem ipsum dolor sit am consetetur sadi aliquyam erat sed diam voluptua vero eos  accusam et justo duo dolores </p>
                                                <a href="" class="main-btn pricing_btn">Choose Plan</a>
                                            </div>
                                        </div>  <!-- single pricing -->
                                    </div>

                                    <div class="w-full sm:w-9/12 md:w-7/12 lg:w-4/12">
                                        <div class="single_pricing text-center mt-8 mx-3 active">
                                            <div class="pricing_title relative inline-block">
                                                <h4 class="title group-hover:text-white">Standard</h4>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="112" height="110" viewBox="0 0 112 110">
                                                    <path class="services_shape" id="Polygon_15" data-name="Polygon 15" d="M51.2,2.329a11,11,0,0,1,9.6,0L96.15,19.478a11,11,0,0,1,5.927,7.466l8.76,38.665a11,11,0,0,1-2.1,9.258l-24.508,30.96A11,11,0,0,1,75.6,110H36.4a11,11,0,0,1-8.625-4.173L3.266,74.867a11,11,0,0,1-2.1-9.258l8.76-38.665a11,11,0,0,1,5.927-7.466Z" fill="#f94f4f"/>
                                                </svg>
                                            </div>
                                            <div class="pricing_content mt-6">
                                                <span class="pricing_price font-bold text-black text-4xl">$199.00</span>
                                                <p class="mt-4 leading-9">Lorem ipsum dolor sit am consetetur sadi aliquyam erat sed diam voluptua vero eos  accusam et justo duo dolores </p>
                                                <a href="" class="main-btn pricing_btn">Choose Plan</a>
                                            </div>
                                        </div>  <!-- single pricing -->
                                    </div>

                                    <div class="w-full sm:w-9/12 md:w-7/12 lg:w-4/12">
                                        <div class="single_pricing text-center mt-8 mx-3">
                                            <div class="pricing_title relative inline-block">
                                                <h4 class="title group-hover:text-white">Premium</h4>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="112" height="110" viewBox="0 0 112 110">
                                                    <path class="services_shape" id="Polygon_15" data-name="Polygon 15" d="M51.2,2.329a11,11,0,0,1,9.6,0L96.15,19.478a11,11,0,0,1,5.927,7.466l8.76,38.665a11,11,0,0,1-2.1,9.258l-24.508,30.96A11,11,0,0,1,75.6,110H36.4a11,11,0,0,1-8.625-4.173L3.266,74.867a11,11,0,0,1-2.1-9.258l8.76-38.665a11,11,0,0,1,5.927-7.466Z" fill="#f94f4f"/>
                                                </svg>
                                            </div>
                                            <div class="pricing_content mt-6">
                                                <span class="pricing_price font-bold text-black text-4xl">$499.00</span>
                                                <p class="mt-4 leading-9">Lorem ipsum dolor sit am consetetur sadi aliquyam erat sed diam voluptua vero eos  accusam et justo duo dolores </p>
                                                <a href="" class="main-btn pricing_btn">Choose Plan</a>
                                            </div>
                                        </div>  <!-- single pricing -->
                                    </div>
                                </div> <!-- row -->
                            </div>
                        </div>
                    </div> <!-- pricing menu -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== BLOG PART START ======-->

    <section id="blog" class="blog_area pt-120">
        <div class="container">
            <div class="row justify-center">
                <div class="w-full lg:w-1/2">
                    <div class="section_title text-center pb-6">
                        <h5 class="sub_title">Blog</h5>
                        <h4 class="main_title">From The Blog</h4>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-center lg:justify-start">
                <div class="w-full md:w-8/12 lg:w-6/12 xl:w-4/12">
                    <div class="single_blog mx-3 mt-8 rounded-xl bg-white transition-all duration-300 overflow-hidden hover:shadow-lg">
                        <div class="blog_image">
                            <img src="{{ asset('template/assets/images/blog-1.jpg') }}" alt="blog" class="w-full">
                        </div>
                        <div class="blog_content p-4 md:p-5">
                            <ul class="blog_meta flex justify-between">
                                <li class="text-body-color text-sm md:text-base">By: <a href="#" class="text-body-color hover:text-theme-color">Musharof Chowdury</a></li>
                                <li class="text-body-color text-sm md:text-base">15 June 2024</li>
                            </ul>
                            <h3 class="blog_title"><a href="#">How to track your business revenue</a></h3>
                            <a href="#" class="more_btn">Read More</a>
                        </div>
                    </div> <!-- row -->
                </div>
                <div class="w-full md:w-8/12 lg:w-6/12 xl:w-4/12">
                    <div class="single_blog mx-3 mt-8 rounded-xl bg-white transition-all duration-300 overflow-hidden hover:shadow-lg">
                        <div class="blog_image">
                            <img src="{{ asset('template/assets/images/blog-2.jpg') }}" alt="blog" class="w-full">
                        </div>
                        <div class="blog_content p-4 md:p-5">
                            <ul class="blog_meta flex justify-between">
                                <li class="text-body-color text-sm md:text-base">By: <a href="#" class="text-body-color hover:text-theme-color">Musharof Chowdury</a></li>
                                <li class="text-body-color text-sm md:text-base">15 June 2024</li>
                            </ul>
                            <h3 class="blog_title"><a href="#">Improving products depending on feedback</a></h3>
                            <a href="#" class="more_btn">Read More</a>
                        </div>
                    </div> <!-- row -->
                </div>
                <div class="w-full md:w-8/12 lg:w-6/12 xl:w-4/12">
                    <div class="single_blog mx-3 mt-8 rounded-xl bg-white transition-all duration-300 overflow-hidden hover:shadow-lg">
                        <div class="blog_image">
                            <img src="{{ asset('template/assets/images/blog-3.jpg') }}" alt="blog" class="w-full">
                        </div>
                        <div class="blog_content p-4 md:p-5">
                            <ul class="blog_meta flex justify-between">
                                <li class="text-body-color text-sm md:text-base">By: <a href="#" class="text-body-color hover:text-theme-color">Musharof Chowdury</a></li>
                                <li class="text-body-color text-sm md:text-base">15 June 2024</li>
                            </ul>
                            <h3 class="blog_title"><a href="#">How to diversify your audience</a></h3>
                            <a href="#" class="more_btn">Read More</a>
                        </div>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== BLOG PART ENDS ======-->

    <!--====== CONTACT PART START ======-->

    <section id="contact" class="contact_area relative pt-18 pb-120">
        <div class="container">
            <div class="row justify-end">
                <div class="w-full lg:w-1/2">
                    <div class="contact_image w-full" style="position: static; margin: 0">
                        <div class="image w-full">
                            <img src="{{ asset('template/assets/images/contact.svg') }}" alt="about">
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/2">
                    <div class="contact_wrapper mt-11">
                        <div class="section_title pb-4">
                            <h5 class="sub_title">Contact</h5>
                            <h4 class="main_title">Get In Touch</h4>
                            <p>Lorem ipsum dolor sitrg amet, consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna.</p>
                        </div> <!-- section title -->

                        <div class="contact_form">
                            <form id="contact-form" action="" method="POST">
                                <div class="row">
                                    <div class="w-full md:w-1/2">
                                        <div class="mx-3">
                                            <div class="single_form mt-8">
                                                <input name="name" id="name" type="text" placeholder="Name" class="w-full rounded-md py-4 px-6 border border-solid border-body-color">
                                            </div> <!-- single form -->
                                        </div>
                                    </div>
                                    <div class="w-full md:w-1/2">
                                        <div class="mx-3">
                                            <div class="single_form mt-8">
                                                <input name="email" id="email" type="email" placeholder="Email" class="w-full rounded-md py-4 px-6 border border-solid border-body-color">
                                            </div> <!-- single form -->
                                        </div>
                                    </div>
                                    <div class="w-full">
                                        <div class="mx-3">
                                            <div class="single_form mt-8">
                                                <textarea name="message" id="message" placeholder="Message" rows="5" class="w-full rounded-md py-4 px-6 border border-solid border-body-color resize-none"></textarea>
                                            </div> <!-- single form -->
                                        </div>
                                    </div>
                                    <p class="form-message mx-3"></p>
                                    <div class="w-full">
                                        <div class="mx-3">
                                            <div class="single_form mt-8">
                                                <button type="submit" class="main-btn contact-btn">Submit</button>
                                            </div> <!-- single form -->
                                        </div>
                                    </div>
                                </div> <!-- row -->
                            </form>
                        </div> <!-- contact form -->
                    </div> <!-- contact wrapper -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== CONTACT PART ENDS ======-->
@endsection
