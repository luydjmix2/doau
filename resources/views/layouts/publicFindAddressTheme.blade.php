<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="/img/iconDoau.ico">
    <title>@yield('title')</title>
    @include('layouts.public.headLink')
</head>

<body>
    @include('layouts.public.headerFindAddress')
    <main>
        <div class="container">
            <div class="container-fluid">
                @yield('content')
                <hr class="featurette-divider">
            </div>
        </div>
    </main>
    @include('layouts.public.footer')
</body>

</html>