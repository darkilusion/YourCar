<html>
<head>
<meta charset="UTF-8">
	<style type="text/css">
		/*<![CDATA[*/
			div#cap {
			text-align: right;
			padding: 20px;
			}
			div#cap h1 {
			float: left;
			}
			/*]]>*/
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>YourCar</title>
	
	<meta charset="utf-8">
	<div class="banner text-center">
	  <div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
		  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		  <li data-target="#myCarousel" data-slide-to="1"></li>
		  <li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner">
		  <div class="item active">
			<img src="REMATE.jpg" alt="Vista de adentro" style="width:100%;height:300px">
		  </div>

		  <div class="item">
			<img src="remate2.jpg" alt="Comida" style="width:100%;height:300px">
		  </div>
		
		  <div class="item">
			<img src="Banner2.0.png" alt="New york" style="width:100%;height:300px">
		  </div>
		</div>

		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
		  <span class="glyphicon glyphicon-chevron-left"></span>
		  <span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
		  <span class="glyphicon glyphicon-chevron-right"></span>
		  <span class="sr-only">Next</span>
		</a>
	  </div>
	</div>
</head>
<body onload="cuenta()"> 
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
			<li class="active"><a class="navbar-brand" href="index.php">YourCar</a>
		</div>
		<ul class="nav navbar-nav">>
			<li><a href="ventas.php">Venta Directa</a></li>
			<li class="active"><a href="subastas.php">Subastas</a></li>
			<li><a href="comentarios.php">Comentarios</a></li>
		</ul>
		<?php
			session_start();
			if(isset($_SESSION['id'])){
				echo '<ul class="nav navbar-nav navbar-right">';
				echo '<li class="dropdown">';
				echo '<a class="dropdown-toggle" data-toggle="dropdown" href="#">'.$_SESSION["nombre_usuario"];
				echo '<span class="caret"></span></a>';
				echo '<ul class="dropdown-menu">';
					echo '<li><a href="agree.php">Vender vehiculo.</a></li>';
					echo '<li><a href="asubasta.php">Subastar vehiculo.</a></li>';
					echo '<li><a href="vensu.php">Articulos en venta/subasta.</a></li>';
					echo '<li><a href="historialcompra.php">Historial de compra/venta .</a></li>';
				echo '<li class="divider"></li>';
					echo '<li><a href="close.php"><span class="glyphicon glyphicon-user"></span> Cerrar Sesion</a></li>';
				echo'</ul>';
				echo'</ul>';
			}
			else{
						echo '<ul class="nav navbar-nav navbar-right">';
						  echo '<button type="button" class="btn btn-default btn-lg" id="myBtn">Login</button>';

  echo '<div class="modal fade" id="myModal" role="dialog">';
   echo ' <div class="modal-dialog">';
    
      echo '<div class="modal-content">';
        echo '<div class="modal-header" style="padding:35px 50px;">';
          echo'<button type="button" class="close" data-dismiss="modal">&times;</button>';
          echo '<h4><span class="glyphicon glyphicon-lock"></span> Login</h4>';
        echo '</div>';
        echo '<div class="modal-body" style="padding:40px 50px;">';
          echo '<form role="form" method="POST" action="validar.php">';
            echo '<div class="form-group">';
              echo '<label for="usrname"><span class="glyphicon glyphicon-user"></span> Rut</label>';
              echo '<input type="text" class="form-control" id="email" name="email" placeholder="11.111.111-1">';
            echo '</div>';
            echo '<div class="form-group">';
              echo '<label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>';
              echo '<input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter password">';
            echo '</div>';
            echo '<div class="checkbox">';
              echo '<label><input type="checkbox" value="" checked>Remember me</label>';
            echo '</div>';
              echo '<button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>';
          echo '</form>';
        echo '</div>';
        echo '<div class="modal-footer">';
          echo '<button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>';;
			echo '<p>Not a member? <a href="registro.php">Sign Up</a></p>';
          echo '<p>Forgot <a href="#">Password?</a></p>';
        echo '</div>';
      echo '</div>';
      
   echo ' </div>';
  echo '</div>' ;
echo '</div>';

						echo'</ul>';
			}
		?>
	</div>
	
</nav>
	<!---  CUERPO MAN !--->
	<br>
	<?php
