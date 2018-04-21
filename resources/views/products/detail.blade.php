@extends('layout.app')

@push('scripts')
    <script type="text/javascript" src="{{ asset('slick/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main-page.js') }}"></script>
@endpush

@push('links')
    <!-- SLICK CSS - MAIN USAGE FOR CAROUSEL -->
    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css') }}"/>

    <link href="{{ asset('css/products/detail.css') }}" rel="stylesheet">
@endpush


@section('content')
    <section class="container detail-whole">
        <div class="row">
            <div class="detail-image col-md-6 ool-sm-12">
                <img src="{{ asset('storage/products-images/'.$product->image) }}" alt="detailna fotka samponu">
            </div>
            <section class="detail-main-info col-md-6 d-flex flex-column justify-content-center">
                <h1>{{ $product->name }}</h1>
                <div class="price">{{ $product->price }} eur</div>
                {{--<form action="{{ route('add-to-cart') }}" method="POST">--}}
                    {{--@csrf--}}
                    {{--<input type="hidden" value="{{ $product->id }}" name="product-id">--}}
                    {{--<button type="submit" class="add-to-chart">Pridať do košíka</button>--}}
                {{--</form>--}}
                <a href="{{ url('add/' . $product->id) }}" class="add-to-chart"><span>Pridať do košíka</span></a>
            </section>
            <section class="detail-description col-12 order-3">
                <!-- List group -->
                <ul class="list-group" id="myList" role="tablist">
                    <li><a class="list-group-item list-group-item-action active" data-toggle="list" href="#home" role="tab">O produkte</a></li>
                    <li><a class="list-group-item list-group-item-action" data-toggle="list" href="#profile" role="tab">Zloženie</a></li>
                    <li><a class="list-group-item list-group-item-action" data-toggle="list" href="#messages" role="tab">Použitie</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="home" role="tabpanel">
                        <p>{{ $product->descr1 }}</p>
                    </div>
                    <div class="tab-pane" id="profile" role="tabpanel">
                        <p>{{ $product->descr2 }}</p>
                    </div>
                    <div class="tab-pane" id="messages" role="tabpanel">
                        <p>{{ $product->descr3 }}</p>
                    </div>
                </div>
            </section>
        </div>
    </section>


    <div class="widget-title">
        <fieldset class="box-title"><legend align="center">Budú sa Vám páčiť!<br></legend>
        </fieldset>
    </div>
    <section class="container recommended-products">
        <div class="multiple-items">
            <div><img src="{{ asset('obr/1.png') }}"></div>
            <div><img src="{{ asset('obr/1.png') }}"></div>
            <div><img src="{{ asset('obr/1.png') }}"></div>
            <div><img src="{{ asset('obr/1.png') }}"></div>
            <div><img src="{{ asset('obr/1.png') }}"></div>
            <div><img src="{{ asset('obr/1.png') }}"></div>
            <div><img src="{{ asset('obr/1.png') }}"></div>
            <div><img src="{{ asset('obr/1.png') }}"></div>
            <div><img src="{{ asset('obr/1.png') }}"></div>
            <div><img src="{{ asset('obr/1.png') }}"></div>
        </div>
    </section>

@endsection