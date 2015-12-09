<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href=" ">
  </head>
  <body>
<style>
#principal{
  width:900px;
  margin:10px auto;

}
img{
width:250;
height:150;
}
</style>
      <?php

      	$v2=array(
      	array('id' => 0 ,'Nombre' => 'Juan','Apellidos'=>'Velasco Garcia','Direccion'=>'sevilla','Telefono'=>'661143212' ,'correo'=>'velasco@gmail.com','image'=>'wii.jpg' ),
      	array('id' => 1 ,'Nombre' => 'Santi','Apellidos' =>'Franco guerrero','Direccion'=>'sevilla','Telefono'=>'661143298' ,'correo'=>'santi@gmail.com', 'image'=>'martin.jpg' ),
      	array('id' => 2 ,'Nombre' => 'Lolo','Apellidos' =>'Lopez vazquez','Direccion'=>'sevilla','Telefono'=>'871143298' ,'correo'=>'lolo@gmail.com','image'=>'lolo.jpeg'),
      	array('id' => 3 ,'Nombre' =>'nacho','Apellidos' =>'menchaca garcia','Direccion'=>'sevilla','Telefono'=>'876643298' ,'correo'=>'nacho@gmail.com','image'=>'nacho.png'),
      	array('id' => 4 ,'Nombre' =>'norbe','Apellidos' =>'de la rosa','Direccion'=>'sevilla','Telefono'=>'875433298' ,'correo'=>'norbe@gmail.com','image'=>'norbe.jpeg'),
      	array('id' => 5 ,'Nombre' =>'noelia','Apellidos'=>'perez perez','Direccion'=>'sevilla','Telefono'=>'844443298' ,'correo'=>'noelia@gmail.com','image'=>'comic.jpg'),
      	array('id' => 6 ,'Nombre' =>'merino','Apellidos' =>'gonzalez garcia','Direccion'=>'sevilla','Telefono'=>'766143298' ,'correo'=>'merineitor@gmail.com','image'=>'merino.jpeg'),
      	array('id' => 7 ,'Nombre' =>'japon','Apellidos' =>'jara vazquez','Direccion'=>'sevilla','Telefono'=>'111143298' ,'correo'=>'japon@gmail.com','image'=>'ned.jpg'),
      	array('id' => 8 ,'Nombre' => 'dani','Apellidos' =>'de las heras','Direccion'=>'sevilla','Telefono'=>'551143298' ,'correo'=>'dani@gmail.com','image'=>'ella.jpg'),
      	array('id' => 9 ,'Nombre' => 'jous','Apellidos' =>'perez perez','Direccion'=>'sevilla','Telefono'=>'761143298' ,'correo'=>'jous@gmail.com','image'=>'hn.jpg'));
      	$datos=$v2[$_GET['id']];

       ?>
       <div id="principal">
         <div id="imagen">
           <img src="<?php echo $datos['image'];?>"/>
           <div id="datos">
       <div float="right">
       <p><b>Nombre</b>:<?php echo $datos['Nombre']." ".$datos['Apellidos'] ;?><br>

       <b>Contact Information</b><br>
       <p><b>Email:</b> <?php echo $datos['correo'];?></p>
       <p><b>Phone:</b><?php  echo $datos['Telefono'] ;?></p>
       </br>
       <p><a>StanfordWho listing</a></p>
       <p><a>URL of this page</a></p>

      </body>
      </html>
