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



    $form_pass = $_POST['userPass'];


    $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);



    if ($conexion->connect_error) {

        die("La conexion falló: " . $conexion->connect_error);
    }



    $buscarArticulo = "SELECT * FROM $tbl_name WHERE Nombre = '$_POST[nombreArticulo]' ";
    $buscarId = "SELECT * FROM $tbl_name WHERE ID = '$_POST[id]' ";
    $buscarNumSerie = "SELECT * FROM $tbl_name WHERE Num_Serie = '$_POST[numSerie]' ";
    $buscarCantidad = "SELECT * FROM $tbl_name WHERE Cantidad = '$_POST[cantidad]' ";




    $result = $conexion->query($buscarId);



    $count = mysqli_num_rows($result);



    if ($count == 1) {
        
    } else {

        $query = "INSERT INTO articulos (Nombre, ID, Num_Serie, Cantidad)";





//        if ($conexion->query($query) === TRUE) {
//
//
//
//            echo "<br />" . "<h2>" . "Usuario Creado Exitosamente!" . "</h2>";
//
//            echo "<h4>" . "Bienvenido: " . $_POST['nombreUsuario'] . "</h4>" . "\n\n";
//        } else {
//
//            echo "Error al crear el usuario." . $query . "<br>" . $conexion->error;
//        }
    }

    mysqli_close($conexion);
    ?>
     
</html>