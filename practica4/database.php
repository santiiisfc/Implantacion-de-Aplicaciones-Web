<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GETTING DATA FROM A MYSQL DATABASE</title>
  </head>
  <body>
    <?php
      //CREATING THE CONNECTION
      $connection = new mysqli("localhost", "root", "", "talleresfaber");
      //TESTING IF THE CONNECTION WAS RIGHT
      if ($connection->connect_errno) {
          printf("Connection failed: %s\n", $mysqli->connect_error);
          exit();
      }
      //MAKING A SELECT QUERY
      /* Consultas de selección que devuelven un conjunto de resultados */
      if ($result = $connection->query("SELECT * FROM REPARACIONES;")) {
          printf("<p>The select query returned %d rows.</p>", $result->num_rows);
      ?>

          <!-- PRINT THE TABLE AND THE HEADER -->
          <table border="1">
          <thead>
            <tr>
              <th>IdReparacion</th>
              <th>Matricula</th>
              <th>FechaEntrada</th>
              <th>Km</th>
              <th>Averia</th>
              <th>FechaSalida</th>
                <th>Reparado</th>
                <th>Observaciones</th>
                <th>Editar</th>
                <th>Borrar</th>
                <th>Asignar</th>
                <th>Pieza</th>
                <th>Mostrar</th>
                <th>Mostrar_Piezas</th>
          </thead>

      <?php
          //FETCHING OBJECTS FROM THE RESULT SET
          //THE LOOP CONTINUES WHILE WE HAVE ANY OBJECT (Query Row) LEFT
          while($obj = $result->fetch_object()) {
              //PRINTING EACH ROW
              echo "<tr>";
              echo "<td>".$obj->IdReparacion."</td>";
              echo "<td>".$obj->Matricula."</td>";
              echo "<td>".$obj->FechaEntrada."</td>";
              echo "<td>".$obj->Km."</td>";
              echo "<td>".$obj->Averia."</td>";
              echo "<td>".$obj->FechaSalida."</td>";
              echo "<td>".$obj->Reparado."</td>";
              echo "<td>".$obj->Observaciones."</td>";
              echo "<td><a href='editar.php?id=$obj->IdReparacion&mat=$obj->Matricula&fent=$obj->FechaEntrada&km=$obj->Km&av=$obj->Averia&fsal=$obj->FechaSalida&obs=$obj->Observaciones&rep=$obj->Reparado'><img width=17 src='imagen//mod.png'/></a></td>";
              echo "<td><a href='borrar.php?id=$obj->IdReparacion'><img width=20 src='imagen//borrar.png'/></a></td>";
              echo "<td><a href='asignar_empleados.php?id=$obj->IdReparacion'><img width=26 src='imagen//mec.png'/></a></td>";
              echo "<td><a href='asignar_piezas.php?id=$obj->IdReparacion'><img width=26 src='imagen//piez.png'/></a></td>";
              echo "<td><a href='mostrar_empleados.php?id=$obj->IdReparacion'><img width=26 src= 'imagen//mec.png'/></a></td>";
              echo "<td><a href='mostrar_piezas.php?id=$obj->IdReparacion'><img width=26 src='imagen//piez.png'/></a></td>";
              echo "</tr>";
            }
          echo "<td colspan=10><a href='crear.php'><img style='float:right' width=35 src='imagen//mas.png'/></a></td>";
          
          //Free the result. Avoid High Memory Usages
          $result->close();
          unset($obj);
          unset($connection);
      } //END OF THE IF CHECKING IF THE QUERY WAS RIGHT
    ?>
  </body>
</html>