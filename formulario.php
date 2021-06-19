<?php 
include ("includes/core.php");
 ?>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="css/formulario.css">

<body>
	<div class="contenedor-form">

		   <form id="Iniciar" action="" method="post">
			
		 	  <div class="form">
			  <h4>Iniciar Sesión</h4>
		        <input type="hidden" name="action" value="loguear_usuario">
				<input type="text" id="user" placeholder="&#128273;user" name="usuario">
				<input type="password" id="contraseña" placeholder="&#128273;ingresa tu contraseña" name="password">
				<input type="submit" value="Iniciar sesión">
				
						
	         </div>
           </form>
	       
	</div>

	
	 
</body>
<script src="js/jquery-3.5.1.min.js"></script>
 <script src="js/main.js"></script>	
