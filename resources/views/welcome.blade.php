@extends('layouts.master')

@section('title', 'SOAL PPPK')

@section('content')
    <!--====== PRELOADER PART ENDS ======-->

    <!--====== HEADER PART START ======-->

    <section class="header_area lg:pt-32 xl:pt-20" id="header-area">
        @include('partials.nav')

        <div id="home" class="header_hero relative z-10 lg:flex items-center">
            <div class="container">
                <div class="row">
                    <div class="w-full lg:w-1/2">
                        <div class="header_hero_content pt-150 lg:pt-0">
                            <h2 class="hero_title text-2xl sm:text-4xl md:text-5xl lg:text-4xl xl:text-5xl font-extrabold">
                                {{ $headContent->heading }}
                            </h2>
                            <p class="mt-8 lg:mr-8">{{ $headContent->desc }}</p>
                            <div class="hero_btn mt-10">
                                <a class="btn-pill btn-pill--md bg-green-lemon text-white hover:opacity-70"
                                href="https://soalpppk.id/register">Daftar sekarang</a>
                            </div>
                        </div> <!-- header hero content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div class="header_shape hidden lg:block"></div>

            <div class="header_image flex items-center lg:px-14">
                <iframe width="100%" height="400px" src="{{ str_replace('watch?v=', 'embed/', $comproDetail->video) }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"  allowfullscreen></iframe>
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
        <div class="container">
            <div class="about_content mx-4 pt-11 lg:pt-15 lg:pb-15">
                <div class="section_title pb-9">
                    <h5 class="sub_title">Paket</h5>
                    <h4 class="main_title">Paket yang kami tawarkan antara lain</h4>
                </div> <!-- section title -->
                <div class="grid grid-cols-4 gap-4 pt-3">
                    @foreach ($packages as $package)
                    <div class="flex flex-col items-center">
                        <div class="about_list_content w-full">
                            <p class="font-bold">{{ $package->judul }}</p>
                            <p>
                                Rp.
                                <del>{{ number_format($package->harga_lama) }}</del>
                                <var class="not-italic">{{ number_format($package->harga_baru) }}</var>
                            </p>
                        </div>
                        <div class="py-3 wyswyg-package break-all w-full">{!! $package->deskripsi !!}</div>
                        <a href="https://soalpppk.id/register"
                        class="mt-4 inline-flex bg-green-lemon hover:bg-green-200 text-gray-800 font-semibold p-3 rounded-md">
                            Daftar Sekarang
                        </a>

                        <small class="text-gray-400 text-center block mt-2">
                            Dapatkan juga Extra Diskon dengan memasukkan kode promo atau referral
                        </small>
                    </div>
                    @endforeach
                </div>
            </div> <!-- about content -->
        </div> <!-- container -->
    </section>

    <section>
        <div class="container">
            <div class="section_title text-center">
                <h4 class="main_title">Metode Pembayaran</h4>
                <h5 class="sub_title mt-2">Tersedia beragam pilihan kemudahan dalam melakukan pembayaran</h5>
            </div>
            <div class="flex flex-wrap mt-6 justify-center">
                @foreach ($payOptions as $payOption)
                <div class="w-1/5 px-2 mb-4">
                    <img src="{{ Storage::url('pay-option/' . $payOption->img) }}" alt="" srcset="" class="h-24 w-24 mx-auto">
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="section-testimony" class="team_area bg-gray pt-120 pb-120">
        <div class="container">
            <div class="row justify-center">
                <div class="w-full lg:w-1/2">
                    <div class="section_title text-center pb-6">
                        <h5 class="sub_title">Testimony</h5>
                        <h4 class="main_title">What People Say About Us</h4>
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

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.dots.min.js"></script>
    <script>
        VANTA.DOTS({
            el: "#header-area",
            mouseControls: true,
            touchControls: true,
            gyroControls: false,
            minHeight: 200.00,
            minWidth: 200.00,
            scale: 1.00,
            scaleMobile: 1.00,
            color: '#c9e265',
            color2: '#c9e265',
            backgroundColor: 0xffffff,
            size: 10.00,
            spacing: 87.00
        })
    </script>
@endpush
