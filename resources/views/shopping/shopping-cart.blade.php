@extends('layout.app')

@push('scripts')
    <script type="text/javascript" src="{{ asset('slick/slick.min.js') }}"></script>
@endpush

@push('links')
    <!-- SLICK CSS - MAIN USAGE FOR CAROUSEL -->
    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css') }}"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="{{ asset('css/shopping/shopping_cart.css') }}" rel="stylesheet">
@endpush


@section('content')
    <div class="container shopping-cart-step-1">
        <h1>Nákupný košík</h1>
        <section class="shopping-cart">
            <header class="row d-none d-md-flex">
                <div class="col-6"></div>
                <div class="col-2">Cena</div>
                <div class="col-2">Množstvo</div>
                <div class="col-2">Odstrániť</div>
            </header>
            <hr>
            @foreach($products as $product)
                <div class="row product">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-6 order-sm-1 "><img src="{{ asset("storage/products-images/" . $product->options->image) }}" alt="shampón v košíku"></div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-4 order-sm-2"><div>{{ $product->name }}</div></div>
                    <div class="col-lg-2 col-md-2 col-sm-6 col-6 order-4 order-sm-4 order-md-3"><div>{{ $product->price }}</div></div>
                    <div class="col-lg-2 col-md-2 col-sm-6 col-6 order-5 order-sm-5 order-md-4"><div class="quantity"><a href="{{ url('add/' . $product->rowId . '/' . ($product->qty - 1)) }}"><i class="fa fa-minus-circle"></i></a><div class="actual-quantity">{{ $product->qty }}</div><a href="{{ url('add/' . $product->rowId . '/' . ($product->qty + 1)) }}"><i class="fa fa-plus-circle"></i></a></div></div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-2 order-3 order-sm-3 order-md-5"><div><a href="{{ url('remove/' . $product->rowId) }}"><i class="large material-icons close">close</i></a></div></div>
                </div>
            @endforeach
            <hr>
            <div class="row total">
                <div class="col-6 label">Suma spolu:</div>
                <div class="col-6 price-total">{{ \Gloudemans\Shoppingcart\Facades\Cart::subtotal() }} eur</div>
            </div>
        </section>
        <section class="row next-step">
            <div class="col-md-6 order-sm-2 order-2 order-md-1">
                <a class="back" href="#" role="button"><i class="large material-icons chevron-left">chevron_left</i>Pokračovať v nákupe</a>
            </div>
            <div class="col-md-6 order-sm-1 order-1 order-md-2 d-flex flex-center">
                <a class="btn btn-lg btn-secondary float-right next" href="{{ url('/order-first') }}" role="button">Prejsť na objednanie</a>
            </div>
        </section>
    </div>
@endsection