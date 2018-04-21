
@extends('layout.app')

@push('scripts')
    <script type="text/javascript" src="{{ asset('slick/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main-page.js') }}"></script>
@endpush

@push('links')
    <!-- SLICK CSS - MAIN USAGE FOR CAROUSEL -->
    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css') }}"/>
@endpush

@section('content')
    <!--Carousel-->
    <section>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="#" class="btn carousel-shop-now">Do eshopu</a>
                    <img class="d-block w-100"  srcset="{{ asset('obr/soaps-2958985_1920.jpg') }} 640w,
                                                                {{ asset('obr/soaps-2958985_1280.jpg') }} 1280w,
                                                                {{ asset('obr/soaps-2958985_1920.jpg') }} 1920w"
                         sizes="(max-width: 640px) 640px,
                                                                (max-width: 1280px) 1280px,
                                                                 1920px"
                         src="{{ asset('obr/soaps-2958985_1920.jpg') }}" alt="Obrazok mydiel poukladaných v rade">

                </div>
                <div class="carousel-item">
                    <a href="#" class="btn carousel-shop-now">Do eshopu</a>
                    <img class="d-block w-100" src="{{ asset('obr/vlasy.jpeg') }}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <a href="#" class="btn carousel-shop-now">Do eshopu</a>
                    <img class="d-block w-100"  srcset="{{ asset('obr/soaps-2958985_640.jpg') }} 640w,
                                                                {{ asset('obr/soaps-2958985_1280.jpg') }} 1280w,
                                                                {{ asset('obr/soaps-2958985_1920.jpg') }} 1920w"
                         sizes="(max-width: 640px) 640px,
                                                                (max-width: 1280px) 1280px,
                                                                 1920px"
                         src="{{ asset('obr/soaps-2958985_1920.jpg') }}" alt="Obrazok mydiel poukladaných v rade">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <section class="container category-images">
        <div class="row">
            <div class="col-md-4" >
                <div class="flex">
                    <img src="{{ asset('obr/vlasy.jpeg') }}" class="order-2-md-saumy">
                    <div class="main-caption flex flex-center order-1-md-saumy">
                        <span>100% prírodné</span>
                        <p>Naše výrobky sú 100% prírodné, preto môžeš nakupovať bez obáv.</p>
                    </div>
                </div>
            </div>
            <div class="col d-none d-sm-none d-md-block">
                <img src="{{ asset('obr/plet.jpeg') }}">
            </div>
            <div class="col-md-4">
                <div class="flex flex-end">
                    <div class="main-caption flex flex-center">
                        <span>100% prírodné</span>
                        <p>Naše výrobky sú 100% prírodné, preto môžeš nakupovať bez obáv.</p>
                    </div>
                    <div>
                        <img src="{{ asset('obr/telo.jpeg') }}">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="widget-title">
        <fieldset class="box-title"><legend align="center">Umy sa skvelými mydlami!<br></legend>
        </fieldset>
    </div>

    <section class="container main-products">
        <div class="row align-items-center">
            <div class="col-12 col-sm-6 align-self-center">
                <p>Tento krém je taký prospešný pre tvoju pleť, že sa z toho zblázniš! Vermi, na suchú pokožku brutálny!</p>
            </div>
            <div class="col-12 col-sm-6">
                <img src="{{ asset('obr/car2.jpeg') }}">
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-sm-6 order-2 order-sm-1">
                <img class="d-block w-100" src=" {{ asset("/obr/cream.jpg") }}" alt="obrazok kremu">
            </div>
            <div class="col-sm-6 align-self-center order-1 order-sm-2">
                <p>Tento je ešte brutálnejší! </p>
            </div>
        </div>
    </section>

    <div class="widget-title">
        <fieldset class="box-title"><legend align="center">Budú sa Vám páčiť!<br></legend>
        </fieldset>
    </div>

    <section class="container recommended-products">
        <div class="multiple-items">
            <div><img src="./obr/1.png"></div>
            <div><img src="./obr/1.png"></div>
            <div><img src="./obr/1.png"></div>
            <div><img src="./obr/1.png"></div>
            <div><img src="./obr/1.png"></div>
            <div><img src="./obr/1.png"></div>
            <div><img src="./obr/1.png"></div>
            <div><img src="./obr/1.png"></div>
            <div><img src="./obr/1.png"></div>
            <div><img src="./obr/1.png"></div>
        </div>
    </section>
@endsection