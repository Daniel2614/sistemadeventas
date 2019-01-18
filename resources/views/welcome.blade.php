<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Evaluación UX</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }
            .subtitle {
                font-size: 64px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .clickeable {
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <!-- comienza etapa 1, presentación -->
        <div class="flex-center position-ref full-height" id="presentacion">

            <div class="content">

                <div>
                    <img src="https://i0.wp.com/ux.edu.mx/wp-content/uploads/207x140-blanco-3.png">
                </div>
                <div class="title m-b-md">
                    Sistema de evaluación docente
                    <div class="subtitle">
                    Universidad de Xalapa
                    </div>
                </div>
                <div class="links clickeable">
                    <a id="comenzar">Comenzar</a>
                </div>

            </div>
    
        </div>
         <!-- finaliza etapa 1, presentación -->
         
            <!-- comienza etapa 2, contenido principal -->
        <div class="flex-center position-ref full-height" id="presentacion">

            <div class="content">

                
                <div class="title m-b-md">
                    Contenedor principal
                    <div class="subtitle">
                    Universidad de Xalapa
                    </div>
                </div>
                

            </div>
    
        </div>    
            <!-- finaliza etapa 2, contenido principal -->
    </body>
    <script>
        function ocultarPresentacion() {
            $("#presentacion").fadeOut(1000, function(){
              console.log("oculto");
            });
        }

        $( "#comenzar" ).click(function() {
          ocultarPresentacion()
        });
    </script>
</html>