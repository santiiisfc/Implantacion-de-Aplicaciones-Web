<html lang="">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="">
</head>

<body>

    <?php 
$numeros = array (18, 4, 1, 24, 25, 13, 8, 10, 19, 11);
$r = 0;
 
while ($r <= count($numeros)-1) {
 
    if ($r == 0)
        $maximo = $numeros[0];
    else {
        if ($numeros[$r] > $maximo)
            $maximo = $numeros[$r];
    }
    $r++;
}
 
echo 'El maximo es: ' . $maximo;
 
?>