
<html>
<head>
<?php
session_start();
?>
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
			<img src="img2.jpg" alt="Comida" style="width:100%;height:300px">
		  </div>
		
		  <div class="item">
			<img src="img3.jpg" alt="New york" style="width:100%;height:300px">
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
			<li class="active"><a class="navbar-brand" href="pag 1.html">YourCar</a>
		</div>
		<ul class="nav navbar-nav">
			<li><a href="#">Page 1</a></li>
			<li><a href="#">Compra tu automovil</a></li>
			<li><a href="#">Subastas</a></li>
			<li><a href="#">Comentarios</a></li>
			<li><a href="#">Quienes Somos</a></li>
			
		</ul>
	<?php
if(isset($_SESSION['id'])){
	$f3=$_SESSION['dinero'];
		echo "<span>$f3</span>";
	echo '<ul class="nav navbar-nav navbar-right">';
			echo '<li><a href="close.php"><span class="glyphicon glyphicon-user"></span> Cerrar Sesion</a></li>';
			    echo'</ul>';
}
else{
			echo '<ul class="nav navbar-nav navbar-right">';
			echo '<li><a href="Registro.html"><span class="glyphicon glyphicon-user"></span> Registrarse</a></li>';
			echo '<li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Logueate</a></li>';
		    echo'</ul>';
}
?>

	</div>
</nav>
	<!---  CUERPO MAN !--->
	<br>
	  <div class="container marketing">
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="img1.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Subastas </h2>
          <p>Mira nuestras subastas activa.</p>
          <p><a class="btn btn-default" href="contacto.html" role="button">Subastas &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="img2.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Comentarios</h2>
          <p>Deja o revisa, algunas de nuestras reseñas, Siempre mejorando para nuestros usuarios.</p>
          <p><a class="btn btn-default" href="menu.html" role="button">Dejanos tu comentario &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="img4.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Tenemos estacionamiento privado !</h2>
          <p>Podras venir y despreocuparte de el estacionamiento y poder disfrutar de su comida.</p>
          <p><a class="btn btn-default" href="#" role="button">RESERVAS ! &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
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