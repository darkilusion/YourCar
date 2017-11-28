<?php
	$f=$_POST['Nombre'];
	$f2=$_POST['Apellido'];
	$f3=$_POST['comment'];
	
	
	
	$destino = "exdsng@gmail.com";
	$nombre = $f. " " .$f2;
	$Origen = "From: postmaster@localhost";
	$mensaje = $f3;
	$contenido = "Nombre: ". $nombre . ". \n Sugerencia de comentarios : ". $mensaje ;

	mail($destino, "Contacto", $contenido, $Origen);
	header("Location: index.php")
?>