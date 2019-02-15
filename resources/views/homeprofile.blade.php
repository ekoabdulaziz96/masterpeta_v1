<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MasterPeta</title>

    <!-- Scripts -->
    <script src="{{ mix('/js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">    

    <!-- Styles -->
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    <link href="{{ mix('/css/all.css') }}" rel="stylesheet">
</head>
<body>
    @section('header')
    <nav class="navbar fixed-top navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{asset('img/logo_mp.png')}}" width="200" alt="masterpeta">
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
                        <li class="nav-item hvr-underline-from-center">
                            <a class="nav-link" href="{{ url('/elearning') }}">E-Learning</a>
                        </li>
                        <li class="nav-item hvr-underline-from-center">
                            <a class="nav-link" href="{{ url('/jasa') }}">Jasa</a>
                        </li>
                        <li class="nav-item hvr-underline-from-center">
                            <a class="nav-link" href="{{url('/database')}}">Database</a>
                        </li>
                </ul>
            </div>
        </div>
    </nav>
    @show
    @section('content')
    <div class="top-image">
        <img src="{{asset('img/img-jumbotron.jpg')}}" class="img-jumbotron" alt="Masterpeta">
        <div class="main-slogan"><p class="animated fadeInUp">Easy Map Learning for Everyone</p></div>
        <div class="first-sub-slogan"><p class="animated fadeInUp">Bangun skill pemetaan anda hari ini untuk masa depan anda.</p></div>
        <div class="second-sub-slogan"><p class="animated fadeInUp">Belajar pemetaan dengan cara asyik dan dimanapun. Tanyakan apapun yang anda bingung tentang pemetaan kepada Masterpeta. </p></div>
        <div class="arrow-slogan"><i class="fas fa-chevron-down animated infinite fadeOutDown"></i></div>
    </div>
    <div class="content">
        <div class="container main-pad" id="userGet">
            <!-- what will you get section -->
            <div class="row" style="text-align: center">
                <div class="col-12 my-5 pb-5">
                    <h1 class="title-center section-title">Apa yang Akan Anda Dapatkan?</h1>
                    <div class="bg-color-theme title-underline"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4 mb-2 services-first-row">
                    <img class="gambar-card" src="{{asset('img/img-e-learning.png')}}" alt="Card image cap">
                        <div >
                            <h3>E-Learning Pemetaan</h3>
                            <p >Pembelajaran dan pendampingan online terhadap software pemetaan dari pemula hingga lanjutan.</p>
                        </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-2 services-first-row">
                    <img class="gambar-card" src="{{asset('img/img-e-learning-ud.png')}}" alt="Card image cap">
                        <div >
                            <h3>Request Lesson</h3>
                            <p >Anda tetap dapat belajar pemetaan di Masterpeta. Kami berharap masukan dari setiap pihak untuk pengembangan video e-learning di Masterpeta.</p>
                        </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-2 services-first-row">
                    <img class="gambar-card" src="{{asset('img/img-personal-coaching.png')}}" alt="Card image cap">
                        <div >
                            <h3>Ask Coach for Mapping</h3>
                            <p >Ruang bertanya dan berdiskusi khusus kepada pengajar dalam materi pemetaan.</p>
                        </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-2 services-second-row">
                    <img class="gambar-card" src="{{asset('img/img-mapping.png')}}" alt="Card image cap">
                        <div >
                            <h3>Mapping Service</h3>
                            <p >Jasa pemetaan yang berorientasi kepada kepuasan dan keinginan pelanggan.</p>
                        </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-2 services-second-row">
                    <img class="gambar-card" src="{{asset('img/img-survey.png')}}" alt="Card image cap">
                        <div >
                            <h3>Survey</h3>
                            <p >Jasa survey dalam memenuhi kebutuhan data dari pelanggan. Jasa survey saat ini hanya dilakukan untuk wilayah semarang sekitarnya.</p>
                        </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-2 services-second-row">
                    <img class="gambar-card" src="{{asset('img/img-db.png')}}" alt="Card image cap">
                        <div >
                            <h3>Database</h3>
                            <p >Cari data yang anda butuhkan, mulai dari data dasar hingga data analisis pada pemetaan.</p>
                        </div>
                </div>
            </div>
    </div>
    <img class="tilted-separator" style="top:2px;" src="{{asset('img/separator-img/sep-1.png')}}" alt="separator">
    <div class="container-fluid" >
        <!-- Testimonial Section -->
        <div class="row  bg-color-theme" style="text-align: center">
                <div class="col-12 my-5 ">
                    <strong><h1 class="title-center section-title" style="color:#FFFFFF">Testimonial</h1></strong>
                    <div class=" title-underline" style="background:#FFFFFF"></div>
                </div>
            </div>
            <div class="row py-4  bg-color-theme justify-content-center">
                <div id="carouselWithIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselWithIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselWithIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselWithIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselWithIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselWithIndicators" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="bg-transparent testimonial-items">
                            <img class="rounded-circle mx-auto d-block" src="{{ asset('img/img-testi-1.jpg') }}" alt="">
                            <strong><h3>Lilik Argo Lukito</h3></strong>
                            <i><h6> — Kepala Desa Asinan</h6></i>
                            <p class="text-left">Sebagai kepala Desa Asinan, saya sangat berterimakasih dengan Masterpeta karena telah membantu dalam memberikan pelajaran online pemetaan ke anak muda yang telah saya tunjuk. Sekarang kita sudah bisa buat peta aset tanah desa kita sendiri.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="bg-transparent testimonial-items">
                            <img class="rounded-circle mx-auto d-block" src="{{ asset('img/img-testi-2.jpg') }}" alt="">
                            <strong><h3>Azwar Aswad</h3></strong>
                            <i><h6> — Staff BKPM Pusat</h6></i>
                            <p class="text-left">Saya telah mencoba masterpeta ketika pada saat awal uji coba. Hal yang paling menarik dari Masterpeta adalah anda tidak perlu takut jika anda tidak dapat menggunakan software pemetaan. Karena Masterpeta akan terus mendampingi anda secara online, sesuai dengan target dan pembelajaran yang ingin anda kuasai.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="bg-transparent testimonial-items">
                            <img class="rounded-circle mx-auto d-block" src="{{ asset('img/img-testi-default.jpg') }}" alt="">
                            <strong><h3>Andi</h3></strong>
                            <i><h6> — KASI ATR Kab. Semarang</h6></i>
                            <p class="text-left">Sangat bagus hasilnya. Saya meyakini jasa pemetaan ini dapat bersaing dengan jasa pemetaan lainnya. Waktu dan target sangat tepat dengan yang saya minta.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="bg-transparent testimonial-items">
                            <img class="rounded-circle mx-auto d-block" src="{{ asset('img/img-testi-2.jpg') }}" alt="">
                            <strong><h3>Dr. Okto Risdianto Manullang, S.T, M.T</h3></strong>
                            <i><h6> — Dosen Planologi Universitas Diponegoro</h6></i>
                            <p class="text-left">Masterpeta memiliki konsep dan ide yang sangat cemerlang, dimana start up ini mampu membantu kebutuhan berbagai macam pihak baik itu peneliti, dosen, mahasiswa, bahkan pemerintah. E-learning pada Masterpeta sangat menarik perhatian, karena seharusnya para pembelajar sekarang dituntut untuk dapat belajar dimana saja dan kapan saja</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="bg-transparent testimonial-items">
                            <img class="rounded-circle mx-auto d-block" src="{{ asset('img/img-testi-default.jpg') }}" alt="">
                            <strong><h3>Taufik Akbar</h3></strong>
                            <i><h6> — Mahasiswa S1 Planologi Undip</h6></i> 
                            <p class="text-left">Wah, salut deh sama Masterpeta. Waktu cobain protipe belajarnya asik banget, sewa jasa pemetaan juga on target, malah lebih cepat, hasilnya juga sesuai keinginan saya dan berkualitas.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselWithIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselWithIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                </div>
            </div>
        </div>
        <img class="tilted-separator" style="top:-2px;" src="{{asset('img/separator-img/sep-2.png')}}" alt="separator">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">

                </div>
            </div>
        </div>
    </div>
    @show
    @section('footer')
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
    @show
</body>
</html>