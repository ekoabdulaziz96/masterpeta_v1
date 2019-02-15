<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>MasterPeta</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">    
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
        <link href="{{ mix('/css/all.css') }}" rel="stylesheet">
    </head>    
    <body>
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{asset('img/logo_mp.png')}}" width="150" alt="masterpeta">
            </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        @if (Route::has('login'))
                            @auth
                            <li class="nav-item ahvr-animated animated-box animated-pulse">
                                <a class="nav-link" href="{{ url('/lesson') }}">Catalog</a>
                            </li>
                            <li class="nav-item ahvr-animated animated-box animated-pulse">
                                <a class="nav-link" href="{{ url('/class') }}">My classroom</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/coach">Become a Coach</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/setting">
                                        Setting
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @else
                            <li class="nav-item ahvr-animated animated-box animated-pulse">
                                <a class="nav-link" href="{{ url('/login') }}">Login</a>
                            </li>
                            <li class="nav-item hvr-underline-from-center">
                                <a class="nav-link" href="{{url('/register')}}">Register</a>
                            </li>
                            @endauth
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        @section('content')
        <div class="top-image">
            <img src="{{asset('img/img-jumbotron.jpg')}}" class="img-jumbotron" alt="Masterpeta">
            <div class="main-slogan"><p class="animated fadeInUp">Belajar Kapan Saja dan Dimana Saja</p></div>
            <div class="first-sub-slogan"><p class="animated fadeInUp">Cari Pelajaran yang anda inginkan, kami menyediakan berbagai macam materi dengan pelatih yang berkualitas.</p></div>
            <!-- <div class="second-sub-slogan"><p class="animated fadeInUp">Belajar pemetaan dengan cara asyik dan dimanapun. Tanyakan apapun yang anda bingung tentang pemetaan kepada Masterpeta. </p></div> -->
            <a href="#">Login</a>
            <div class="arrow-slogan"><i class="fas fa-chevron-down animated infinite fadeOutDown"></i></div>
        </div>
        @if (Route::has('login'))
        @auth
        <div class="content">
                <div class="container main-pad" id="userGet">
                    <!-- what will you get section -->
                    <div class="row" style="text-align: center">
                        <div class="col-12 my-5 pb-5">
                            <h1 class="title-center section-title"></h1>
                            <div class="bg-color-theme title-underline"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-4 mb-2 services-first-row">
                            <img class="gambar-card" src="{{asset('img/img-db.png')}}" alt="Card image cap">
                                <div >
                                    <h3>KATALOG</h3>
                                    <!-- <p >Pembelajaran dan pendampingan online terhadap software pemetaan dari pemula hingga lanjutan.</p> -->
                                </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 mb-2 services-first-row">
                            <img class="gambar-card" src="{{asset('img/img-my-class.png')}}" alt="Card image cap">
                                <div >
                                    <h3>MY CLASSROOM</h3>
                                    <!-- <p >Anda tetap dapat belajar pemetaan di Masterpeta. Kami berharap masukan dari setiap pihak untuk pengembangan video e-learning di Masterpeta.</p> -->
                                </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 mb-2 services-first-row">
                            <img class="gambar-card" src="{{asset('img/img-become-a-coach.png')}}" alt="Card image cap">
                                <div >
                                    <h3>BECOME A COACH</h3>
                                    <!-- <p >Anda tetap dapat belajar pemetaan di Masterpeta. Kami berharap masukan dari setiap pihak untuk pengembangan video e-learning di Masterpeta.</p> -->
                                </div>
                        </div>
                    </div>
                </div>
        </div>
        @else
        <div class="content">
                <div class="container main-pad" id="userGet">
                    <!-- what will you get section -->
                    <div class="row" style="text-align: center">
                        <div class="col-12 my-5 pb-5">
                            <h1 class="title-center section-title"></h1>
                            <div class="bg-color-theme title-underline"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-4 mb-2 services-first-row">
                            <img class="gambar-card" src="{{asset('img/img-access.png')}}" alt="Card image cap">
                                <div >
                                    <h3>Akses Belajar Seumur Hidup Kapanpun dan Dimanapun</h3>
                                    <!-- <p >Pembelajaran dan pendampingan online terhadap software pemetaan dari pemula hingga lanjutan.</p> -->
                                </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 mb-2 services-first-row">
                            <img class="gambar-card" src="{{asset('img/img-asking.png')}}" alt="Card image cap">
                                <div >
                                    <h3>Tanyakan Materi Anda, Pembelajaran Berorientasi Mentoring</h3>
                                    <!-- <p >Anda tetap dapat belajar pemetaan di Masterpeta. Kami berharap masukan dari setiap pihak untuk pengembangan video e-learning di Masterpeta.</p> -->
                                </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 mb-2 services-first-row">
                            <img class="gambar-card" src="{{asset('img/img-pro-mentor.png')}}" alt="Card image cap">
                                <div >
                                    <h3>Pelatih Berkualitas. Temukan Instruktur yang Sesuai Dengan Anda Disini.</h3>
                                    <!-- <p >Ruang bertanya dan berdiskusi khusus kepada pengajar dalam materi pemetaan.</p> -->
                                </div>
                        </div>
                    </div>
                </div>
        </div>
        @endauth
        @endif
        <div class="content">
                <div class="container main-pad" id="userGet">
                    <!-- what will you get section -->
                    <div class="row" style="text-align: center">
                        <div class="col-12 my-5 pb-5">
                            <h1 class="title-center section-title">Tanggapan Mereka Setelah Belajar di MASTERPETA</h1>
                            <div class="bg-color-theme title-underline"></div>
                        </div>
                    </div>
                    <div class="row">
                        <iframe src="https://www.youtube.com/embed/GtPSun5p2l4" frameborder="0" width="1200px" height="600px"></iframe>
                    </div>
                </div>
        </div>
    </body>
    @show
    <footer class="footer">
        <div class="container-fluid">
            <div class="row py-5">
                <div class="col-xs-12 col-md-4 px-5">
                    <h4 class="pb-4 text-center" style="text-decoration:underline;padding-top:40px;">Become a Coach</h4>
                    <img class="img mx-auto d-block" src="{{ asset('img/img-mentoring.png') }}" alt="become a coach" style="height:100px;background:white;">
                    <p class="pt-4">Bergabung bersama kami untuk menjadi pengajar. Hubungi contact maupun admin. Masterpeta menerima semua pengajar, seperti untuk autocad, sketchup, QGIS, Arcgis, GlobalMapper, dll.</p>
                </div>
                <div class="col-xs-12 col-md-4 text-center footer-border footer-middle">
                    <h4 style="text-decoration:underline;">Join us!</h4>
                    <div class="align-middle">
                        <a href="#"><i class="fab fa-facebook fa-3x"></i></a>
                        <a class="mx-4" href="#"><i class="fab fa-instagram fa-3x"></i></a>
                        <a href="#"><i class="fab fa-youtube fa-3x"></i></a>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 footer-border">
                    <img class="mx-auto d-block pb-5" src="{{ asset('img/logo_mp_main.png') }}" alt="logo masterpeta" style="width:200px">
                    <h4 style="text-decoration:underline;">Address</h4>
                    <p>Jl. BSD Green Office Park, GOP 9 - G Floor, BSD City,  Tangerang Banten 15345. (HQ)</p>
                    <h4 style="text-decoration:underline;">Contact</h4>
                    <ul>
                        <li>Phone: (+62)-8136-2816-321</li>
                        <li>Email: masterpeta123@gmail.com</li>
                    </ul>

                </div>
            </div>
            <div class="row justify-content-center py-3">
                <div class="col-xs-12 text-center">
                    <small>© 2019 Masterpeta. All Rights Reserved.</small>
                </div>
            </div>
        </div>
    </footer>
</html>
