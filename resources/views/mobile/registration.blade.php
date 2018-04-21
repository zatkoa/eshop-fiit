@extends('layout.app')

@push('links')

    <link rel="stylesheet" type="text/css" href="{{ asset('css/mobile/mobile-login-reg.css') }}"/>
@endpush

@section('content')
    <div class="login-reg-page registration">
        <h1>Registrácia</h1>
        <form class="login-reg-form" method="POST" action="{{ route('register') }}">
            @csrf
            <section class="row">
                <div class="col-sm-12 col-md-6">
                    <input type="text"  name="name" placeholder="Meno*" class="form-control" required>
                    <div class="input-text">
                        <span>Meno*</span>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <input type="text"  name="surname" class="form-control" placeholder="Priezvisko*" required>
                </div>
                <div class="col-sm-12 col-md-6">
                    <input type="tel"  name="tel_num" class="form-control" placeholder="Telefónne číslo">
                </div>
                <div class="col-sm-12 col-md-6">
                    <input type="email"  name="email" class="form-control" placeholder="Emailová adresa*" required>
                </div>
            </section>

            <section class="row">
                <div class="col-sm-12 col-md-6">
                    <input type="text" name="city" class="form-control" placeholder="Mesto*" required>
                </div>
                <div class="col-sm-12 col-md-6">
                    <input type="number"  name="zip" class="form-control" placeholder="PSČ*" required>
                </div>
                <div class="col-sm-12 col-md-6">
                    <input type="text" name="street" class="form-control" placeholder="Ulica*" required>
                </div>
                <div class="col-sm-12 col-md-6">
                    <input type="number" name="street_num" class="form-control" placeholder="Číslo*" required>
                </div>
                <div class="col-sm-12 col-md-6">
                    <label for="state-mobile">Krajina*</label>
                    <select class="form-control" name="state" id="state-mobile" required>
                        <option selected>Slovensko</option>
                        <option>Česko</option>
                        <option>Nemecko</option>
                    </select>
                </div>
                <div class="col-sm-12 col-md-6">
                    Povinné údaje sú označené hviezdičkou*
                </div>
            </section>
            <section class="row">

                <div class="col-sm-12 col-md-6">
                    <input type="password" class="form-control" placeholder="Heslo" name="password" required>
                </div>
                <div class="col-sm-12 col-md-6">
                    <input type="password" class="form-control"  placeholder="Potvrdenie hesla" name="password_confirmation" required>
                </div>

                <div class="custom-control custom-checkbox col-11 checkbox ">
                    <input class="custom-control-input" type="checkbox" id="accept-conditions-reg-mobile" name="accept_conditions">
                    <label class="custom-control-label" for="accept-conditions-reg-mobile">
                        Súhlasím s obchodnými podmienkami a s podmienkami o ochrane súkromia*
                    </label>
                </div>
            </section>

            <section>
                <button type="submit" class="btn btn-lg btn-block">Pridaj sa k saUmy</button>
                <div class="login-registration-label">
                    <span>Nemáš účet?</span>
                </div>
                <a href="{{ asset("mobile/login") }}" class="btn btn-lg btn-block">Prihlás sa</a>
            </section>
        </form>
@endsection