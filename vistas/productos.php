<?php 
//Obtengo la data del user con el id que guarde en la esion
if(!estaLogueado()){
    //Si no esta logueado lo mandamos al inicio
   redirectTo('?pagina=inicio');
}

$datosbase= getProductosbyMarca($_GET['id']);

foreach ($datosbase as $datos){ 
$datos = array(
  "nombre" => $datos['nombre'],
  "descripcion" => $datos['descripcion'],
  "precio" => $datos['precio'],
);

$datosplanos = json_encode($datos);
echo $datosplanos;
};
                                  
include "parciales/header.php";
?>

 <section class="fdb-block py-5">
      <div class="container">

                <h1 class="text-center mb-4">Productos</h1>

                <div class="row">
                    <?php foreach ($datosbase as $datos) { ?>
                    <div class="col-5">
                        <div class="card">
                            <div class="card-body">
                            <img class="w-100"
                            src="./images/<?php echo $datos['imagen'];?>">
                                <h3><?php echo $datos['nombre'];?></h3>
                                <h3>Precio:$<?php echo $datos['precio']?></h3>
                                <h3>Precio total</h3>
                                <h3>Cantidad</h3>
                            </div>
                                <form id="AgregaralCarrito" method="post">
                                    <input type="hidden" name="idProducto" id="id" value="<?php echo $datosplanos['id'];?>">
                                     <input type="hidden" name="nombre" id="nombre" "value="<?php echo $datosplanos['nombre'];?>">
                                     <input type="hidden" name="preciounitario" id="precio" value="<?php echo $datosplanos['precio'];?>">
                                    <input type="number" name="Cantidad" id="Cantidad" value="1">
                                    <input type="hidden" name="fecha" id="fecha">
                                     <input type="hidden" name="usuarioid" id="usuarioid" value="<?php echo $producto['precio'];?>">
                                      <input type="hidden" name="action" href="?pagina=compras" value="registrarCompras">
                                    <button type="submit" name="agregar" class="btn btn-primary">Agregar a carrito</button>
                                    
                                </form>
                            </div>
                        </div>
                  <?php } ;?>
                </div>
          </div>
</section>