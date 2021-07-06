<?php 
//Obtengo la data del user con el id que guarde en la esion
if(!estaLogueado()){
    //Si no esta logueado lo mandamos al inicio
   redirectTo('?pagina=inicio');
}

$productos= getProductosbyMarca($_GET['id']); 

include "parciales/header.php";
?>

 <section class="fdb-block py-5">
      <div class="container">

                <h1 class="text-center mb-4">Productos</h1>

                <div class="row">
                    <?php foreach ($productos as $producto) { ?>
                    <div class="col-5">
                        <div class="card">
                            <div class="card-body">
                            <img class="w-100"
                            src="./images/<?php echo $producto['imagen'];?>">
                                <h3><?php echo $producto['nombre']?></h3>
                            </div>
                                <form action="">
                                    <input type="hidden" name="action" href="" value="registrarCompras">
                                    <button type="submit" class="btn btn-primary">Agregar a carrito</button>
                                </form>
                            </div>
                        </div>
                  <?php } ;?>
                </div>
          </div>
</section>