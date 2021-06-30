<?php 
//Obtengo la data del user con el id que guarde en la esion
if(!estaLogueado()){
    //Si no esta logueado lo mandamos al inicio
    redirectTo('?pagina=inicio');
}

$producto = $_GET['id'];

include "parciales/header.php";
?>

    <section class="fdb-block py-5">
        <div class="container">

            <h1 class="text-center mb-5">Productos</h1>

            <div class="row">
                <div class="col-5">
                    <div class="card">
                        <div class="card-body">
                        <img height="130px"
                        src="./images/<?php echo $producto['imagen'];?>">
                            <h3><?php echo $producto['Nombre']?></h3>
                                
                                </div>
                                <input type="hidden" name="action" value="actualizar_usuario">
                                <button type="submit" class="btn btn-primary">Agregar a carrito</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-7">
                </div>
            </div>
        </div>
    </section>