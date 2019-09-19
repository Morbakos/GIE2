<!doctype html>
<html lang="en" dir="ltr">
    <head>
        @include('layout.partials.head')
    </head>

    <body>
        @include('layout.partials.nav')
        @yield('content')
        @include('layout.partials.footer')
        @include('layout.partials.scripts')
    </body>
</html>