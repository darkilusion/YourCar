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
			<li><a href="subastas.php">Subastas</a></li>
			<li><a href="comentarios.php">Comentarios</a></li>
		</ul>
		<?php
			session_start();
			require'database.php';
			$db=new Database();
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
		<?php 	
			$idauto=$_POST['idv'];
	$sql3 = $db->query("SELECT * FROM subastas WHERE id_vehiculo='$idauto'");
	$sql3 = $sql3->fetchAll();
	foreach($sql3 as $row){
		$a0=$row['id_vehiculo'];
		$a1=$row['Nombre'];
		$a2=$row['Apellido'];
		$a3=$row['Direccion'];
		$a4=$row['Telefono'];
		$a5=$row['Email'];
		$a6=$row['Tvehiculo'];
		$a7=$row['Marca'];
		$a8=$row['Modelo'];
		$a9=$row['Ano'];
		$a10=$row['Tcombustible'];
		$a11=$row['Patente'];
		$a12=$row['Kilometraje'];
		$a13=$row['Tdireccion'];
		$a14=$row['Ttecho'];
		$a15=$row['Precio'];
		$a16=$row['Fecha'];
		$a17=$row['Fechai'];
		$a18=$row['Estado'];
		$a19=$row['Pfoto'];
		$a20=$row['id_comprador'];
		$a21=$row['id_vendedor'];
		$a22=$row['precio_mayor'];
	}?>
	</div>
</nav>
<div class="container">
  <h2>Subasta tu vehiculo ! </h2>
  <br></br>
  <form action="asubasta.php" method="post" class="login">
	<div class="row">
	<h3>Informacion Vendedor</h3>
	<br></br>
	<div class="col-lg-6">
	<div>
	  <label for="usr">Nombre:</label>
	  <?php
		echo '<input type="text" class="form-control" id="nombre" name="nombre" value="'.$_SESSION["nombre_usuario"].'">';
	  ?>
	</div>
	<div>
	  <label for="usr">Apellido:</label>
	  <?php
		echo '<input type="text" class="form-control" id="nombre" name="apellido" value="'.$_SESSION["apellido_usuario"].'">';
	  ?>
	</div>
	<div>
	  <label for="usr">Dirección:</label>
<?php			echo '<input type="text" class="form-control" id="direccion" value="'.$a3.'" name="direccion" required>';?>
	</div>
	</div>
	<div class="col-lg-6">
		<label for="usr">Numero de Contacto:</label>
<?php			echo '<input type="number" class="form-control" id="Telefono" value="'.$a4.'" name="Telefono" maxlength="9"required>';?>
		<label for="usr">Direccion de email :</label>
<?php			echo '<input type="text" class="form-control" id="email" value="'.$a5.'" name="email"required>';?>
	</div>
	</div>
	<h3>Informacion Vehiculo</h3>
	<br></br>
	<div class="row">
		<div class="col-md-6 col-sm-12 form-row">
			<div class="form-group">
				<span id="IdVisorRegion" class="hidden"></span>
					<select class="dropdown form-control" id="Tipo" name="Tipo">
	<?php	
		if($a6 == "Auto"){
				echo '<option value="default">Tipo De Vehiculo</option>';
				echo '<option value="Camioneta">Camioneta</option>';
				echo '  <option value="Moto">Moto</option>
						<option value="Camion">Camion</option>
						<option value="Auto" selected>Auto</option>';
			}
		if($a6 == "Camion"){
				echo '<option value="default">Tipo De Vehiculo</option>';
				echo '<option value="Camioneta">Camioneta</option>';
				echo '  <option value="Moto">Moto</option>
						<option value="Camion" selected>Camion</option>
						<option value="Auto">Auto</option>';
			}
		if($a6 == "Moto"){
				echo '<option value="default">Tipo De Vehiculo</option>';
				echo '<option value="Camioneta">Camioneta</option>';
				echo '  <option value="Moto" selected>Moto</option>
						<option value="Camion">Camion</option>
						<option value="Auto">Auto</option>';
			}
		if($a6 == "Camioneta"){
				echo '<option value="default">Tipo De Vehiculo</option>';
				echo '<option value="Camioneta" selected>Camioneta</option>';
				echo '  <option value="Moto">Moto</option>
						<option value="Camion">Camion</option>
						<option value="Auto">Auto</option>';
			}
		?>
					</select>
			</div>
		</div>
		<div class="col-md-6 col-sm-12 form-row">
             <div class="form-group">
             <span id="IdVisorRegion" class="hidden"></span>
              <select class="dropdown form-control" id="Marca" name="Marca">
				<option value="default">Seleccione Marca</option>
				<option value="Peugeot">Peugeot</option>
				<option value="Suzuki">Suzuki</option>
				<option value="Kia Motors">Kia Motors</option>
				<option value="Chevrolet">Chevrolet</option>
				<option value="Toyota">Toyota</option>
				<option value="Nissan">Nissan</option>
				<option value="Hyundai">Hyundai</option>
				<option value="Ford">Ford</option>
              </select>
			 </div>
        </div>
	</div>
	<div class="row">
		<div class="col-md-6 col-sm-12 form-row">
			<label for="usr">Modelo Vehiculo:</label>
			<?php echo "<input type='text' class='form-control' id='Modelo' name='Modelo' value='$a8'required>";?>
		</div>
		<div class="col-md-6 col-sm-12 form-row">
			<label for="usr">Año Vehiculo:</label>
