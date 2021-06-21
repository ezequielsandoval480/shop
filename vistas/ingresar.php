<?php 

include "parciales/header.php";
 ?>
<section class="fdb-block bg-dark bg-image-over">
	<div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <form id="Iniciar" method="post">
                    <div class="form">
                    <h3 class="mb-4">Iniciar Sesión</h3>
                    <input type="hidden" name="action" value="loguear_usuario">
                    <div class="form-group">
                        <input type="text" class="form-control" id="user" placeholder="&#128273; Usuario" name="usuario">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" placeholder="&#128273; Ingresá tu contraseña" name="password">
                    </div>
                    <input type="submit" class="btn btn-warning" value="Iniciar sesión">		
                    </div>
                </form>
            </div>
        </div>
	</div>
</section>

