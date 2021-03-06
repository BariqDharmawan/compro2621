<div class="navbar-area bg-white">
    <div class="container relative">
        <div class="row items-center">
            <div class="w-full">
                <nav class="flex items-center justify-between py-4 navbar navbar-expand-lg">
                    <a class="navbar-brand flex gap-2 mr-5 font-bold" href="{{ url('/') }}">
                        <img src="{{ Storage::url('compro/' . $comproDetail->logo) }}" alt="" srcset="" class="h-5">
                        {{ $comproDetail->name }}
                    </a>
                    <button class="block navbar-toggler focus:outline-none lg:hidden" type="button" data-toggle="collapse" data-target="#navbarOne" aria-controls="navbarOne" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                    </button>

                    <div class="absolute left-0 z-20 hidden w-full px-5 py-3 duration-300 bg-white lg:w-auto collapse navbar-collapse lg:block top-full mt-full lg:static lg:bg-transparent shadow lg:shadow-none" id="navbarOne">
                        <ul id="nav" class="items-center content-start mr-auto lg:justify-end navbar-nav lg:flex">
                            <li class="nav-item ml-5 lg:ml-11">
                                <a class="page-scroll active" href="#home">Home</a>
                            </li>
                            <li class="nav-item ml-5 lg:ml-11">
                                <a class="page-scroll" href="#section-feature">Fitur</a>
                            </li>
                            <li class="nav-item ml-5 lg:ml-11">
                                <a class="page-scroll" href="#section-package">Paket</a>
                            </li>
                            <li class="nav-item ml-5 lg:ml-11">
                                <a class="page-scroll" href="#section-testimony">Testimoni</a>
                            </li>
                            <li class="ml-5 lg:ml-11 lg:mt-0 mt-3">
                                <a href="https://soalpppk.id" class="btn-login flex justify-center lg:inline-block w-full lg:w-auto rounded-full py-2 px-4" target="_blank">
                                    Login
                                </a>
                            </li>
                        </ul>
                    </div> <!-- navbar collapse -->
                </nav> <!-- navbar -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</div> <!-- header navbar -->
