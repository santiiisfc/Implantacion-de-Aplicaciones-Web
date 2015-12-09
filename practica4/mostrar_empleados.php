<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php
        //conexion a la base de datos
        $id = $_GET["id"];
        $connection = new mysqli ("localhost" ,"root" ,"" , "talleresfaber");

        if($connection->connect_errno){
            echo "<h1>Se produjo un error a la hora de conectarse a la base de datos: $connection->connect_errno</h1>";
        }
        $result=$connection->query("SELECT * FROM INTERVIENEN WHERE IdReparacion=".$id = $_GET["id"]);
    ?>
        <table border=1 style="text-align:center;">
            <tr>
                <th>Id Reparacion</th>
                <th>Codigo Empleado</th>
                <th>Nombre Empleado</th>
                <th>Horas Trabajadas</th>
            </tr>
            
        <?php
            while($obj=$result->fetch_object()){
                echo "<tr>";
                echo "<td>$obj->IdReparacion</td>";
                echo "<td>$obj->CodEmpleado</td>";
                echo "<td>";
                
                $result1=$connection->query("SELECT * FROM EMPLEADOS WHERE CodEmpleado ='".$obj->CodEmpleado."'");
                
                while($obj2=$result1->fetch_object()){
                    echo "".$obj2->Nombre." ".$obj2->Apellidos;
                }
                $result1->close();
                unset($obj2);
                echo "</td>";
                echo "<td>$obj->Horas</td>";
                echo "</tr>";   
            }
            $result->close();
            unset($obj);
            unset($connection);
            
        ?>
        <tr>
        </tr>
        </table>
        <a href="database.php">Volver</a>
    
</body>
</html>
