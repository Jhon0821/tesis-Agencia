
 @php
      require  base_path('/vendor/autoload.php') ;
// Agrega credenciales
       MercadoPago\SDK::setAccessToken(config('services.mercadopago.token'));

          $preference = new MercadoPago\Preference();

      // Crea un ítem en la preferencia

      foreach ($data as $reserva) {

        $item = new MercadoPago\Item();
         $item->title = $reserva->primer_nombre;
         $item->quantity = 1;
          $item->unit_price = $reserva->precio;

         $preference->items = array($item);
        $preference->save();
       
      }
        
     
   
      @endphp
 
 
 
 <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
      <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
      <title>Document</title>
  </head>
  <body>
 
  

      <div class="container col-md-8 col-md-offset-2">
          <div class="panel panel-default">
              <div class="panel-heading">

                  <h2>Reserva</h2>
                  <button class="btn btn-success btn_reserva" data-bs-toggle="modal" data-bs-target="#static" > Nueva Reserva</button>
                  <br>
              </div>
                  <table class="table">
                      <thead>
                          <tr>

                            <th>Nombres</th>
                              <th>Apellidos</th>
                              <th>Personas</th>
                              <th>Habitacion</th>
                              <th>Direccion</th>
                              <th>Telefono</th>
                              <th>Ida</th>
                              <th>Vuelta</th>
                            <th>Precio</th>
                              <th>Accion</th>  
                          </tr>
                      </thead>
                      <tbody>
                        @foreach($data as $item)
                        <tr>
                          
                            <td>{{$item->primer_nombre}}</td>
                            <td>{{$item->segundo_apelldo}}</td> 
                            <td>{{$item->num_personas}}</td> 
                            <td>{{$item->tipo_habitacion}}</td>  
                            <td>{{$item->direccion}}</td> 
                            <td>{{$item->telefono}}</td>           
                            <td>{{$item->fecha_salida}}</td> 
                            <td>{{$item->fecha_ingreso}}</td> 
                            <td><button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#pagar">
                              ${{$item->precio}} CLP
                              </button></td>
                           
                          <td>
                            <form action="{{route('usuario.destroy',$item->fecha_ingreso)}}" method="POST"> 
                               
                                    
                                </a class="fas fa-trash">
        
                                <a href="{{ route('usuario.destroy',$item->fecha_ingreso) }}" class="fas fa-trash text-danger">
                          
                             
                                </td>
                             
                               
                                </a>
                                @csrf
                           
                                <button type="submit" title="delete" style="border: none; background-color:transparent;">
                                </button>
                            
                            </form>
                  
                        </tr>
                    @endforeach
                      </tbody>
                  </table>
                  <a href="principal" class="btn btn-primary" class="btn btn-primary" >Volver</a>
                  
          </div>
      </div>

      <div class="modal fade" id="pagar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Precios</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
             <div>
                 <label for="precio"></label>
                 <p>1 Cama sencilla x $30.000 CLP/noche</p>
                 <p>1 Cama Doble x $45.000  CLP/noche</p>
                 <p>1 Cama Matrimonial x $65.000  CLP/noche</p>
                 <p>1 suite x $130.000  CLP/noche</p>
             </div>
            </div>
            <div class="modal-footer">
             
            <div class="cho-container">

            </div>
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="pagar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Pagar</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Pagar
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>


      <script src="https://sdk.mercadopago.com/js/v2"></script>
      <script src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js"></script>


      <script>
        // Agrega credenciales de SDK
          const mp = new MercadoPago("{{config('services.mercadopago.key')}}", {
                locale: 'es-AR'
          });
        
          // Inicializa el checkout
          mp.checkout({
              preference: {
                  id: '{{$preference->id}}'
              },
              render: {
                    container: '.cho-container', // Indica dónde se mostrará el botón de pago
                    label: 'Pagar', // Cambia el texto del botón de pago (opcional)
              }
        });
        </script>
      </form>

      <div class="modal fade" id="static" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" data-target="staticBackdrop">
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

<script>
  function alerta(){
    alert("Reserva Fue creada con exito..!");
  }
</script>

  </body>
  </html>
     

 


  