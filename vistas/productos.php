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
                                <h3>Precio:$<?php echo $producto['precio']?></h3>
                                <h3>Cantidad</h3>
                            </div>
                                <form id="AgregaralCarrito" method="post">

                                    <input type="hidden" name="idProducto" id="id" value="<?php echo $producto['id'];?>">
                                     <input type="hidden" name="nombre" id="nombre" "value="<?php echo $producto['nombre'];?>">
                                     <input type="hidden" name="preciounitario" id="precio" value="<?php echo $producto['precio'];?>">
                                    <input type="number" name="Cantidad" id="Cantidad" value="1">
                                      <input type="hidden" name="action" href="?pagina=compras" value="registrarCompras">
                                    <button type="submit" class="btn btn-primary">Agregar a carrito</button>
                                    
                                </form>
                            </div>
                        </div>
                  <?php } ;?>
                </div>
          </div>
</section>