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

    $articulo = $_POST['nombreArticulo'];
    $num_serie = $_POST['numSerie'];
    $cantidad = $_POST['cantidad'];
    echo 'Funciona?';
    
    
    $insertaDatos = ("INSERT INTO $tbl_name (Nombre, Num_Serie, Cantidad) VALUES (:articulo, :num_serie, :cantidad)");

    $insertaDatos -> bindParam(':articulo', $articulo);
    $insertaDatos -> bindParam(':num_serie', $num_serie);
    $insertaDatos -> bindParam(':cantidad', $cantidad);


//    $numId  = "SELECT * FROM $tbl_name WHERE ID = '$_POST[idArticulo]' ";
//    $buscarArticulo = "SELECT * FROM $tbl_name WHERE Nombre = '$_POST[nombreArticulo]' ";
//    $buscarNumSerie = "SELECT * FROM $tbl_name WHERE Num_Serie = '$_POST[numSerie]' ";
//    $buscarCantidad = "SELECT * FROM $tbl_name WHERE Cantidad = '$_POST[cantidad]' ";
//
//
//
//
//    $result = $conexion->query($numId);
//
//
//
//    $count = mysqli_num_rows($result);
//
//
//
//    if ($count == 1) {
//        
//    } else {
//
//        $query = "INSERT INTO articulos ('$buscarArticulo', '$buscarNumSerie', '$buscarCantidad') "
//                . "VALUES(Nombre, Num_Serie, Cantidad)";
//
//
//
//
// 
//    }

    mysqli_close($conexion);
    ?>

</html>