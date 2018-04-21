<!doctype html>
<html lang="sk">
<head>
    @include('layout.partials.head')
</head>

<body>
    @include('layout.partials.header-up')

    @include('layout.partials.nav-up')

    @include('layout.partials.main-chat')
    @include('layout.partials.main-login')
    @include('layout.partials.main-registration')

    <main>
        @yield('content')
        @include('layout.partials.overlay')
    </main>

    @include('layout.partials.footer')

    <!-- JavaScript -->
    @include('layout.partials.footer-scripts')
</body>

</html>