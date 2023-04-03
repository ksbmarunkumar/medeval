<!DOCTYPE html>

<html lang="en">

<head>

    @yield('title')

    @include('front-layout.head')

</head>

<body data-new-gr-c-s-check-loaded="14.1102.0" data-gr-ext-installed="">

    <div class="wrapper d-flex align-items-stretch">

        {{-- @include('front-layout.navigation'); --}}

        @include('front-layout.navigation-with-submenu')

        <div id="content" class="p-4 p-md-5 pt-5">
            @yield('main-section')

            <div id="app"></div>
        </div>
    </div>

    @viteReactRefresh
    @vite('resources/js/app.jsx')

    @include('front-layout.footer')
    @stack('scripts')

</body>

{{-- <grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration> --}}

</html>
