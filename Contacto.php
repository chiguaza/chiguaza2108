<!DOCTYPE html>
<html lang="es">

    <?php include 'head.php'; ?>

<body>
    <div class="contenedor">
        
        <?php include 'header.php'; ?>

         <div class="Cuerpo">
            
                        <div class="FotoP">
            </div>
            <div class="C-Izq">
                <div class="Contactos">
                    <div class="Correo">
                       <div class="CorreoAux">
                        <form action="PHP/registrar.php" method="POST" onsubmit="return validar();">
                            <div class="form">
                                <h1>Regístrese para recibir más información de los precios y servicios que ofrecemos.
                                <h5>Todas las personas y únicamente las que se registran en la presente página, obtendrán un 50% de descuento en el costo del ingreso para tener acceso a los SERVICIOS INTERNOS. Mayor información en la siguiente pagina al registrarse</h5> </h1>
                                <div class="grupo">
                                    <input type="text" name="nombre" id="nombre" required><span class="barra"></span>
                                    <label class="GABY">Nombre(s) y apellido(s) <b class="rojo">*</b></label>
                                </div>
                                <div class="grupo">
                                    <input type="email" name="correo" id="correo" required><span class="barra"></span>
                                    <label class="GABY">Correo electrónico <b class="rojo">*</b></label>
                                </div>
                                <div class="grupo">
                                    <input type="text" name="telefono" id="telefono" required><span class="barra"></span>
                                    <label class="GABY">Celular (Más código de país) <b class="rojo">*</b></label>
                                </div>

                                <div class="grupo">
                                    <textarea name="mensaje" id="mensaje" rows="2"></textarea><span class="barra"></span>
                                    <label class="GABY">Mensaje (máximo 350 palabras)</label>
                                </div>
                                <p><b class="rojo">* ==> Los datos son olibgatorios</b> </p>
                                <button type="submit">Enviar</button>
                            </div>
                        </form>
                        </div>
                    </div>
                    <div class="Data">
                        <div class="DatInf">
                            <h1 class="titulo">Contactanos</h1>
                            <h3>En nuestro complejo Eco Turístico, no existe señal de celular, únicamente tenemos servicio de internet banda ancha, y telefonía fija directa.<br><br>
                                Por esta razón queremos dar una pequeña guía para contactarnos en caso de ser necesario: <br>
                            </h3>
                            <p>Llamar a los siguientes números celulares de acuerdo al orden del listado o preferencia, en caso de no existir contestación alguna, usar WhatsApp, correo electrónico u otro medio.<br><br> </p>
                            <div class="Jechi1">
                                <div class="llamadas">
                                    <div class="matias">Rómulo Galarza: <spam class="NT">099-500-6282</spam>
                                    </div>
                                    <div class="matias">Max Galarza:<spam class="NT">098-087-0013</spam>
                                    </div>
                                    <div class="matias">Andrés Zúñiga:<spam class="NT">098-357-7128</spam>
                                    </div>
                                    <div class="matias">Jessica Misquero:<spam class="NT">096-918-9390</spam>
                                    </div>
                                    <div class="matias">Laberintos:<spam class="NT">032-893689</spam>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><br><br>
            <h2 class="inform" ><br><br>Todas las personas y únicamente las que se registran en la presente página, obtendrán un 50% de descuento en el costo del ingreso para tener acceso a los SERVICIOS INTERNOS, es decir 1.75 dólares para personas mayores a 10 años y 1.25 dólares para personas menores a 10 años. Los niños menores de 2 años, no cancelan.  <br><br>
            Los servicios internos son los siguientes: Piscinas, hidromasaje, canchas, juegos infantiles, laguna, canoas, pesca deportiva (No entregamos equipos de pesca), tarabita, puente de dos hilos, salón de uso múltiple y servicio de internet. 
            Esta promoción es válida, hasta una nueva publicación, y se aplica únicamente para el ingreso al complejo con derecho a los servicios internos.<br><br>
            
            Para el ingreso a los SERVICIOS INTERNOS, tiene un costo normal de 3.5 dólares para personas mayores a 10 años y 2.5 para los niños menores a 10 años, los niños menores de 2 años no cancelan, la persona que se registran cancela únicamente el 50% y se detallan en nuestra LANDING PAGE, al registrarse:
            </h2><br><br>
            
            </div>
            
            <?php include 'LatDer.php'; ?>
            
        </div>
        
            <?php include 'footer.php'; ?>
        
    </div>
</body>

<script src="js/GaleriaApp.js"></script>
<!--Para visualizar el enlace de Youtube-->
<script src="https://apis.google.com/js/platform.js"></script>
<!--Para visualizar el enlace de Facebbok-->
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.3&appId=138615703613600&autoLogAppEvents=1"></script>

</html>