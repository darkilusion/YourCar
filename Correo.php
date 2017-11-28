<?php
	session_start();
	require'database.php';
$db=new Database();
	$idvendedor=$_POST['idv'];
	$sql3 = $db->query("SELECT nombre_usuario, apellido_usuario, rut_usuario, correo, direccion FROM usuario WHERE id_usuario='".$_SESSION["id"]."'");
	$sql3 = $sql3->fetchAll();
	foreach($sql3 as $row){
			$f = $row['nombre_usuario'];
			$f2=$row['apellido_usuario'];
			$f3=$row['rut_usuario'];
			$f4=$row['correo'];
			$f5=$row['direccion'];
	}
	$sql4 = $db->query("SELECT nombre_usuario, apellido_usuario, rut_usuario, correo, direccion FROM usuario WHERE id_usuario='$idvendedor'");
	$sql4 = $sql4->fetchAll();
	foreach($sql4 as $row){
			$f7 = $row['nombre_usuario'];
			$f8=$row['apellido_usuario'];
			$f9=$row['rut_usuario'];
			$f6=$row['correo'];
			$f10=$row['direccion'];
	}
	$destino = $f6;
	$nombre = $f. " " .$f2;
	$correo = $f4;
	$Origen = "From: postmaster@localhost";
	$mensaje = " Esta interesado en tu vehiculo puesto a la venta atravez de nuestro sistema web. !\n Gracias por preferir yourcar.com";
	$contenido = "Nombre: ". $nombre . "\n Correo : ". $correo . "\n Direccion : ". $f5 . " \n". $mensaje ;

	mail($destino, "Contacto", $contenido, $Origen);
	
	// -------------------------------------------------- OTRO MAIL ---------------------------------
	
	$destino = $f4;
	$nombre = $f7. " " .$f8;
	$correo = $f6;
	$mensaje = "Datos del usuario el cual esta vendiendo el vehiculo \n Gracias por preferir yourcar.com";
	$contenido = "Nombre: ". $nombre . "\n Correo : ". $correo . "\n Direccion : ". $f5 . " \n". $mensaje ;
		
	mail($destino, "Contacto", $contenido, $Origen);
	
	header("Location: index.php")
?>