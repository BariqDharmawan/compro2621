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
                            <h2 class="hero_title text-2xl sm:text-4xl md:text-5xl lg:text-4xl xl:text-5xl font-extrabold">
                                {{ $headContent->heading }}
                            </h2>
                            <p class="mt-8 lg:mr-8">{{ $headContent->desc }}</p>
                            <div class="hero_btn mt-10">
                                <a class="main-btn" href="#0">Daftar sekarang</a>
                            </div>
                        </div> <!-- header hero content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div class="header_shape hidden lg:block"></div>

            <div class="header_image flex items-center">
                <div class="image">
                    <img src="{{ asset('template/assets/images/header-image.svg') }}" alt="Header Image">
                </div>
            </div> <!-- header image -->
        </div> <!-- header hero -->
    </section>

    <section class="services_area pt-120" id="section-feature">
        <div class="container">
            <div class="row justify-center">
                <div class="w-full lg:w-1/2">
                    <div class="section_title text-center pb-6">
                        <h5 class="sub_title">Fitur</h5>
                        <h4 class="main_title">Kami memiliki berbagai fitur, yaitu</h4>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-center">
                @foreach ($features as $feature)
                <div class="w-full sm:w-10/12 md:w-6/12 lg:w-4/12 mb-7">
                    <div class="single_services text-center mt-8 mx-3 h-full">
                        <div class="services_icon">
                            <img src="{{ Storage::url('feature/' . $feature->img) }}" alt="" srcset=""
                             class="rounded-full" style="width: 50px; height: 50px">
                        </div>
                        <div class="services_content mt-5">
                            <h3 class="services_title text-black font-semibold text-xl md:text-3xl">{{ $feature->title }}</h3>
                            <p class="mt-4">{{ $feature->desc }}</p>
                        </div>
                    </div> <!-- single services -->
                </div>
                @endforeach
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== SERVICES PART ENDS ======-->

    <!--====== ABOUT PART START ======-->

    <section id="section-package" class="about_area pt-120 relative">
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
                            <h5 class="sub_title">Paket</h5>
                            <h4 class="main_title">Paket yang kami tawarkan antara lain</h4>
                        </div> <!-- section title -->
                        <p>Nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat sed diam voluptua. At vero eos et accusam et justo duo dolores et rebum. Stet clita kasd gubergren, no sea takimata sanctus. </p>
                        <ul class="about_list pt-3">
                            @foreach ($packages as $package)
                            <li class="flex mt-5">
                                <div class="about_check">
                                    <i class="lni lni-checkmark-circle"></i>
                                </div>
                                <div class="about_list_content pl-5 pr-2">
                                    <p>{{ $package->judul }}</p>
                                    <p>
                                        Rp.
                                        <del>{{ number_format($package->harga_lama) }}</del>
                                        <var class="not-italic">{{ $package->harga_baru }}</var>
                                    </p>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div> <!-- about content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== ABOUT PART ENDS ======-->

    <!--====== SERVICES PART START ======-->

    <section id="section-testimony" class="team_area bg-gray pt-120 pb-120">
        <div class="container">
            <div class="row justify-center">
                <div class="w-full lg:w-1/2">
                    <div class="section_title text-center pb-6">
                        <h5 class="sub_title">Testimony</h5>
                        <h4 class="main_title">What people say about us</h4>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="team-wrapper relative">
                <div class="row team_active py-3">
                    @foreach ($testimonies as $testimony)
                        <div class="w-full lg:w-4/12 mb-5">
                            <div class="single_team_item h-full mx-auto">
                                <div class="single_team my-0 mx-3 h-full relative">
                                    <div class="team_image">
                                        <img src="{{ is_null($testimony->avatar) ?
                                        Avatar::create($testimony->fullname)->toBase64() :
                                        Storage::url('testimony/' . $testimony->avatar) }}"
                                        alt="team" class="w-16 h-16 object-cover mx-auto mt-5">
                                        <ul class="social absolute bottom-2 right-4 left-4 z-10 px-1
                                        opacity-0 group-hover:opacity-100 bg-white rounded-full flex gap-3 items-center py-1 justify-center">
                                            <li><a href="#" class="text-red-600 hover:text-white"><i class="lni lni-facebook-filled"></i></a></li>
                                            <li><a href="#" class="text-red-600 hover:text-white"><i class="lni lni-twitter-filled"></i></a></li>
                                            <li><a href="#" class="text-red-600 hover:text-white"><i class="lni lni-linkedin-original"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="team_content py-5 px-8 relative">
                                        <h4 class="team_name text-xl md:text-2xl text-center">
                                            <a href="#" class="text-black group-hover:text-white">
                                                {{ $testimony->fullname }}
                                            </a>
                                            <time class="block text-sm font-semibold text-gray-700 group-hover:text-white">
                                                {{ $testimony->review_at->format('d M Y') }}
                                            </time>
                                        </h4>
                                        <p class="mt-2 text-center transition-all duration-300 group-hover:text-white">
                                            {{ $testimony->desc }}
                                        </p>
                                    </div>
                                </div> <!-- single team -->
                            </div>
                        </div>
                    @endforeach
                </div> <!-- row -->
            </div>
        </div> <!-- container -->
    </section>

    <!--====== SERVICES PART ENDS ======-->

    <!--====== CONTACT PART ENDS ======-->
@endsection
