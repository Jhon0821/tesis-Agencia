<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link  rel = "stylesheet"  href = "//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" >
    <link  rel = "stylesheet"  href = "//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" >
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">   
    
    @if(session('mensaje')){
      <div class="alert alert-sucess">
        {{session('mensaje')}}
      </div>
      @endif
    
    
 <form action="{{(route('formulario.store'))}}" method="POST" id="formulario">
  @csrf
  <div>
    <h3>Inicia sesion o crea una cuenta</h3>
  </div>
  <div class="form-group col-sm-3">
    <label for="username">Ingrese su Nombre</label>
    <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="Nombre de Usuario">
    @error('username')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
  </div>
<div class="form-group col-sm-3">
  <label for="txtemail">Email</label>
  <input type="email" class="form-control @error('txtemail') is-invalid @enderror"  name="txtemail" id="txtemail" placeholder="example@gmail.com">
  @error('txtemail')
  <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
  </span>
@enderror
</div>
<div class="form-group col-sm-3">
  <label for="contraseña">Contraseña</label>
  <input type="password" class="form-control @error('txtemail') is-invalid @enderror" name="contraseña" id="contraseña" placeholder="Contraseña">
  @error('contraseña')
  <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
  </span>
@enderror


</div>
 
  <input type="hidden" name="tipo" value="usuario">
</div>
<div id="centrar">
  <input type="submit" value="Registrarse" class="btn btn-primary">
  <button class="btn btn-primary"><a href="loginU">Iniciar sesion</button></a>
</div>

 </form>
        
       
    </body>
</html>
