@extends('welcome')

@section('content')
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MasterPeta - E-Learning</title>

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
<div class="top-image">
    <img src="{{asset('img/img-jumbotron.jpg')}}" class="img-jumbotron" alt="Masterpeta">
    <div class="main-slogan"><p class="animated fadeInUp">Belajar Kapan Saja dan Dimana Saja</p></div>
    <div class="first-sub-slogan"><p class="animated fadeInUp">Cari Pelajaran yang anda inginkan, kami menyediakan berbagai macam materi dengan pelatih yang berkualitas.</p></div>
    <!-- <div ></div> -->
    <!-- <div class="second-sub-slogan"><p class="animated fadeInUp">Belajar pemetaan dengan cara asyik dan dimanapun. Tanyakan apapun yang anda bingung tentang pemetaan kepada Masterpeta. </p></div> -->
    <div class="arrow-slogan"><i class="fas fa-chevron-down animated infinite fadeOutDown"></i></div>
</div>
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
                            <img class="gambar-card" src="{{asset('img/img-e-learning.png')}}" alt="Card image cap">
                                <div >
                                    <h3>KATALOG</h3>
                                    <!-- <p >Pembelajaran dan pendampingan online terhadap software pemetaan dari pemula hingga lanjutan.</p> -->
                                </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 mb-2 services-first-row">
                            <img class="gambar-card" src="{{asset('img/img-e-learning-ud.png')}}" alt="Card image cap">
                                <div >
                                    <h3>KELAS SAYA</h3>
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
@endsection
