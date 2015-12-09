<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>

<body>
   <?php if (!isset($_POST["reca"])) : ?>
        <form method="post" action="#">
            <table>
                <tr>
                    <td>Recambio:
                    <?php
                        $id = $_GET["id"];
                        
                       $connection = new mysqli("localhost","root","","talleresfaber");
                    
                        if($connection->connect_errno){
                            echo "<h1>Se produjo un error a la hora de conectarse a la base de datos: $connection->connect_errno</h1>";
                        } 
                       $consulta_mysql='select * from RECAMBIOS';
                       $result=$connection->query($consulta_mysql);

                       echo "<select name='reca'>";
                       while($obj=$result->fetch_object()){
                            echo "<option value='".$obj->IdRecambio."'>".$obj->Descripcion."</option>";
                        }
                        echo "</select>";  
                        $result->close();
                        unset($obj);
                        echo 'Unidades: <input type="number" name="unidades" >';
                        echo '<input type="hidden" name="id" value="'.$id.'">';
                        unset($connection);
        ?>            
           
            <input type="submit" name="send" value="enviar">
        </form>
        <?php else: ?>

        <?php
                
            $connection = new mysqli("localhost","root","","talleresfaber");
                
            $idrec = $_POST["reca"];
            $unidad = $_POST["unidades"];
            $idRep = $_POST["id"];
                
            echo $idrec;
                
            $consulta='INSERT INTO INCLUYEN VALUES("'.$idrec.'",'.$idRep.','.$unidad.')';
            echo $consulta;
            if($connection->query($consulta)){
                echo "perfe";    
                header('Location: database.php');   
            }else{
                echo $connection->errno;
            }         
            echo $connection->errno;
        ?>

      <?php endif ?>
</body>
</html>
