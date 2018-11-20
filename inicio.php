<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    </head>
    <body style="background-color: #000">
        <div id="padre">
            <br>
            <div id="padresitoC" class="row" style="background-color: #ff9933">
                <div class="col-5"></div>
                <div class="col-6">dddddddddd</div>
            </div>
        </div>
        <br>
        <br>
        <div id="Buscador" class="row">
            <div class="col-12">
                <input class="typeahead form-control" type="text" placeholder="Buscar">
            </div>
        </div>
        <div class="container" id="Principal" style="clear: both; background-color: #ffffff">

            <br>
            <br>
            <div id="Contenido" class="row">
                <div class="col-2"></div>
                <div class="col-8">
                    <div style="background-color: #00ff00">sefefsefwsefs</div>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#btnAnyadir" style="margin-left: 90.9%">
                        Añadir
                    </button>
                </div>
                <div class="col-2"></div>
            </div>
        </div>

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
                    <p>Numero de Serie:</p>
                    <input type="text" class="form-control" id="recipient-name">
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