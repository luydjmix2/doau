<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="/img/iconDoau.ico">
    <title>@yield('title')</title>
    @php
    $user = Auth::user();
    @endphp
    @empty(!$user->perfil)
    @switch($user->perfil)
    @case(1)
    @include('layouts.admin.headLink')
    @break

    @case(2)
    @include('layouts.admin.headLink')
    @break

    @case(3)
    @include('layouts.admin.headLink')
    @break

    @case(4)
    @include('layouts.admin.headLink')
    @break
    @endswitch
    @endempty
</head>

<body>
    @empty(!$user->perfil)
    @switch($user->perfil)
    @case(1)
    @include('layouts.admin.header')
    @break

    @case(2)
    @include('layouts.admin.header')
    
    @break

    @case(3)
    @include('layouts.admin.header')
    @break

    @case(4)
    @include('layouts.admin.header')
    @break
    @endswitch
    @endempty
    <main>
        <div class="container">
            <div class="container-fluid">
                @yield('content')
                <hr class="featurette-divider">
            </div>
        </div>
    </main>
    @empty(!$user->perfil)
    @switch($user->perfil)
    @case(1)
    @include('layouts.admin.footer')
    @break

    @case(2)
    @include('layouts.admin.footer')
    @break

    @case(3)
    @include('layouts.admin.footer')
    @break

    @case(4)
    @include('layouts.admin.footer')
    @break
    @endswitch
    @endempty
</body>

</html>