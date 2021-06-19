<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="css/formulario.css">

<body>
	 <form id="registro" action="registro.php" method="post">

	        <div class="form">
			  <h4>Crea tu cuenta</h4>
			  
				<input type="text" id="usuario"placeholder="&#128273;usuario a registrar" name="usuario">
				<input type="password" id="password" placeholder="&#128273;ingresa tu contraseña" name="password">
				<input type="email" id="correo" placeholder="&#128273;ingresa tu correo" name="correo">
				<input type="text" id="Teléfono"placeholder="&#128273;ingresa tu teléfono" name="Teléfono">
				<input type="submit" value="Registrarse" name="Registrarse">
					
	        </div>
	         </form>
	</div>
	 
	 <?php 
    print_r("$resultados")

	  ?>
</body>
<script src="js/jquery-3.5.1.min.js"></script>
 <script src="js/main.js"></script>	
