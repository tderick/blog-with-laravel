<!DOCTYPE html>

<html lang="en">

<head>
    @include('includes.admin.head')
    @yield('stylesheets')
</head>

<body>
    @include('includes.admin.sidebar')
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
        @include('includes.admin.header')

        <div class="body flex-grow-1 px-3">
            <div class="container-lg">
                @yield('content')
            </div>
        </div>
        <footer class="footer">
            <div><a href="https://coreui.io">CoreUI </a><a href="https://coreui.io">Bootstrap Admin Template</a> © 2022
                creativeLabs.</div>
            <div class="ms-auto">Powered by&nbsp;<a href="https://coreui.io/docs/">CoreUI UI Components</a></div>
        </footer>
    </div>
    @include('includes.admin.footer')
    @yield('scripts')
</body>

</html>
