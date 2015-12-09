<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="">
</head>

<body>
<table border="1px">

<?php 

$nombre=array("2222222X"=>"Pepe",
              "3333333X" => "Manuel",
              "4444444X" => "Jose",
              "5555555X" => "Rosa");
$apellidos=array("2222222X" => "Pérez" ,
                 "3333333X" =>"Jiménez", 
                 "4444444X" => "Martínez", 
				 "5555555X" => "Rodríguez");

foreach($nombre as $dni=>$clave) {
    echo "<tr><td>".$dni."</td><td>".$clave."</td><td>".$apellidos[$dni]."</td></tr>";
}
?>
    </table>
</body>
</html>