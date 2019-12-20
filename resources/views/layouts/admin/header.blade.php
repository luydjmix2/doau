<header class="header" id="header">
    @empty(!$user->name_one)
    @include('layouts.admin.menu')
    @include('layouts.admin.headerConten')
    @else
    <ul class="nav justify-content-center nav-complitPerfil">
        <li class="nav-item">
            <a class="navbar-brand">llena los siquientes datos, para poder servite mejor.</a>
        </li>
    </ul>
    @endempty
</header>