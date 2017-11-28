<?php
session_start();

 
   if(!isset($_SESSION['id']))
   {
        echo "No hay ninguna sesion iniciada";
//esto ocurre cuando la sesion caduca.
        
   }
   else
   { 
     session_destroy();
       //echo "Has cerrado la sesion";
	   
      echo '<script>alert("Gracias Por Preferirnos hasta Luego")</script> ';
      echo "<script>location.href='index.php'</script>";
       
   }
 
 
   
?>