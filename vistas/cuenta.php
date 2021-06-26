<?php 

if(!estaLogueado()){
    //Si no esta logueado lo mandamos al inicio
    redirectTo('?pagina=inicio');
}

//Obtengo la data del user con el id que guarde en la esion
$user = getUserById($_SESSION['id']);

include "parciales/header.php";
?>

    <section class="fdb-block py-5">
        <div class="container">

            <h1 class="text-center mb-5">Mi Cuenta</h1>

            <div class="row">
                <div class="col-5">
                    <div class="card">
                        <div class="card-body">
                            <h3>Datos de la cuenta</h3>
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="">Usuario</label>
                                    <input type="text" class="form-control" name="usuario" value="<?php echo $user['usuario'];?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="">Teléfono</label>
                                    <input type="text" class="form-control" name="telefono" value="<?php echo $user['telefono'];?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" class="form-control" name="correo" value="<?php echo $user['correo'];?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Modificar Contraseña</label>
                                    <input type="password" minlength="4" class="form-control" name="password" placeholder="Para mantener la misma dejar vacio">
                                </div>
                                <input type="hidden" name="action" value="actualizar_usuario">
                                <button type="submit" class="btn btn-primary">Actualizar</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-7">
                    <h3>Mis compras</h3>
                </div>
            </div>
        </div>
    </section>