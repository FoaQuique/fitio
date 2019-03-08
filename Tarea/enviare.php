<?php
 $destino="Quiquemonico80@gmail.com";
 $nombre=$_POST["nombre"];
 $correo=$_POST["correo"];
 $mensaje=$_POST["mensaje"];
 $contenido="nombre: ".$nombre."\ncorreo: ".$correo."\nmensaje: ".$mensaje;
 mail($destino,"Contacto", $contenido);
 header("Location: index.html");

 
 

?>
