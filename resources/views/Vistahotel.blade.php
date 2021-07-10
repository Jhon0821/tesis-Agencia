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
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    
    @if(session('mensaje')){
      <div class="alert alert-sucess">
        {{session('mensaje')}}
      </div>
      @endif
    
    
 <form action="{{(route('Vistahotel.show', $data->nombre))}}" method="POST" id="form">
  @csrf
  <div>
    <h3>{{$data->nombre}}</h3>
  </div>
    
  <div class="alert hide">
    <span class="fas fa-check"></span>
    <span class="msg">Success:Tu reserva fue creada con exito..! </span>
    <span class="close-btn">
      <span class="fas fa-times"></span>
    </span>
  </div>

   <table style="width: 100%" class="table table-striped" >
         <tr>
           <th>
             Tipo de habitacion

           </th>
           <th>
             Capacidad

           </th>
          
          
         </tr>
       <tr>
         <td>
         <p><i class="fas fa-bed"> Habitación Sencilla Económica con aire acondicionado</i> 
        
         <i class="fas fa-tv"> en la  habitaciónTV de pantalla plana</i> <i class="fas fa-wifi"> WiFi gratis</i><br>
         <i class="fas fa-concierge-bell">Servicio al cuarto</i></p>
         </td>
         <td><i class="fas fa-user usuario"></i></td>
        
         <td><a href="#"  class="fas fa-clipboard-list btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" > Reservare</a></td>
       </tr>
   </table>
 <a href="{{url('listar')}}" class="btn btn-success">Mis Reservas</a>
 </form>


     <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" data-target="staticBackdrop">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdrop">Datos de Reserva</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
        <form action="{{route('principal.reservacion')}} " method="POST" class="form" id="form">
          @csrf

          
         
        <div class="form-gorup col-ms-3">
            <label for="primer_nombre">Nombres (*)</label>
            <input type="text" id="primer_nombre" class="form-control" name="primer_nombre" placeholder="Primer Nombre">
        </div>
        
        <div class="form-gorup col-ms-3">
            <label for="segundo_apellido">Apellidos (*)</label>
            <input type="text" name="segundo_apellido" class="form-control" placeholder="Segundo Apellido">
        </div>
        <div class="form-gorup col-ms-3"> 
            <label for="direccion">direccion</label>
            <input type="text" name="direccion" class="form-control" placeholder="Direccion">
        </div>
        <div class="form-gorup col-ms-3">
            <label for="telefono">Telefono</label>
            <input type="tel" name="telefono" class="form-control" placeholder="Telefono">
        </div>
      
      
            <div class="form-gorup col-ms-3">
                <label for="ida">Ida</label>
                <input type="date" name="ida" class="form-control" id="ida" >
            </div>
            <div class="form-gorup col-ms-3">
                <label for="vuelta">Vuelta</label>
                <input type="date" class="form-control" name="vuelta" >
            </div>
            <div class="form-gorup col-ms-3">
                <label for="num_personas">Numero de personas</label>
                <select name="num_personas" id="num_personas">
                  <option value="">Seleccionar</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
               
            </div>
            <div>
            <div class="form-gorup col-ms-3">
                <label for="tipo_habitacion">Habitacion</label>
               <select name="tipo_habitacion" id="tipo_habitacion" class="form-control">
                   <option value="">Escoja un opcion</option>
                   <option value="doble">Doble</option>
                   <option value="sencilla">Sencilla</option>
                   <option value="suite">Suite</option>
                  <option value="matrimonial">Matrimonial</option>
               </select>
            </div>
           </div>
           <div> 
             <label for="">Precios</label>
           <select name="precio" id="precio">
             <option value="">Elija una opcion</option>
             <option value="30000">30.000 CLP/noche</option>
             <option value="45000">45.000 CLP/noche</option>
             <option value="65000">65.000 CLP/noche</option>
             <option value="130000">130.000 CLP/noche</option>
           </select>
          </div>
        
          </div>
          <div class="modal-footer">
            <button type="reset" class="btn btn-danger">Limpiar</button>
            <button type="submit" name="btnreserva" id="btnreserva" class="btn btn-primary" data-dismiss="toast" onclick="alerta();">Ingresar Reserva</button>
          </div>
         

        </form>
        </div>
      </div>
    </div>
     
 <script>
 function alerta(){
   alert("Tu reserva Fue creada con Exito..!");
 }
 </script>
       
    </body>
</html>
