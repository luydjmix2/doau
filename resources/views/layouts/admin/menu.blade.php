<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light"> <a class="navbar-brand" href="#">Doau</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent1">
        <ul class="navbar-nav mr-auto">
            <!-- <li class="nav-item active"> <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> </li> -->
            <!-- <li class="nav-item"> <a class="nav-link" href="#">Link</a> </li> -->
            <li class="nav-item dropdown">
                @guest
            <li class="nav-item btn-group">
                <!-- <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a> -->
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Inicio sesion </a>
                <div class="dropdown-menu width-login" aria-labelledby="navbarDropdown2">
                    <form class="px-4 py-3" action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleDropdownFormEmail1">Email address</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="email@example.com">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleDropdownFormPassword1">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="remember" id="remember">
                                <label class="form-check-label" for="dropdownCheck">
                                    Remember me
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Iniciar sesion</button>
                    </form>
                    <div class="dropdown-divider"></div>
                    @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif
                </div>
            </li>
            @else

            
            @empty(!$user->perfil)
            @switch($user->perfil)
            @case(1)
            <li class="nav-item">
                <a class="navbar-brand">{{ 'Hola '.$user->name }}</a>
            </li>
            @break

            @case(2)
            <li class="nav-item">
                <a class="nav-link" href="{{ route('productos') }}">Productos</a>
            </li>
            @break

            @case(3)
            <li class="nav-item">
                <a class="nav-link" href="#">Domiciliarios</a>
            </li>
            @break

            @case(4)
            <li class="nav-item">
                <a class="navbar-brand">{{ 'Hola '.$user->name }}</a>
            </li>
            @break

            @endswitch
            @endempty
            <li class="btn-group">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false"> Sesion </a>
                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown1">
                    <a class="dropdown-item" href="{{ route('home') }}">Admin</a>
                    <a class="dropdown-item" href="#">Perfil</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesion</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
            @endguest
            <!-- <li class="nav-item"> <a class="nav-link disabled" href="#">Disabled</a> </li> -->
        </ul>
        <!-- <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> -->
    </div>
</nav>