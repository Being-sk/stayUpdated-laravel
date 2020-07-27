<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    @yield('font')

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="css/stylehome.css" rel="stylesheet">
</head>

<body>
    @include('includes.header')
    @yield('home_img')
    <main class="container pt-3">
        <div class="row">
            <div class="col-md-4">
                <h1>Lorem Ipsum </h1>
                <h4>has been the industry's</h4>
                <h5>Lorem Ipsum has been the industry's</h5>
            </div>
        </div>
        <div class="row pt-3">

            <div class="col-md-6">
                <div class="row">
                    <div id="box-1">
                        <p>Lorem Ipsum has been the industry's
                            standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of
                            type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
                <div class="row"></div>
            </div>
            <div class="col-md-6">
                <div class="row"></div>
                <div class="row"></div>
            </div>

            {{-- <div class="col-md-4">
                <h1>Lorem Ipsum </h1>
                <h4>has been the industry's</h4>
                <h5>Lorem Ipsum has been the industry's</h5>
            </div>
        </div>
        <div class="row pb-5">
            <div class="col-md-6">
                <div id="box-1">
                    <p>Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of
                        type and scrambled it to make a type specimen book.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div id="box-2">
                    <p>Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of
                        type and scrambled it to make a type specimen book.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div id="box-3">
                    <p>Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of
                        type and scrambled it to make a type specimen book.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div id="box-4">
                    <p>Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of
                        type and scrambled it to make a type specimen book.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div id="box-5">
                    <p>Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of
                        type and scrambled it to make a type specimen book.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div id="box-6">
                    <p>Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of
                        type and scrambled it to make a type specimen book.</p>
                </div>
            </div> --}}
        </div>
    </main>

    @yield('footer')
</body>

</html>