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
    <div class="card-header"><h5>Captura Proveedores</h5></div>
    <div class="card-body">
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
                <button class="btn btn-success btn-submit">Capturar Proovedor</button>
          </div>
        </div>


      </form>
      
        
   
     
    

      
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



    $(".btn-submit").click(function(e){

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

        var web = $("input[name=web]").val();



        $.ajax({

           type:'POST',

           url:'/ajaxRequest',

           data:{nombre:nombre, apellidop:apellidop, apellidom:apellidom, rfc:rfc, telefono:telefono, cp:cp, ciudad:ciudad,calle:calle,numero:numero,web:web},

           success:function(data){

              alert(data.success);

           }

        });

    });

</script>
</html>
