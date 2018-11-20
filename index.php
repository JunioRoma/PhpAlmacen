<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
        <title>LOGIN ALMACÉN</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="text-center" style="background-image: url('img/almacen.jpg'); background-repeat: no-repeat; background-size: 100%; color:white; ">

        <div style="border: solid 2px orange; position: fixed; top: 10%; left: 20%; right: 20%; width: 60%; height: 10%; background-image: url('img/banner.jpg');">

            <h1 style="color: #ffde88;"><i><u>Ingrese Su Usuario</u></i></h1> 
            
        </div>


        <div class="container" id="principal" style="clear: both; background-color: #ffde88; border: solid 2px orange; position: fixed; top: 20%; left: 10%; right: 10%; width: 50%;">
          

            <div class ="row">
                <div class="col-4">
                </div>
                <div class="col-4">
                    <br/><br/>
                    <input id ="cajaNombre" class="form-control" type="text" placeholder="Usuario" required="required" style="text-align: center">
                    <br/>
                    <input id ="cajaPassword" class="form-control" type="password" placeholder="Contraseña" required="required" style="text-align: center">
                    <br/>
                    <button id="boton1" class="btn btn-warning btn-block" type="submit">Iniciar Sesión</button>
                    <br/><br/>
                </div>
                <div class="col-4">
                </div>
            </div>
        </div>

    </body>

<script>
                    // document ready se ejecuta cuando toda la página se ha cargado correctamente
                    $(document).ready(function () {
          
                    });

                    $.validate({
                        lang: 'es'
                    });



                    $('#boton1').click(function () {
                        //leo el contenido de las cajas de nombre y contraseña
                        var _cajaNombre = $('#cajaNombre').val();
                        var _cajaPassword = $('#cajaPassword').val();

                        $('#principal').load("login.php", {
                            cajaNombre: _cajaNombre,
                            cajaPassword: _cajaPassword
                        });
                    });
             
          
             
    </script>

</html>