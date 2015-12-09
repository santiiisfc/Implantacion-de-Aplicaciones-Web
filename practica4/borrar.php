<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    
     <?php
          
$connection = new mysqli ("localhost","root","","talleresfaber");
if ($connection->connect_errno) {
          printf("Connection failed: %s\n", $mysqli->connect_error);
          exit();
      }

$idRepara=$_GET["id"];

$consulta1="DELETE FROM INTERVIENEN WHERE IdReparacion=$idRepara";
echo $consulta1;

$consulta2="DELETE FROM  INCLUYEN WHERE IdReparacion=$idRepara";
echo $consulta2;

$consulta3="DELETE FROM  FACTURAS WHERE IdReparacion=$idRepara";
echo $consulta3;

$consulta4="DELETE FROM REALIZAN WHERE IdReparacion=$idRepara";
echo $consulta4;

$consulta5="DELETE FROM REPARACIONES WHERE IdReparacion=$idRepara";
echo $consulta5;
    
$connection->query($consulta1);
$connection->query($consulta2);
$connection->query($consulta3);
$connection->query($consulta4);
$connection->query($consulta5);

unset($connection);

header('Location: database.php');
    
    ?>
    
    
    
</body>
</html>
