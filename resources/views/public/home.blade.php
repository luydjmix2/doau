@extends('layouts.publicFindAddressTheme')

@section('title', 'DoAu')

@section('content')
<div class="row">
  <div class="col-sm">
    <div class="card registerHome">
    @guest
      <div class="card-title">
        <div class="text-center">
          <a href="#" class="btn btn-light btn-icon mr-4">
            <span class="btn-inner--icon"><img src="https://raw.githack.com/creativetimofficial/argon-dashboard/master/assets/img/icons/common/github.svg"></span>
            <span class="btn-inner--text">Github</span>
          </a>
          <a href="#" class="btn btn-light btn-icon">
            <span class="btn-inner--icon"><img src="https://raw.githack.com/creativetimofficial/argon-dashboard/master/assets/img/icons/common/google.svg"></span>
            <span class="btn-inner--text">Google</span>
          </a>
        </div>
      </div>
      <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif
        @if (isset($respCU))
        @php
        $firstKey = array_key_first($respCU);
        @endphp
        <div class="alert alert-{{ $firstKey }} alert-dismissible fade show" role="alert">
          {{$respCU[$firstKey]}}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif
        <form role="form" name="createUser" action="{{ route('register') }}" method="POST">
          @csrf
          <div class="form-group">
            <div class="input-group input-group-alternative mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user-cog"></i></span>
              </div>
              <select class="form-control" name="user_perfil" id="user_perfil">
                <option value="1" selected>Usuario</option>
                <option value="2">Comercio</option>
                <option value="3">Empresa de domicilios</option>
                <option value="4">Domiciliario</option>

              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group input-group-alternative mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user-astronaut"></i></span>
              </div>
              <input class="form-control" name="name" value="{{ old('name') }}" id="name" placeholder="Name" type="text">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group input-group-alternative mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
              </div>
              <input class="form-control" name="email" value="{{ old('email') }}" id="email" placeholder="Email" type="email">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
              </div>
              <input class="form-control" name="password" value="{{ old('password') }}" id="password" placeholder="Password" type="password">
              <input class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" id="password-confirm" placeholder="Password confirmed" type="password">
            </div>
          </div>
          <!-- <div class="text-muted font-italic"><small>password strength: <span class="text-success font-weight-700">strong</span></small></div> -->
          <div class="row my-1">
            <div class="col-12">
              <div class="custom-control custom-control-alternative custom-checkbox">
                <input class="custom-control-input" name="autorizacion_de_manejo_de_datos" id="autorizacion_de_manejo_de_datos" value="Si_autorizo" type="checkbox">
                <label class="custom-control-label" for="autorizacion_de_manejo_de_datos">
                  <span class="text-muted text-color-white">I agree with the <a href="#!">Privacy Policy</a></span>
                </label>
              </div>
            </div>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary mt-4">Create account</button>
          </div>
        </form>
      </div>
      @else
      @endguest
    </div>
  </div>
  <div class="col-sm">
    <img src="/img/bg02.jpg" class="rounded float-right img-w1-3" alt="compartir">
  </div>
</div>
@endsection