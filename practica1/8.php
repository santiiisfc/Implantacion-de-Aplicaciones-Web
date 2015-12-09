<!DOCTYPE html>
<html lang "">
<head>
    <meta charset="UTF-8">
    <title></title>
    </head>

<body>
 <?php
 //General un valor entre 1 y 5 y luego utilizar ese valor para sacar por pantalla ("uno", "dos","tres", "cuatro" o "cinco" según sea el valor obtenido.
$valor=rand(1,5);
switch ($valor){
    case 1:
    echo "uno";
    break;
    case 2:
    echo "dos";
    break;
    case 3:
    echo "tres";
    break;
    case 4:
    echo "cuatro";
    break;
    case 5:
    echo "cinco";
    break;
}
   ?>
       </body>
</html>    