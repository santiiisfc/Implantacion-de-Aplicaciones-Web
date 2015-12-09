<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    
    
     <?php if (!isset($_POST["matric"])) : ?>
          
    <form method="post" action="#">
        
        <table>
        
        <tr>
        
        <td>
            
         Matricula:
            
           <?php 

         $connection = new mysqli("localhost", "root", "", "talleresfaber");
        if ($connection->connect_errno) {
          printf("Connection failed: %s\n", $mysqli->connect_error);
          exit();
      }

        $consultamatri="SELECT Matricula FROM VEHICULOS";
        $result=$connection->query($consultamatri);
            echo "<select name='matric'>";
        while($obj = $result->fetch_object()) {
            
            echo "<option value='".$obj->Matricula."'>".$obj->Matricula."</option>";
   
    }

    echo "</select>";
    $result->close();
          unset($obj);
          unset($connection);
            
    
    ?>

</td>
            
         <td>
            
            FechaEntrada: <input type="date" name="fech">
            
            </td>
            
</tr> 
            <tr>
            
            <td>
                
                KM: <input type="number" name="km">
                
                </td>
                
                <td>
                    
                    Averia: <input type="text" name="ave">
                    
                </td>
                
                <td>
                
                FechaSalida: <input type="date" name="feS">
                
                </td>
            
            
            </tr>
            
            <tr>
            
            <td>
                
                Reparado:
                
                  <input name="repa" value="0" type="radio" checked />
                <label for="repa1">0</label>
                <input name="repa" value="1" type="radio" />
                <label for="repa2">1</label>
                
                </td>
                
                <td>
                
                Observaciones: <input type="text" name="obser">
                    
                </td>
            
            
            </tr>
            
            
            </table>
        
        
     <input type="submit" name="envia" value="ENVIAR">
    </form>
        
         <?php else: ?>
           
        <?php
           
            $matric=$_POST['matric'];
            $fech=$_POST['fech'];
            $km=$_POST['km'];
            $ave=$_POST['ave'];
            $feS=$_POST['feS'];
            $repa=$_POST['repa'];
            $obser=$_POST['obser'];


 $connection = new mysqli("localhost", "root", "", "talleresfaber");
        if ($connection->connect_errno) {
          printf("Connection failed: %s\n", $mysqli->connect_error);
          exit();
      }

$consulta2="INSERT INTO REPARACIONES (IdReparacion,Matricula,FechaEntrada,Km,Averia,FechaSalida,Reparado,Observaciones) VALUES(NULL,'$matric','$fech','$km','$ave','$feS','$repa','$obser')";
//var_dump($consulta2); mirar consultas

echo $consulta2."<br>";

if($connection->query($consulta2)==true){
    
    echo "Ok";
    
}else{
    
    echo $connection->error;
    
}

unset($connection);
header('Location: database.php');

?>
           
        
<?php endif ?>
    
    
</body>
</html>