require'database.php';
	$db=new Database();
	$sql2 = $db->query("SELECT * FROM subastas where estado = 0");
	$sql2 = $sql2->fetchAll();
	foreach($sql2 as $row){
		$f21=$row['id_vehiculo'];
		$f=$row['Nombre'];
		$f1=$row['Apellido'];
		$f2=$row['Direccion'];
		$f3=$row['Tvehiculo'];
		$f4=$row['Marca'];
		$f5=$row['Modelo'];
		$f6=$row['Ano'];
		$f7=$row['Tcombustible'];
		$f8=$row['Patente'];
		$f9=$row['Kilometraje'];
		$f10=$row['Tdireccion'];
		$f11=$row['Ttecho'];
		$f12=$row['Precio'];
		$f13=$row['Fecha'];
		$f22=$row['Fechai'];
		$f23=$row['Estado'];
		$f16=$row['Pfoto'];
		$f14=$row['id_comprador'];
		$f15=$row['precio_mayor'];
		$f20=$row['id_vendedor'];
		$fecha_servidor = date("Y-m-d H:i:s");
        $datetime1 = date_create($f13);
        $datetime2 = date_create($fecha_servidor);
		if($datetime1 == $datetime2){
			$sql = 'UPDATE subastas SET Estado = 1 WHERE id_vehiculo="'.$f21.'";';
					$rec2 = $db->prepare($sql);
					$rec2->execute();
		}
        $interval = $datetime1->diff($datetime2);
		$fecha_comparar = $interval->format('%R%d días %H:%I:%s');
		
				echo'<div class="container">';
				echo'<div class="panel panel-default">';
				echo" <div class='panel-heading' id='ok'> <h3> $f3 $f4 $f5 </h3></div>";
				echo'<div class="panel-body" id="oka">';
				echo'<div class="page-content default-pagetemp">';
				echo'<div class="container post-wrap">';
				echo'<div class="row-fluid">';
				echo'	<div id="content" class="span8">';
				echo'	<div class="post clearfix" id="post-53">';
				echo'		<div class="skepost">';
				echo '<div class="row">';
				echo '<div class="col-sm-4">';
				echo"<img src='$f16' class='img-rounded' alt='$f' width='304' height='236'><br/>";
				echo '</div>';
				echo '<div class="col-sm-3">';
				echo"Kilometraje:$f9 Kilometros<br/>";
				echo"Año de Auto:$f6<br/>";
				echo"Combustible:$f7<br/>";
				echo '</div>';
				echo '<div class="col-sm-4">';
				echo"Precio inicial:$ $f12<br/>";
				echo"<div id='status'></div>";

				echo"Mayor Subasta Hasta el momento:$ $f15";
				echo"<table border=0 cellspacing=0 cellpadding=0 >
<tr>
   <td><div id='cuenta'>".$fecha_comparar."</div></td>
</tr>
</table>";
				if(isset($_SESSION['id'])){
					if($_SESSION['id'] == $f20){
						echo'<button type="button" class="btn btn-success" disabled="true">Dueño de la Subasta. </button>';
					}
					else{
						if($_SESSION['id'] == $f14){
							echo'<button type="button" class="btn btn-success" disabled="true">Estas ganando la subasta. </button>';
						}
						else{
						echo'<form action="subastas.php" method="post">';
						echo'<input type="number" class="form-control" min="'.($f15+1).'"id="num" name="precio" >';
						echo '<input type="hidden" value="'.$f21.'" name="id">';
						echo'<button type="submit" class="btn btn-info" name="botonn" id="botonn">Ofertar ahora</button>';
						echo'</form>';							
						}
					}
				}
			echo '</div>';
			echo '</div>';
		echo'	</p>';
		echo'</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
</div>
</div>';
			}
		
		
	?>
<?php
	if (isset($_POST['botonn'])){
		$AUTO=$_POST['id'];
		$PRECIO = $_POST['precio'];
		$sql = 'UPDATE subastas SET precio_mayor="'.$PRECIO.'" WHERE id_vehiculo="'.$AUTO.'";';
		        $rec2 = $db->prepare($sql);
				$rec2->execute();
		$sql = 'UPDATE subastas SET id_comprador="'.$_SESSION["id"].'" WHERE id_vehiculo="'.$AUTO.'";';
		        $rec2 = $db->prepare($sql);
				$rec2->execute();
			echo "<script language='JavaScript' type='text/javascript'>alert('Vehiculo pujado con exito !.');</script>";
			echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;URL=subastas.php'>";
	}
	else{
		$fecha_servidor = date("Y-m-d H:i:s");
		$sql = 'UPDATE subastas SET Fechai="'.$fecha_servidor.'";';
		    $rec2 = $db->prepare($sql);
			$rec2->execute();
		
	}
?>
<script>
$(document).ready(function() {
      var refreshId =  setInterval( function(){
    $('#cuenta').;//actualizas el div
   }, 1000 );
});

</script
<hr></hr>
<div class="container">
	<div id="footer-wrapper">
			<ul class="list-inline">
				<li>© Copyright 2017 YourCar </li>
            </ul>
	</div>
</div>