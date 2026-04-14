<?php
// echo "Bueno ahora vamos a concectar con la pagina principal, BUENA SUERTE y queeeee <br><br>" ;

$conexion = mysqli_connect("193.203.175.136", "u529228440_Romulo", "PerritoMax2585", "u529228440_chiguazaDB");

echo "La conexion a la base de datos de chiguaza, fue un exito";


if(!$conexion) {
    echo '<script> alert("No se puede hacer la conexion, existe un error")</script>';
}
else {
    // echo '<script> alert("La conexion a la base de datos fue un exito")</script>';
}