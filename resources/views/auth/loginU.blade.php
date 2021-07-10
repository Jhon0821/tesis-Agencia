@extends('layouts.app')
@yield('content')
  @section('content')
      <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Iniciar sesion</h3>
                    </div>
                    <div class="panel-body">
                        <form action="{{route('principal.login')}}" method="POST">
                            @csrf
                            <div class="form-group ">
                                <label for="email">Email</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror"name="email" value="{{ old('email') }}" placeholder="Email ">
                                
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            
                            </div>
                            <div class="form-group ">
                                <label for="password">Contraseña</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" name="password" id="password" placeholder="Contraseña">
                               @error('password')
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                           @enderror
                            
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Iniciar Sesion</button>
                            <a href="formulario">Registrarse</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
      </div>
  @endsection