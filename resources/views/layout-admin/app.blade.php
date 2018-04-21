<!doctype html>
<html lang="sk">
<head>
    @include('layout-admin.partials.head')
</head>

<body>
@include('layout-admin.partials.header')

@include('layout-admin.partials.nav')

<main>
    @yield('content')
    @include('layout-admin.partials.overlay')
</main>

<!-- JavaScript -->
@include('layout-admin.partials.footer-scripts')
</body>

</html>