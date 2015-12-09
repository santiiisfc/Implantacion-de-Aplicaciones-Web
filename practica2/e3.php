<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="">
</head>

<body>

    <?php 
   $nombres = array ('roberto','juan','marta','moria','martin',
'jorge','miriam','nahuel','mirta');
$nombres_con_m = array();
 
$a = 0;
foreach ($nombres as $nombre) {
    if ($nombre[0] == 'm') {
        $nombres_con_m[$a] = $nombre;
        $a++;
    }
}
 
foreach ($nombres_con_m as $clave=>$valor) {
    echo $valor;
    if (count($nombres_con_m)-1 != $clave)
        echo ', ';
    else
        echo '.';
}
?>




</body>
</html>