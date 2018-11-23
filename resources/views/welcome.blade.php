<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>Sistema de ventas</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap4/css/bootstrap.min.css') }}" >
      
        <!-- Styles hola -->
        
    </head>
    <body>
       <div class="container">
           <div class="jumbotron">
              <h1 class="display-4 text-center">Proyecto Sistema de Ventas </h1>
              <hr class="my-4">
              <h3 class="text-center">Bases de Datos I</h3>
                <div class="text-center">
                    <img src="{{ asset('imagenes/logo.png') }}"  alt="">
                </div>
           </div>
       </div>

       <div class="container">
  <div class="card">
    <div class="card-header"><ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Capturar Proovedores</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Capturar Clientes</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Capturar Producto</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="consulta-tab" data-toggle="tab" href="#consulta" role="tab" aria-controls="consulta" aria-selected="false">Consultas</a>
  </li>

</ul></div>

    <div class="card-body">
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
          <form>
      <div class="row">
      
       <div class="col-12">
            <h4 class="mb-3">Ingresar proveedor : </h4>
       </div>
     
           
                <div class="col-sm-12 col-md-4 mb-3">

                <label><strong>Nombre:</strong></label>

                <input type="text" name="nombre" class="form-control" placeholder="Nombre" required="">

            </div>


            <div class="col-sm-12 col-md-4 mb-3">

                <label><strong>Apellido Paterno:</strong></label>

                <input type="text" name="apellidop" class="form-control" placeholder="Apellido Paterno" required="">

            </div>

            <div class="col-sm-12 col-md-4 mb-3">

                <label><strong>Apellido Materno:</strong></label>

                <input type="text" name="apellidom" class="form-control" placeholder="Apellido Materno" required="">

            </div>

            <div class="col-sm-12 col-md-4 mb-3">

                <label><strong>R.F:C:</strong></label>

                <input type="text" name="rfc" class="form-control" placeholder="R.F.C" required="">

            </div>

            <div class="col-sm-12 col-md-4 mb-3">

                <label><strong>Teléfono:</strong></label>

                <input type="number" name="telefono" class="form-control" placeholder="Teléfono" required="">

            </div>

            <div class="col-sm-12 col-md-4 mb-3">

                <label><strong>Código Postal:</strong></label>

                <input type="number" name="cp" class="form-control" placeholder="Código Postal" required="">

            </div>

            <div class="col-sm-12 col-md-4 mb-3">

                <label><strong>Ciudad:</strong></label>

                <input type="text" name="ciudad" class="form-control" placeholder="Ciudad" required="">

            </div>

            <div class="col-sm-12 col-md-4 mb-3">

                <label><strong>Calle:</strong></label>

                <input type="text" name="calle" class="form-control" placeholder="Calle" required="">

            </div>

            <div class="col-sm-12 col-md-4 mb-3">

                <label><strong>Número:</strong></label>

                <input type="number" name="numero" class="form-control" placeholder="Número" required="">

            </div>

            <div class="col-12">

                <label><strong>Página web:</strong></label>

                <input type="text" name="web" class="form-control" placeholder="Página web" required="">

            </div>
                 
      </div>
      <div class="col-12 mt-3" style="float: right;" align="right">
           <div class="col-6 text-right">
                <button class="btn btn-success btn-submit" id="enviar1">Capturar Proovedor</button>
          </div>
        </div>


      </form>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
         <form>
      <div class="row">
      
       <div class="col-12">
            <h4 class="mb-3">Ingresar cliente : </h4>
       </div>
     
           
                <div class="col-sm-12 col-md-4 mb-3">

                <label><strong>Nombre:</strong></label>

                <input type="text" name="nombre2" class="form-control" placeholder="Nombre" required="">

            </div>


            <div class="col-sm-12 col-md-4 mb-3">

                <label><strong>Apellido Paterno:</strong></label>

                <input type="text" name="apellidop2" class="form-control" placeholder="Apellido Paterno" required="">

            </div>

            <div class="col-sm-12 col-md-4 mb-3">

                <label><strong>Apellido Materno:</strong></label>

                <input type="text" name="apellidom2" class="form-control" placeholder="Apellido Materno" required="">

            </div>

            <div class="col-sm-12 col-md-4 mb-3">

                <label><strong>R.F:C:</strong></label>

                <input type="text" name="rfc2" class="form-control" placeholder="R.F.C" required="">

            </div>

            <div class="col-sm-12 col-md-4 mb-3">

                <label><strong>Calle:</strong></label>

                <input type="text" name="calle2" class="form-control" placeholder="Calle" required="">

            </div>

            <div class="col-sm-12 col-md-4 mb-3">

                <label><strong>Código Postal:</strong></label>

                <input type="number" name="cp2" class="form-control" placeholder="Código Postal" required="">

            </div>

            <div class="col-sm-12 col-md-4 mb-3">

                <label><strong>Ciudad:</strong></label>

                <input type="text" name="ciudad2" class="form-control" placeholder="Ciudad" required="">

            </div>

            <div class="col-sm-12 col-md-4 mb-3">

                <label><strong>Número:</strong></label>

                <input type="number" name="numero2" class="form-control" placeholder="Número" required="">

            </div>

            
                 
      </div>
      <div class="col-12 mt-3" style="float: right;" align="right">
           <div class="col-6 text-right">
                <button class="btn btn-success btn-submit" id="enviar2">Capturar Cliente</button>
          </div>
        </div>


      </form>
        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
          <form>
      <div class="row">
      
       <div class="col-12">
            <h4 class="mb-3">Ingresar producto : </h4>
       </div>
     
           
                <div class="col-sm-12 col-md-4 mb-3">

                <label><strong>Codigo de barras:</strong></label>

                <input type="number" name="codigo3" class="form-control" placeholder="Codigo de Barras" required="">

            </div>


            <div class="col-sm-12 col-md-4 mb-3">

                <label><strong>Nombre del producto:</strong></label>

                <input type="text" name="nombrep3" class="form-control" placeholder="Producto" required="">

            </div>

            <div class="col-sm-12 col-md-4 mb-3">

                <label><strong>Descripción:</strong></label>

                <input type="text" name="descripcion3" class="form-control" placeholder="Descripción" required="">

            </div>

            <div class="col-sm-12 col-md-4 mb-3">

                <label><strong>Precio:</strong></label>

                <input type="number" name="precio3" class="form-control" placeholder="Precio del producto" required="">

            </div>

            <div class="col-sm-12 col-md-4 mb-3">

                <label><strong>Stock:</strong></label>

                <input type="number" name="stock3" class="form-control" placeholder="Stock en tienda" required="">

            </div>

            

            
                 
      </div>
      <div class="col-12 mt-3" style="float: right;" align="right">
           <div class="col-6 text-right">
                <button class="btn btn-success btn-submit" id="enviar3">Capturar Producto</button>
          </div>
        </div>


      </form>
        </div>

        <div class="tab-pane fade" id="consulta" role="tabpanel" aria-labelledby="consulta">
          <form>
      <div class="row">
      
       <h3>Catalogo de proveedores</h3>
       <table class="table table-hover text-center">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido paterno</th>
      <th scope="col">Apelido materno</th>
      <th scope="col">RFC</th>
      <th scope="col">Telefono</th>
      <th scope="col">C.P.</th>
      <th scope="col">Ciudad</th>
      <th scope="col">Calle</th>
      <th scope="col">Numero</th>
      <th scope="col">Web</th>
      <th>Acción</th>
      
    </tr>
  </thead>
  <tbody>

    @foreach($consulta1 as $proveedor)
                            <tr>
                             <td class="text-center align-middle">{{$proveedor->id}}</td>
                             <td class="text-center align-middle">{{$proveedor->nombre}}</td>
                             <td class="text-center align-middle">{{$proveedor->apellidop}}</td>
                             <td class="text-center align-middle">{{$proveedor->apellidom}}</td>
                             <td class="text-center align-middle">{{$proveedor->rfc}}</td>
                             <td class="text-center align-middle">{{$proveedor->telefono}}</td>
                             <td class="text-center align-middle">{{$proveedor->cp}}</td>
                             <td class="text-center align-middle">{{$proveedor->ciudad}}</td>
                             <td class="text-center align-middle">{{$proveedor->calle}}</td>
                             <td class="text-center align-middle">{{$proveedor->numero}}</td>
                             <td class="text-center align-middle">{{$proveedor->web}}</td>
                             <td class="text-center align-middle"><button type="button" onclick="borrar1('{{$proveedor->id}}','proovedor')" class="btn btn-danger">Borrar</button></td>
                            
                            </tr>
                            </tr>
                       
                       @endforeach

  </tbody>
