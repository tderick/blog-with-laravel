<!DOCTYPE html>
<html lang="en">
    <head>
        @include('includes.frontend.head')
        @yield('stylesheets')
        {{-- @yield('resources.css.style') --}}
    </head>
<body>
    @include('includes.frontend.header')
    @yield('titleSection')
    <div class="main-wrapper">
        @yield('content')
        @include('includes.frontend.footer')
    </div>
</body>
</html>
