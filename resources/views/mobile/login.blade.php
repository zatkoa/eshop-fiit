@extends('layout.app')

@push('links')

    <link rel="stylesheet" type="text/css" href="{{ asset('css/mobile/mobile-login-reg.css') }}"/>
@endpush

@section('content')
    <div class="login-reg-page login">
        <h1>Prihlásenie</h1>
        <form  class="login-reg-form" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Emailová adresa" required>
                <small  class="form-text text-muted">Neposkytneme tvoj email nikomu inému.</small>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Heslo" required>
            </div>
            <button type="submit" class="btn btn-lg btn-block">Prihlás sa</button>
            <div class="login-registration-label">
                <span>Nemáš účet?</span>
            </div>
            <a href="{{ asset('mobile/registration') }}" class="btn btn-lg btn-block">Registruj sa</a>
        </form>
    </div>
@endsection