<?php 
//Obtengo la data del user con el id que guarde en la esion
if(!estaLogueado()){
    //Si no esta logueado lo mandamos al inicio
   redirectTo('?pagina=inicio');
}
$idProducto = getCompras($_GET);

include "parciales/header.php";

?>

<section class="fdb-block py-5">
    <table class="table table-light table-bordered">
      <div class="container">
                <h1 class="text-center mb-4">Compras</h1>
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Imagen</th>
                     <th scope="col">Producto</th>
                     <th scope="col">Cantidad</th>
                     <th scope="col">Precio</th>
                     <th scope="col">Total</th>
                     <th scope="col">Eliminar</th>
                  </tr>
                </thead>
         <tbody>
            <?php foreach ($idProducto as $producto) : ?>
                    <div class="col-5">
                          <tr> 
                          <td class="pt-5"><?php echo $producto['idProducto'];?></td>
                          <td class="pt-5"><?php echo $producto['nombre'];?></td>
                          <td class="pt-5"><?php echo $producto['Cantidad'];?></td>
                          <td class="pt-5"><?php echo $producto['preciounitario'];?></td>
                          <td class="pt-5"><?php echo number_format ($producto['preciounitario']*$producto['Cantidad'],2);?></td>

                          <form id="eliminar"  method="post">
                            <input type="hidden" name="id" 
                            value="<?php echo $producto['idProducto'];?>">
                            <td class="pt-5"><button class="btn btn-danger" type="submit" name="action" value="eliminar"><i class="icon ion-md-trash">Eliminar</i></button>

                          </form>
                    </div>
             <?php endforeach;?>
         </tbody>
          </div>
    </table>
</section>