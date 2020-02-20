<?php 


include("db.php");
include("estilos.css");
include

if (isset($_POST['register'])) {
   if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['telefono']) >=1 && strlen($_POST['mensaje']) >= 1){    
	    $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $telefono = trim($_POST['telefono']);
        $mensaje = trim($_POST['mensaje']);
	    $fechareg = date("d/m/y");
	    $consulta="INSERT INTO datos ( nombre , email, telefono, mensaje, fecha_reg) VALUES ('$name','$email','$telefono','$mensaje','$fechareg')";
        $resultado= mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok" >¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }


    }

?>