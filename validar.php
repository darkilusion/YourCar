<?php 
	session_start();
	require'database.php';
	$db=new Database();
	$username=$_POST['email'];
	$pass=$_POST['pwd'];
	$sql2 = $db->query("SELECT * FROM usuario WHERE rut_usuario='$username'");
	$sql2 = $sql2->fetchAll();
	foreach($sql2 as $row){
		$id=$row['id_usuario'];
		$f1=$row['nombre_usuario'];
		$f2=$row['apellido_usuario'];
		$f3=$row['dinero'];
		$f4=$row['rut_usuario'];
		$f5=$row['correo'];
		$f6=$row['password'];
	}
	if($username==$f4){
		if($pass==$f6){
			$_SESSION['dinero']=$f3;
			$_SESSION['nombre_usuario']=$f1;
			$_SESSION['apellido_usuario']=$f2;
			$_SESSION['id']=$id;
			echo "<script>location.href='index.php'</script>";
		}
		else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
			echo "<script>location.href='login.php'</script>";
		}
	}
	else{ 
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		echo "<script>location.href='registro.php'</script>"; 
	}
?>
