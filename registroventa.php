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
			<img src="Banner.png" alt="New york" style="width:100%;height:300px">
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
			<li><a class="navbar-brand" href="index.html">YourCar</a>
		</div>
		<ul class="nav navbar-nav">>
			<li><a href="ventas.html">Venta Directa</a></li>
			<li><a href="subastas.html">Subastas</a></li>
			<li><a href="comentarios.html">Comentarios</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li class="active"><a href="#s"><span class="glyphicon glyphicon-user"></span> Registrarse</a></li>
			<li ><a href="Pag login.html"><span class="glyphicon glyphicon-log-in"></span> Logueate</a></li>
		</ul>
	</div>
</nav>
<div class="container">
  <h2>Ofrece tu vehiculo!</h2>
  <br></br>
  <form action="Registro.php" method="post" class="login">
	<div>
	<h3>Informacion Vendedor</h3>
	<br></br>
	<div>
	  <label for="usr">Nombre:</label>
      <input type="text" class="form-control" id="nombre" name="nombre">
	</div>
	<div>
	  <label for="usr">Apellido:</label>
      <input type="text" class="form-control" id="apellido" name="apellido">
	</div>
	<div>
	  <label for="usr">Dirección:</label>
      <input type="text" class="form-control" id="direccion" placeholder="Direccion,Calle,Número" name="direccion">
	  <label><input type="checkbox" value="">Deseo publicar mi dirección</label>
	</div>
	<div>
		<label for "usr">Selecciona tu Región:
		<span id="IdVisorRegion" class="hidden"></span>
		<select class="dropdown form-control" id="Region" name="Region">
			<option value="default">Seleccione Región</option>
			<option value="15">Arica y Parinacota</option>
			<option value="15">Arica y Parinacota</option>
			<option value="1">Tarapaca</option>
			<option value="2">Antofagasta</option>
			<option value="3">Atacama</option>
			<option value="4">Coquimbo</option>
			<option value="5">Valparaíso</option>
			<option value="6">OHiggins</option>
			<option value="7">Maule</option>
			<option value="8">Bío Bío</option>
			<option value="9">Araucanía</option>
			<option value="14">Los Ríos</option>
			<option value="10">Los Lagos</option>
			<option value="11">Aysén</option>
			<option value="12">Magallanes y Antártica Chilena</option>
			<option value="13">Metropolitana de Santiago</option>
	</select>
	</div>
	<div>
		<label for "usr">Selecciona tu Región:
		<span id="IdVisorRegion" class="hidden"></span>
		<select class="dropdown form-control" id="Comuna" name="Comuna">
			<option value="default">Seleccione Comuna</option>
		</select>
	</div>	
	<div>
		<label for="usr">Numero de Contacto:</label>
		<input type="" class="form-control" id="Telefono" placeholder="Ej:123456789" name="Telefono" maxlength="9">
	</div>	
	<div class="row">
        <div class="col-md-6 col-sm-12 form-row">
            <div class="form-group">
                <a class="boton-agregar" style="cursor: pointer;">Añadir nuevo numero</a>
            </div>
        </div>
    </div>

	<h3>Informacion Vehiculo</h3>
	<br></br>
	<div class="row">
        <div class="col-md-6 col-sm-12 form-row">
        <div class="form-group">
            <span id="IdVisorRegion" class="hidden"></span>
				<select class="dropdown form-control" id="Marca" name="Marca">
					<option value="default">Tipo De Vehiculo</option>
					<option>Camioneta</option>
					<option>4x4</option>
					<option>Camion</option>
					<option>...</option>
					<option>...</option>
					<option>...</option>
					<option>...</option>
					<option>...</option>
                </select>
        </div>
    </div>
	</div>
    <div class="row">
		<div class="col-md-6 col-sm-12 form-row">
             <div class="form-group">
             <span id="IdVisorRegion" class="hidden"></span>
              <select class="dropdown form-control" id="Marca" name="Marca">
				<option value="default">Seleccione Marca</option>
				<option>Peugeot</option>
				<option>Suzuki</option>
				<option>Kia Motors</option>
				<option>Chevrolet</option>
				<option>Toyota</option>
				<option>Nissan</option>
				<option>Hyundai</option>
				<option>Ford</option>
              </select>
			 </div>
        </div>
	</div>
    <div class="row">
		<div class="col-md-6 col-sm-12 form-row">
             <div class="form-group">
             <span id="IdVisorRegion" class="hidden"></span>
              <select class="dropdown form-control" id="Ano" name="Ano" type="range" min="1920" max="2018">
				<option value="default">Seleccione Año</option>
				<option>Falta</option>
				<option>Arreglar</option>
				<option>Esta</option>
				<option>Parte</option>
				<option>Que</option>
				<option>Me</option>
				<option>Gano</option>
				<option>Ford</option>
              </select>
			 </div>
        </div>
	</div>
    <div class="row">
		<div class="col-md-6 col-sm-12 form-row">
             <div class="form-group">
             <span id="IdVisorRegion" class="hidden"></span>
              <select class="dropdown form-control" id="Combustible" name="Combustible">
				<option value="default">Tipo De combustible</option>
				<option>Diesel(Petroleo)</option>
				<option>Bencinero</option>
				<option>Electrico</option>
				<option>Gas</option>
				<option>Hibrido</option>
				<option>Otro</option>
			 </select>
			 </div>
        </div>
	</div>
	<div>
	  <label for="usr">Patente:</label>
      <input type="text" class="form-control" id="Patente" name="Patente" maxlength="6" placeholder="Ej: AB-CD-21 Ó AB-12-34">
	</div>
	<br></br>
	<div>
	<button type="submit" class="btn btn-default" name="boton" id="boton">Publicar!</button><br></br>
	</div>
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