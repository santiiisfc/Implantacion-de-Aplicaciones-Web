<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="">
</head>

<body>
    
    <?php 

$ciudades=array("San Cristobal", "Cucuta", "Maracaibo", "Caracas");


echo "numero de elementos ".count($ciudades)."<br>";

for ($i=0;$i<count($ciudades);$i++){
    echo "Ciudad $i";
echo "<h1>".$ciudades[$i]."</h1>";
}


?>

</body>
</html>