<?php			echo '<input type="number" class="form-control" id="Ano" name="Ano"	value= "'.$a9.'" maxlength="4"required>';?>
		</div>
	</div>
	<br></br>
    <div class="row">
		<div class="col-md-6 col-sm-12 form-row">
             <span id="IdVisorRegion" class="hidden"></span>
				<label for="usr">Tipo de combustible :</label>
              <select class="dropdown form-control" id="Combustible" name="Combustible">
				<option value="default">Tipo De combustible</option>
				<option value="Diesel">Diesel(Petroleo)</option>
				<option value="Bencinero">Bencinero</option>
				<option value="Electrico">Electrico</option>
				<option value="Gas">Gas</option>
				<option value="Hibrido">Hibrido</option>
				<option value="Otro">Otro</option>
			 </select>
        </div>
	<div class="col-md-6 col-sm-12 form-row">
	  <label for="usr">Patente:</label>
<?php			echo '  <input type="text" class="form-control" id="Patente" name="Patente" maxlength="6" value="'.$a11.'"required>';?>
	</div>
	</div>
	<h3>Informacion Adicional</h3>
	<br></br>
	<div class="row">
		<div class="col-md-6 col-sm-12 form-row">
			<label for="usr">Kilometraje:</label>
<?php			echo '<input type="number" class="form-control" id="kilometraje" name="kilometraje" value="'.$a12.'"required>';?>
		</div>
		<div class="col-md-6 col-sm-12 form-row">
			<div class="form-group">
				<span id="IdVisordireccion" class="hidden"></span>
					<label for="usr">Tipo de direccion :</label>
					<select class="dropdown form-control" id="tpdireccion" name="tpdireccion"required>
					<option value="default">Tipo De Direccion</option>
					<option value="asistida">Asistida</option>
					<option value="Hidraulica">Hidraulica</option>
					<option value="Mecanica">Mecanica</option>
				</select>
			</div>
		</div>
		<div class="col-md-6 col-sm-12 form-row">
			<div class="form-group">
				<span id="IdVisortecho" class="hidden"></span>
					<label for="usr">Tipo de techo:</label>
					<select class="dropdown form-control" id="techo" name="techo"required>
					<option value="default">Tipo De techo</option>
					<option value="Ninguno">Ninguno</option>
					<option value="Electrico">Eléctrico</option>
					<option value="Manual">Manual</option>
					<option value="Panoramico">Panorámico</option>
				</select>
			</div>
		</div >
	</div>
	<div class="row">
		<div class="col-md-6 col-sm-12 form-row">
			<label for="usr">Precio inicial vehiculo:</label>
<?php			echo '<input type="number" class="form-control" id="Precio" name="Precio"	value="'.$a15.'"required>'?>
		</div>
		<div class="col-md-6 col-sm-12 form-row">
			<label for="usr">Fecha para el fin de la subasta :</label>
			<input type="date" name="fecha_fin" id="fecha_fin" class="form-control" required>
			<input type="time" name="hora_fin" id="hora_fin" class="form-control" required>
		</div>
	</div>
	<label for="usr">Foto :</label>
	<input type="text" class="form-control" id="foto" name="foto"	placeholder="Link de la imagen">
	<br></br>
	<button type="submit" class="btn btn-default" name="boton" id="boton">Publicar!</button>
</div>
</form>
<?php
if (isset($_POST['boton']))
{
	$id_vendedor=$_SESSION['id'];
	$Nombre=$_POST['nombre'];
	$Apellido=$_POST['apellido'];
	$Direccion=$_POST['direccion'];
	$Numero=$_POST['Telefono'];
	$Email=$_POST['Email'];
	$Patente=$_POST['Patente'];
	$Tipo=$_POST['Tipo'];
	$Marca=$_POST['Marca'];
	$Ano=$_POST['Ano'];
	$Combustible=$_POST['Combustible'];
	$kilometraje=$_POST['kilometraje'];
	$techo=$_POST['techo'];
	$Precio=$_POST['Precio'];
	$Modelo=$_POST['Modelo'];
	$fecha_fin = $_POST["fecha_fin"];//Esto no se insertara en la tabla
    $hora_fin = $_POST["hora_fin"];
	$Fecha= "$fecha_fin $hora_fin:00";
	$fecha_hora_actual = date("Y-m-d H:i:s");
	$foto=$_POST['foto'];
	$cantidad=1;
	$modo=2;
	$sql3 = "Update subastas set Nombre =".$Nombre.", Apellido=".$Apellido.", Direccion=".$Direccion.",Telefono=".$Telefono.", Email=".$Email.",Tvehiculo=".$Tvehiculo.",Marca=".$Marca.",Modelo=".$Modelo.",Ano=".$Ano.",Tcombustible=".$Tcombustible.",Patente=".$Patente.",Kilometraje=".$Kilometraje.",Tdireccion=".$Tdireccion.",Ttecho=".$Ttecho.",Precio=".$Precio.",Fecha=".$Fecha.",Fechai=".$Fechai.",Estado=".$Estado.",Pfoto=".$Pfoto.",id_comprador=".$id_comprador.",id_vendedor=".$id_vendedor.",precio_mayor=".$precio_mayor.") WHERE id_vehiculo= '".$a0."' "; 
                $sql3 = $db->prepare($sql3);
				$sql3->execute();
	echo "<script language='JavaScript' type='text/javascript'>alert('Su Auto fue Actualizado Exitosamente');</script>";
			echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;URL=subastas.php'>";
		
	}

?>
<hr></hr>
	<div class="container">
		<div id="footer-wrapper">
				<ul class="list-inline">
					<li>© Copyright 2017 YourCar </li>
				</ul>
		</div>
	</div>
<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>