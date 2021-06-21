<?php 

include "parciales/header.php";
 ?>
<section class="fdb-block bg-dark bg-image-over">
	<div class="container">
		   <form id="Iniciar" method="post">
		 	  <div class="form">
			  <h4>Iniciar Sesión</h4>
		        <input type="hidden" name="action" value="loguear_usuario">
				<input type="text" id="user" placeholder="&#128273;user" name="usuario">
				<input type="password" id="password" placeholder="&#128273;ingresa tu contraseña" name="password">
				<input type="submit" value="Iniciar sesión">		
	         </div>
           </form>

	</div>
</section>

