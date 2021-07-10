<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">                <!-- Font Awesome -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="css/datepicker.css"/>
    <link rel="stylesheet" href="css/tooplate-style.css">     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">




    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous"> 
<link rel="stylesheet" href="{{asset('css\styles.css')}}">
<link rel="stylesheet" href="{{asset('css\estilos.css')}}">
<link rel="stylesheet" href="{{asset('js/jquery-ui.min.css')}}">


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.8.0/main.css">
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.8.0/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.8.0/locales-all.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.8.0/main.min.js"></script>


<title>Document</title>
</head>
<body>

  
  @if (session('status'))

  {{session('status')}}
      
  @endif
 
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">SkyHotel</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link fas fa-eye" aria-current="page" href="listar"> Mis Reservas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fas fa-sign-out-alt cerrar" href="loginU">Cerrar Sesion</a>
              </li>
            
             
          </div>
        </div>
      </nav>

          
         
  
       <div class="tm-section tm-bg-img" id="tm-section-1">
        <div class="tm-bg-white ie-container-width-fix-2">
            <div class="container ie-h-align-center-fix">
                <div class="row">
                    <div class="col-xs-12 ml-auto mr-auto ie-container-width-fix">
                        <form action="{{route('principal.index')}}" method="get" class="tm-search-form tm-section-pad-2">
                          @csrf
                            <div class="form-row tm-search-form-row">
                                <div class="form-group tm-form-element tm-form-element-100">
                                    <i class="fa fa-map-marker fa-2x tm-form-element-icon"></i>
                                    <input  type="text" class="form-control" name="search" id="search" value=" {{ $texto ?? '' }}" placeholder="A donde vas?">
                                   <button class="btn btn-primary">Buscar</button>
                                </div>
                                
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Direccion</th>
                                            <th>Pais</th>
                                            <th>Telefono</th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($datos as $item)
                                      <tr>
                                        
                                                             
                                          <td>{{$item->nombre}}</td> 
                                          <td>{{$item->direccion}}</td> 
                                          <td>{{$item->ciudad}}</td> 
                                          <td>{{$item->telefono}}</td>
                                        <td>
                                         
                                 <td><a href="{{route('Vistahotel.show', $item->nombre)}}" class="btn btn-primary">Seleccionar</a></td>
                                      </tr>
                                  @endforeach
                                    </tbody>
                                </table>
                           
                         </form>
                        </div>
                    </div>
                     

   
</body>
</html>