</table>
<h3>Catalogo Clientes</h3>
<table class="table table-hover text-center">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido paterno</th>
      <th scope="col">Apelido materno</th>
      <th scope="col">RFC</th>
      <th scope="col">C.P.</th>
      <th scope="col">Ciudad</th>
      <th scope="col">Calle</th>
      <th scope="col">Numero</th>
      <th>Acción</th>
      
    </tr>
  </thead>
   
  <tbody>
   @foreach($consulta2 as $cliente)
                            <tr>
                             <td class="text-center align-middle">{{$cliente->id}}</td>
                             <td class="text-center align-middle">{{$cliente->nombre}}</td>
                             <td class="text-center align-middle">{{$cliente->apellidop}}</td>
                             <td class="text-center align-middle">{{$cliente->apellidom}}</td>
                             <td class="text-center align-middle">{{$cliente->rfc}}</td>
                             <td class="text-center align-middle">{{$cliente->cp}}</td>
                             <td class="text-center align-middle">{{$cliente->ciudad}}</td>
                             <td class="text-center align-middle">{{$cliente->calle}}</td>
                             <td class="text-center align-middle">{{$cliente->numero}}</td>
                             <td class="text-center align-middle"><button type="button" onclick="borrar1('{{$cliente->id}}','cliente')" class="btn btn-danger">Borrar</button></td>
                            
                            </tr>
                            </tr>
                       
                       @endforeach
  </tbody>
