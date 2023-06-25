<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['Nusu']) >= 1 && strlen($_POST['Ncontra']) >= 1) {
	    $usu = trim($_POST['Nusu']);
	    $contra = trim($_POST['Ncontra']);
	
	    $consulta = "INSERT INTO usuario(nomb_usuario, contraseña) VALUES ('$usu','$contra')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
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