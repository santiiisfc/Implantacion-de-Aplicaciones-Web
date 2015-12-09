<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php if (!isset($_POST["matri"])) : ?>
        <form method="post" action="#">
            <table>
                <tr>
                    <td>Matricula:
                    <?php
                       $connection = new mysqli("localhost","root","","talleresfaber");
                        if($connection->connect_errno){
                            echo "<h1>Se produjo un error a la hora de conectarse a la base de datos: $connection->connect_errno</h1>";
                        }
                
                       $consulta_mysql='select Matricula from VEHICULOS';
                       $result=$connection->query($consulta_mysql);
                        
                       $mat = $_GET['mat'];
                       echo "<select name='matri'>";
                       while($obj=$result->fetch_object()){
                            if($mat==$obj->Matricula){
                                echo "<option value='".$obj->Matricula."' selected>".$obj->Matricula."</option>";
                            }else{
                                echo "<option value='".$obj->Matricula."'>".$obj->Matricula."</option>";
                            }
                        }
                        echo "</select>";  
                        $result->close();
                        unset($obj);
                        unset($connection);
                        
                      $obs = $_GET['obs'];
                      $av = $_GET['av'];
                      $fent = $_GET['fent'];
                      $fsal= $_GET['fsal'];
                      $km = $_GET['km'];
                      $id = $_GET["id"];
                      $rep = $_GET["rep"];
                    
                    echo '</td>
                    <td>Fecha de Entrada: <input type="date" name="fentrada" value="'.$fent.'" > </td>
                </tr>
                <tr>
                    <td>Km: <input type="number" name="km" value='.$km.' ></td>
                    <td>Fecha de Salida: <input type="date" name="fsalida" value="'.$fsal.'"> </td>
                </tr>
                <tr>
                    <td>Averia: <input type="text" name="averia" value="'.$av.'"></td>
                    <td>Reparado:';
                if($rep==1){
                    echo '<input  name="rep" value="1" type="radio" id="rep1" checked />
                    <label for="rep1">Si</label>
                    <input  name="rep" value="0" type="radio" id="rep2"/>
                    <label for="rep2">No</label>';
                }else{
                       echo '<input  name="rep" value="1" type="radio" id="rep1" />
                        <label for="rep1">Si</label>
                        <input  name="rep" value="0" type="radio" id="rep2" checked/>
                        <label for="rep2">No</label>'; 
                }
                echo '</td>
                </tr>
                <tr>
                    
                        <td>Observaciones: <input type="text" name="obs" value="'.$obs.'"> </td>
                </tr>
            </table>
            <input type="hidden" name="id" value="'.$id.'">
            <input type="submit" name="send" value="enviar">
      </form>';
        ?>
        <?php else: ?>

        <?php
            $matri=$_POST['matri'];
            $fent=$_POST['fentrada'];
            $fsal=$_POST['fsalida'];
            $km=$_POST['km'];
            $averia=$_POST['averia'];
            $rep=$_POST['rep'];
            $obs= $_POST['obs'];
            $id= $_POST['id'];
        
         
            $connection = new mysqli("localhost","root","Carrasco2?","talleresfaber");
                        if($connection->connect_errno){
                            echo "<h1>Se produjo un error a la hora de conectarse a la base de datos: $connection->connect_errno</h1>";
            } 
            $consulta="UPDATE REPARACIONES SET IdReparacion='".$id ."',Matricula='".$matri."', FechaEntrada='".$fent."', Km='".$km."', Averia='".$averia."' ,FechaSalida='".$fsal."' ,Observaciones='".$obs."' WHERE IdReparacion=$id";
            echo $consulta."<br>";
        
            
            if($connection->query($consulta)==true){
                echo "perfe";
            }else{
                echo $connection->error;   
            }
            unset($connection);

            header('Location: database.php');
        ?>

      <?php endif ?>
</body>
</html>