<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
        
    </head>
    <body style="background-color: #ffde88">
        <div id="papa" >
            <div id = "cabecera" class="row"  style="margin: 0 auto; margin-top: 2%; border: 2px solid yellow; background-image: url('img/banner.jpg');
                 background-size: cover;">
                <div class="col-1"></div>
                <div class="col-2"><a href="index.php"><img src="img/iconoa_r.png"class="img-fluid"></a></div>
                <div class="col-6" style="display: block"> 
                    <h2 class="text-center" style="color: white">ALMACEN DE LOS LEGIONARIOS 2018</h2>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div id="buscapadre" class="row" style="width: 100%">
            <div class="col-4"></div>
            <div id="buscador" class="col-4">
                <input id="busqueda" class="typeahead form-control" type="text" placeholder="Buscar">
            </div>
            <div class="col-5"></div>
        </div>

        <div class="container" id="Principal" style="clear: both; background-color: #ffffff">
            <div id="Contenido" class="row">
                <div class="col-2"></div>
                <div id="resultado" class="col-8">

                </div>
                <div class="col-2"></div>
            </div>
        </div>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#btnAnyadir" style="margin-left: 85%">Añadir</button>
    </body>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {

            var consulta;

            //hacemos focus al campo de búsqueda
            $("#busqueda").focus();

            //comprobamos si se pulsa una tecla
            $("#busqueda").keyup(function (e) {

                //obtenemos el texto introducido en el campo de búsqueda
                consulta = $("#busqueda").val();

                //hace la búsqueda

                $.ajax({
                    type: "POST",
                    url: "buscar.php",
                    data: "b=" + consulta,
                    dataType: "html",
                    beforeSend: function () {
                        //imagen de carga
                        $("#resultado").html("<p align='center'><img src='img/ajax-loader.gif' /></p>");
                    },
                    error: function () {
                        alert("error petición ajax");
                    },
                    success: function (data) {
                        $("#resultado").empty();
                        $("#resultado").append(data);

                    }
                });


            });

            

        });
        
        
        function leeRegistro() {

                var _nombreArticulo = $('#nombreArticulo').val();
                var _numSerie = $('#numSerie').val();
                var _cantidad = $('#cantidad').val();
                var _idArticulo = $('#ID').val();

                //$('#modalito').load("registroProductos.php", {
                $('#pruebas').load("registroProductos.php", {      
                    nombreArticulo: _nombreArticulo,
                    numSerie: _numSerie,
                    cantidad: _cantidad,
                    ID: _idArticulo
                });
            }
    </script>

    <div id="pruebas"></div>
    
    <div class="modal fade" id="btnAnyadir" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Añade un producto al inventario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modalito">
                    <p>Nombre:</p>
                    <input type="text" class="form-control" id="nombreArticulo">
                    <br>
                    <p>Numero de Serie:</p>
                    <input type="text" class="form-control" id="numSerie">
                    <br>
                    <p>Cantidad:</p>
                    <input type="text" class="form-control" id="cantidad">
                    <br>
                    <p>ID:</p>
                    <input type="text" class="form-control" id="ID">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary" onclick="leeRegistro();">Añadir</button>
                </div>
                
            </div>
        </div>
    </div>
</html>