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
                <input class="typeahead form-control" type="text" placeholder="Buscar">
            </div>
            <div class="col-5"></div>
        </div>
        
        <div class="container" id="Principal" style="clear: both; background-color: #ffffff">
            <div id="Contenido" class="row">
                <div class="col-2"></div>
                <div class="col-8">
                    
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

    </script>

    <div class="modal fade" id="btnAnyadir" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Añade un material a tu inventario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Nombre:</p>
                    <input type="text" class="form-control" id="recipient-name">
                    <br>
                    <p>Numero de Serie:</p>
                    <input type="text" class="form-control" id="recipient-name">
                    <br>
                    <p>Cantidad:</p>
                    <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Añadir</button>
                </div>
            </div>
        </div>
    </div>
</html>