@extends('layout.app')

@push('scripts')
    <script type="text/javascript" src="{{ asset('slick/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/order-first.js') }}"></script>
@endpush

@push('links')
    <!-- SLICK CSS - MAIN USAGE FOR CAROUSEL -->
    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css') }}"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="{{ asset('css/shopping/order-first.css') }}" rel="stylesheet">
    <link href="{{ asset('css/shopping/order-scelet.css') }}" rel="stylesheet">
@endpush


@section('content')
    <section class="container order-first-step">
        <form>
            <section class="row">
                <section class="col-sm-12 col-md-6 payment-type">
                    <h1>Typ platby</h1>
                    <hr>
                        <fieldset class="radio-buttons">
                            @foreach($payments as $payment)
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="payment{{ $payment->id }}" name="payment" value="{{ $payment->id }}"  data-price="{{ $payment->price }}" class="custom-control-input">
                                    <label class="custom-control-label" for="payment{{ $payment->id }}">{{ $payment->type  . ' ' . (($payment->price == 0) ? 'ZADARMO' : $payment->price . ' eur') }}</label>
                                </div>
                            @endforeach
                        </fieldset>
                </section>
                <section class="col-sm-12 col-md-6 delivery-type">
                    <h1>Spôsob dopravy</h1>
                    <hr>
                    <fieldset class="radio-buttons">
                        @foreach($deliveries as $delivery)
                            <div class="custom-control custom-radio">
                                <input type="radio" id="delivery{{ $delivery->id }}" name="delivery" value="{{ $delivery->id }}" data-price="{{ $delivery->price }}" class="custom-control-input">
                                <label class="custom-control-label" for="delivery{{ $delivery->id }}">{{ $delivery->type .  ' ' . (($delivery->price == 0) ? 'ZADARMO' : $delivery->price . ' eur') }}</label>

                            </div>
                        @endforeach
                    </fieldset>
                </section>
            </section>
            <hr>
            <section class="row summary">
                <section class="col titles">
                    <span class="title-delivery">Doprava:</span>
                    <span class="title-payment">Cena:</span>
                    <span class="title-total">Spolu:</span>
                </section>
                <section class="col prices">
                    <span class="price-delivery" data-price="0">0.00 eur</span>
                    <span class="price-payment" data-price="0">0.00 eur</span>
                    <span class="price-total" data-price="{{ \Gloudemans\Shoppingcart\Facades\Cart::subtotal() }}" >{{ \Gloudemans\Shoppingcart\Facades\Cart::subtotal() }} eur</span>
                </section>
            </section>
            <section class="row next-step">
                <div class="col-md-6 order-sm-2 order-2 order-md-1">
                    <a class="back" href="#" role="button">Späť do košíka</a>
                </div>
                <div class="col-md-6 order-sm-1 order-1 order-md-2 d-flex flex-center">
                    <a class="btn btn-lg btn-secondary float-right next" href="#" role="button">Pokračovať</a>
                </div>
            </section>
        </form>
    </section>
@endsection