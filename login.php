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
	<div class="container">
	  <h2>Login</h2>
	  <form action="validar.php" method="POST">
		<div class="form-group">
		  <label for="email">Rut:</label>
		  <input type="text" class="form-control" id="email" placeholder="11.111.111-1" name="email">
		</div>
		<div class="form-group">
		  <label for="pwd">Contraseña:</label>
		  <input type="password" class="form-control" id="pwd" placeholder="Contraseña" name="pwd">
		</div>
		<div class="checkbox">
		  <label><input type="checkbox" name="remember"> Remember me</label>
		</div>
		<button type="submit" class="btn btn-default">Submit</button><br></br>
		<a href="registro.html">¿No tienes cuenta?Registrate aca!</a>.
	  </form>
	</div>
</body>
<hr></hr>
<div class="container">
	<div id="footer-wrapper">
			<ul class="list-inline">
				<li>© Copyright 2017 YourCar </li>
            </ul>
	</div>
</div>


<!--- PHP --->

