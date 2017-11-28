<html>
<head>
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
	<!div class="page-header" id="cap"!>
		<!img src="yourcar-logo.png" class="img-rounded" alt="Cinque Terre" width="300" height="100"!>
	<!/div!>
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
<body>
	<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
				<li><a class="navbar-brand" href="index.php">YourCar</a>
			</div>
			<ul class="nav navbar-nav">>
				<li><a href="ventas.php">Venta Directa</a></li>
				<li><a href="subasta.php">Subastas</a></li>
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
					echo '<li><a href="historialcompra.php">Historial de compra/venta .</a></li>';
				echo '<li class="divider"></li>';
					echo '<li><a href="close.php"><span class="glyphicon glyphicon-user"></span> Cerrar Sesion</a></li>';
				echo'</ul>';
				echo'</ul>';
			}
			else{
						echo '<ul class="nav navbar-nav navbar-right">';
						echo '<li><a href="registro.php"><span class="glyphicon glyphicon-user"></span> Registrarse</a></li>';
						echo '<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Logueate</a></li>';
						echo'</ul>';
			}
		?>
		</div>
	</nav>
</head>
<body>
			<div class="container">
			<h3> Autos ingresados a subastas. </h3>
			</div>
		<?php
			require'database.php';
			$db=new Database();
			$sql2 = $db->query("SELECT * FROM subastas where id_vendedor = '".$_SESSION['id']."';");
			$sql2 = $sql2->fetchAll();
			foreach($sql2 as $row){
			$f = $row['id_vehiculo'];
			$f2=$row['Tvehiculo'];
			$f3=$row['Marca'];
			$f4=$row['Modelo'];
			$f5=$row['Ano'];
			$f6=$row['Patente'];
			$f7=$row['Fecha'];
			
			//MOSTRAR AUTOS !
			
			echo '<div class="container">';
			echo '<form method="POST" action="msubasta.php">';
			echo '<div class="panel panel-default">';
			echo ' <div class="panel-body">';
			echo ' '.$f2.' '.$f3.' '.$f4.' '.$f5.' - Patente : '.$f6.'  - Fecha de termino : '.$f7.' ';
			echo '<input type="hidden" name="idv" id="idv" value="'.$f.'">';
			
			echo '<input type="submit" name="boton1" id="'.$f.'" value="MODIFICAR">';
			echo '</form>';
			echo '</div>';
			echo '</div>';
			echo '</div>';

			}
			
		?>
			<hr></hr>
			<div class="container">
			<h3> Autos ingresados a venta directa. </h3>
			</div>
			<hr></hr>
			
		<?php	
			$sql3 = $db->query("SELECT * FROM ventad where id_vendedor = '".$_SESSION['id']."';");
			$sql3 = $sql3->fetchAll();
			foreach($sql3 as $row){
				$f8 = $row['id_vehiculo'];
				$f9=$row['Tvehiculo'];
				$f10=$row['Marca'];
				$f11=$row['Modelo'];
				$f12=$row['Ano'];
				$f13=$row['Patente'];
				$f14=$row['Fechai'];
			
			//MOSTRAR AUTOS !
			
			echo '<div class="container">';
			echo '<form method="POST" action="mventa.php">';
			echo '<div class="panel panel-default">';
			echo ' <div class="panel-body">';
			echo ' '.$f9.' '.$f10.' '.$f11.' '.$f12.' - Patente : '.$f13.'  - Fecha de vehiculo agregado : '.$f14.' ';
			echo '<input type="hidden" name="idv" id="idv" value="'.$f8.'">';
			
			echo '<input type="submit" name="boton1" id="'.$f8.'" value="MODIFICAR">';
			echo '</form>';
			echo '</div>';
			echo '</div>';
			echo '</div>';

			}
		?>	
</body>