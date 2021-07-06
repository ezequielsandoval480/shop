<?php 

//Obtengo la data del user con el id que guarde en la esion

include "parciales/header.php";
?>

    <section class="fdb-block py-5">
                 <div class="container">
                 <div class="col-md-12">
                    <h1 class="text-center mb-5">Marcas</h1>

                <?php foreach ($marcas as $marca) : ?>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <a href="?pagina=productos&id=<?php echo $marca['id'];?>" class="card-body">  
                                <h2><?php echo $marca['nombre'];?></h2>    
                                </a>
                            </div>
                         </div>
                    </div>
                <?php endforeach;?>
                 </div>
                    
              </div>
    </section>
