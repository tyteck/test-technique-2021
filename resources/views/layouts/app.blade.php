<!DOCTYPE html>
<html lang="en">

@include('partials.head')

<body class="antialiased bg-gray-900" style="font-family: 'Roboto', sans-serif;">

    @include ('partials.flash')

    @yield('content')

    @include ('partials.footer')

</body>
</html>
