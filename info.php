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
			if(isset($_SESSION['id'])){
				echo '<ul class="nav navbar-nav navbar-right">';
				echo '<li class="dropdown">';
				echo '<a class="dropdown-toggle" data-toggle="dropdown" href="#">'.$_SESSION["nombre_usuario"];
				echo '<span class="caret"></span></a>';
				echo '<ul class="dropdown-menu">';
					echo '<li><a href="agree.php">Vender vehiculo.</a></li>';
					echo '<li><a href="asubasta.php">Subastar vehico.</a></li>';
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
<div class="container">
		<div class="panel panel-default">
		  <div class="panel-heading" id="ok"> <h3>¿Quienes Somos? </h3></div>
		  <div class="panel-body" id="oka">
				<div class="page-content default-pagetemp">
		<div class="container post-wrap">
			<div class="row-fluid">
				<div id="content" class="span8">
					<div class="post clearfix" id="post-53">
						<div class="skepost">
							<h4><strong>INFORMACIÓN</strong></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ut scelerisque turpis. Maecenas arcu ante, malesuada a pharetra vel, placerat ut sapien. Mauris nec felis lacinia, rhoncus massa quis, dictum lectus. Sed euismod nisi in vehicula sodales. Integer sit amet eleifend dolor. Nullam efficitur risus sed mauris sollicitudin ultrices. Proin mauris arcu, luctus ac turpis a, tincidunt placerat arcu. Phasellus venenatis consectetur hendrerit. Maecenas pulvinar eros sit amet lectus pellentesque, at maximus nibh ornare. Sed pharetra volutpat felis, quis cursus lorem mattis quis.

Phasellus id diam non dolor rutrum pretium. Quisque id posuere tortor. Morbi sodales diam dolor, ac ultricies felis maximus nec. In ipsum justo, vulputate non congue ut, pharetra non sem. Morbi neque est, congue nec vestibulum sit amet, rutrum et libero. Nulla vehicula faucibus consequat. Mauris in mi metus. Curabitur feugiat hendrerit justo, non volutpat lectus aliquet quis. Integer sed justo id ipsum lobortis tristique quis at orci. Sed pharetra, arcu quis dictum tincidunt, lectus tellus bibendum mi, nec malesuada tellus erat et tellus. Duis leo augue, dignissim ac euismod sit amet, vehicula quis felis. Vivamus quis venenatis nibh. Integer pulvinar iaculis orci, quis imperdiet metus congue sit amet.

Etiam consequat tincidunt augue eget consequat. Aenean vestibulum elit ut quam pulvinar, sed venenatis libero interdum. Aliquam in mauris ut erat vehicula posuere eu vitae sem. Donec ultrices efficitur libero ut venenatis. Sed urna ipsum, fringilla eget nunc eget, congue rhoncus urna. Curabitur nisl purus, fermentum eu neque at, fermentum imperdiet eros. Nulla ut metus ut risus viverra luctus vel non est. Praesent sagittis magna et elit lacinia, a suscipit tellus lobortis. Quisque a ornare neque. In non pulvinar tellus, eu eleifend enim. Ut dignissim turpis non posuere tempus. Curabitur tincidunt pulvinar leo tristique posuere. Nulla id sapien euismod, suscipit tortor eu, mollis tortor.

Donec blandit, quam at commodo mattis, lectus mauris egestas ligula, eget porta ante justo in mi. Vivamus porttitor lobortis tincidunt. Pellentesque massa risus, faucibus ac dolor ut, congue fringilla dolor. Praesent vehicula odio ac est rutrum, id pharetra enim aliquet. Maecenas eu tellus ac dui lacinia tempor. Nullam bibendum eros lorem, a mollis tortor suscipit sit amet. Nulla tincidunt nisi eu purus rhoncus placerat. Vivamus ut augue nec odio mollis maximus. Vivamus tincidunt lectus id lorem fermentum, vehicula semper arcu vulputate. Vestibulum congue mattis pulvinar. Morbi blandit feugiat arcu, quis ornare arcu hendrerit et. Morbi hendrerit neque risus, eu maximus mauris dignissim eget. Morbi vitae urna sollicitudin, mollis massa at, congue justo. Phasellus dapibus leo neque, sed egestas velit congue vel. Aenean sit amet nibh vitae diam rhoncus vehicula sit amet quis dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.

Ut venenatis interdum augue, id imperdiet magna dapibus eu. Phasellus vel porta nibh. Etiam varius elit venenatis mauris egestas, sed iaculis ligula lobortis. Praesent mauris leo, gravida ac ante nec, aliquam viverra justo. Donec ut nisl quis dui dapibus tincidunt non ut sapien. Ut tempor arcu a est sagittis tristique. Fusce sodales tortor mi, accumsan euismod ex imperdiet eget. Praesent vel leo ut lectus lacinia aliquam quis aliquam enim. Praesent sem metus, vulputate quis sapien nec, bibendum lacinia sem. Nam tincidunt augue et mi tincidunt, nec vehicula velit iaculis. Ut a convallis justo. Phasellus suscipit nulla vel orci imperdiet varius.</p>
			<address><br /> Puedes contactarnos!<br>
			Diego Portales 555,Temuco,Chile<br />
			Numero:+569 56815288<br />
			Email:contacto@yourcar.com<br />
			</address>
		  </div>
		</div>
	</div>
</div>
</div>
</div>
</div>
</div>
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
<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>