</table>
<h3>Catalogo de productos</h3>
<table class="table table-hover text-center">
  <thead>
    <tr>
     <th scope="col">ID</th>
      <th scope="col">Codigo</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descripción</th>
      <th scope="col">Precio</th>
      <th scope="col">Stock</th>
      <th>Acción</th>
     </tr>
  </thead>
  <tbody>
  @foreach($consulta3 as $producto)
                            <tr>
                             <td class="text-center align-middle">{{$producto->id}}</td>
                             <td class="text-center align-middle">{{$producto->codigo}}</td>
                             <td class="text-center align-middle">{{$producto->nombrep}}</td>
                             <td class="text-center align-middle">{{$producto->descripcion}}</td>
                             <td class="text-center align-middle">{{$producto->precio}}</td>
                             <td class="text-center align-middle">{{$producto->stock}}</td>
                             <td class="text-center align-middle"><button type="button" onclick="borrar1('{{$producto->id}}','producto')" class="btn btn-danger">Borrar</button></td>                   
                            
                            </tr>
                            </tr>
                       
                       @endforeach
  </tbody>
</table>
        </div>


      </form>
        </div>

      </div>
      
        
   
     
    

      
    </div>
    
    </div>
  
</div>
<hr>
           <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="{{asset('bootstrap4/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('bootstrap4/popper.min.js')}}"></script>

     <script src="{{asset('bootstrap4/js/bootstrap.min.js')}}"></script>

    </body>
    <script type="text/javascript">
    $.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

    });



    $("#enviar1").click(function(e){

        e.preventDefault();
        var nombre = $("input[name=nombre]").val();

        var apellidop = $("input[name=apellidop]").val();

        var apellidom = $("input[name=apellidom]").val();

        var rfc = $("input[name=rfc]").val();

        var telefono = $("input[name=telefono]").val();

        var cp = $("input[name=cp]").val();

        var ciudad = $("input[name=ciudad]").val();

        var calle = $("input[name=calle]").val();

        var numero = $("input[name=numero]").val();

        var web =$("input[name=web]").val();

        
        if (nombre !="" && apellidop !="" && apellidom !="" && rfc !="" && telefono !="" && cp !="" && ciudad !="" && calle !="" && numero !="" && web!="") {

          $.ajax({

           type:'POST',

           url:'/ajaxRequest',

           data:{nombre:nombre, apellidop:apellidop, apellidom:apellidom, rfc:rfc, telefono:telefono, cp:cp, ciudad:ciudad,calle:calle,numero:numero,web:web},

           success:function(data){

              alert(data.success);

           }

        });

        }else{
          alert("te faltan datos");

        }

    });

     $("#enviar2").click(function(e){

        e.preventDefault();
        var nombre2 = $("input[name=nombre2]").val();

        var apellidop2 = $("input[name=apellidop2]").val();

        var apellidom2 = $("input[name=apellidom2]").val();

        var rfc2 = $("input[name=rfc2]").val();

        var cp2 = $("input[name=cp2]").val();

        var ciudad2 = $("input[name=ciudad2]").val();

        var calle2 = $("input[name=calle2]").val();

        var numero2 = $("input[name=numero2]").val();

        
        if (nombre2 !="" && apellidop2 !="" && apellidom2 !="" && rfc2 !="" && cp2 !="" && ciudad2 !="" && calle2 !="" && numero2 !="" ) {

          $.ajax({

           type:'POST',

           url:'/ajaxRequest2',

           data:{nombre2:nombre2, apellidop2:apellidop2, apellidom2:apellidom2, rfc2:rfc2, cp2:cp2, ciudad2:ciudad2,calle2:calle2,numero2:numero2},

           success:function(data){

              alert(data.success);

           }

        });

        }else{
          alert("te faltan datos");

        }

    });

$("#enviar3").click(function(e){

        e.preventDefault();
        var codigo3 = $("input[name=codigo3]").val();

        var nombrep3 = $("input[name=nombrep3]").val();

        var descripcion3 = $("input[name=descripcion3]").val();

        var precio3 = $("input[name=precio3]").val();

        var stock3 = $("input[name=stock3]").val();

        

        
        if (codigo3 !="" && nombrep3 !="" && descripcion3 !="" && precio3 !="" && stock3 !="" ) {

          $.ajax({

           type:'POST',

           url:'/ajaxRequest3',

           data:{codigo3:codigo3, nombrep3:nombrep3, descripcion3:descripcion3, precio3:precio3, stock3:stock3},

           success:function(data){

              alert(data.success);

           }

        });

        }else{
          alert("te faltan datos");

        }

    });

function borrar1(id,tipo){
  var id=id;
  var tipo = tipo;
  $.ajax({

           type:'POST',

           url:'/borrar1',

           data:{id:id, tipo:tipo},

           success:function(data){

              alert(data.success);

           }

        });
 


}

</script>
</html>
