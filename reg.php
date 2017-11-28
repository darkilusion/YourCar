<?php
$rut=$_POST['rut'];
$npassword=$_POST['password'];
$name=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['email'];
$apell=$_POST['apellido'];
require'database.php';
$db=new Database();
            
if(isset($_POST['boton']))
{
    if($_POST['nombre']=='' or $_POST['apellido'] == '' or $_POST['password'] == '' or $_POST['password2'] == '' or $_POST['rut']=='' )
	{
        echo '<div class="error">LLENE TODOS LOS CAMPOS.</div>';
    }
    else
    {
        $sql = "SELECT * FROM usuario";
		$rec = $db->query($sql);
	$rec = $rec->fetchAll();
	foreach($rec as $row){
		$us= $row['correo'];
		$ru=$row['rut_usuario'];
		}
        $verificar_usuario = 0; 
		if(isset($_POST['boton'])){
            if($us == $_POST['correo'] or $ru==$_POST['rut'])
            {
                $verificar_usuario = 1;
            }
		}
        } 
 
        if($verificar_usuario == 0)
        {
            if($_POST['password'] == $_POST['password2'])
            {
                $sql = "INSERT INTO usuario(nombre_usuario,apellido_usuario,rut_usuario,correo,password) VALUES ('$name','$apell','$rut','$correo','$npassword')";
                $rec2 = $db->prepare($sql);
				$rec2->execute();
 
                	echo '<script>alert("Registro Completado con Exito")</script> ';
					echo "<script>location.href='index.php'</script>";          }
            else
            {
                	echo '<script>alert("Contraseñas No Coinciden")</script> ';
					echo "<script>location.href='index.php'</script>";
            }
        }
        else
        {
                	echo '<script>alert("Nombre de usuario o rut invalido")</script> ';
					echo "<script>location.href='index.php'</script>";
        }
    }
?>