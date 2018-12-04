<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>



    <?php
    
    $host_db = "localhost";
    $user_db = "root";
    $pass_db = "";
    $db_name = "almacen";
    $tbl_name = "articulos";


    $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);



    if ($conexion->connect_error) {

        die("La conexion falló: " . $conexion->connect_error);
    }

    


//    $insertaDatos = ("INSERT INTO $tbl_name (buscarArticulo, buscarNumSerie, buscarCantidad) VALUES (:articulo, :num_serie, :cantidad)");
//
//    $insertaDatos->bindParam(':articulo', $articulo);
//    $insertaDatos->bindParam(':num_serie', $num_serie);
//    $insertaDatos->bindParam(':cantidad', $cantidad);
    
    $idArticulo = $_POST['ID'];
    $articuloBuscar = $_POST['nombreArticulo'];
    $numSerieBuscar = $_POST['numSerie'];
    $cantidadBuscar = $_POST['cantidad'];
   

    
            $conexion -> query("INSERT INTO articulos (Nombre, ID , Num_Serie, Cantidad) VALUES ('$articuloBuscar', '$idArticulo', '$numSerieBuscar', '$cantidadBuscar')");
           
    
    
    
    
     

    mysqli_close($conexion);
    ?>

</html>