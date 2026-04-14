<?php
include "CN.php";

$destino = "romulogalarza@gmail.com";

ini_set('date.timezone', 'America/Guayaquil');

$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"];
// $fecha = date("d/m/y");
$fecha = date('Y-m-d, H:i:s', time());

$contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTelefono: " . $telefono . "\nmensaje: " . $mensaje . "\nFecha: " . $fecha;
mail($destino, "Contacto", $contenido);

$agarrar = "INSERT INTO contactos(NomApellidos, Email, Telefono, Mensaje, FechaReg) VALUES ('$nombre', '$correo', '$telefono', '$mensaje', '$fecha' )";

$check_correo = mysqli_query($conexion, "SELECT * FROM contactos WHERE  Email = '$correo'");
if (mysqli_num_rows($check_correo) >0) {
    echo '<script>
    alert("El correo ya esta registrado");
    </script>';
    echo "<script>setTimeout(\"location.href='../LPCostos.php'\",1000)</script>";
    exit;
}

$resultado = mysqli_query($conexion, $agarrar);

if (!$resultado) {
    echo 'Error al registrarse';
}   else {
    echo "<script>alert('Correo enviado exitosamente')</script>";
    echo "<script>setTimeout(\"location.href='../LPCostos.php'\",1000)</script>";
}
//Cerrar conexion
mysqli_close($conexion);