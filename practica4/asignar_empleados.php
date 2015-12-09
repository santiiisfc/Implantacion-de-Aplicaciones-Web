<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>

<body>
   <?php if (!isset($_POST["emple"])) : ?>
        <form method="post" action="#">
            <table>
                <tr>
                    <td>Matricula:
                    <?php
                        $id = $_GET["id"];
                        
                       $connection = new mysqli("localhost","root","","talleresfaber");
                    
                        if($connection->connect_errno){
                            echo "<h1>Se produjo un error a la hora de conectarse a la base de datos: $connection->connect_errno</h1>";
                        } 
                       $consulta_mysql='select * from EMPLEADOS';
                       $result=$connection->query($consulta_mysql);

                       echo "<select name='emple'>";
                       while($obj=$result->fetch_object()){
                            echo "<option value='".$obj->CodEmpleado."'>".$obj->Nombre."</option>";
                        }
                        echo "</select>";  
                        $result->close();
                        unset($obj);
                        echo 'Horas: <input type="number" name="horas" >';
                        echo '<input type="hidden" name="id" value="'.$id.'">';
                        unset($connection);
        ?>            
           
            <input type="submit" name="send" value="enviar">
        </form>
        <?php else: ?>

        <?php
                
            $connection = new mysqli("localhost","root","","talleresfaber");
                
            $idEmple = $_POST["emple"];
            $horas = $_POST["horas"];
            $idRep = $_POST["id"];
                
            $consulta='INSERT INTO INTERVIENEN VALUES('.$idEmple.','.$idRep.','.$horas.')';
            echo $consulta;
            if($connection->query($consulta)){
                echo "perfe";  
                header('Location: database.php');   
            }else{
                echo $connection->error;
            }
                    
            
        ?>

      <?php endif ?>
</body>
</html>