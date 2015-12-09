<!DOCTYPE html>
<html lang "">
<head>
    <meta charset="UTF-8">
    <title></title>
    </head>

<body>
 <?php
 //Relizar un programa que utilizando la fución date() (buscarla en el manual) nos diga si el sitio está o no fuera de servicio. Estará fuera activo si estamos en los 10 primero días del mes.

$fecha=date('j');

if ($fecha>=1 && $fecha<=10){
    echo "Está fuera de servicio";
}else {
    echo "Está activa";
}
   ?>
       </body>
</html>    