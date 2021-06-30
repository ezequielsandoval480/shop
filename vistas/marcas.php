<?php 

if(!estaLogueado()){
    //Si no esta logueado lo mandamos al inicio
    redirectTo('?pagina=inicio');
}

//Obtengo la data del user con el id que guarde en la esion

include "parciales/header.php";
?>
 <form action="" method="get">
    <section class="fdb-block py-5">
         <div class="container">
         <div class="col-md-12">
            <h1 class="text-center mb-5">Marcas</h1>

     
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <a href="?pagina=productos" class="card-body">  
                        <h2>Mercedes Benz</h2>    
                        </a>
                    </div>
                </div>
            </div>


             <div class="row">
                <div class="col-12">
                    <div class="card">
                        <a href="?pagina=productos" class="card-body">  
                        <h2>Peugeot</h2>    
                        </a>
                    </div>
                </div>
             </div>
            
             <div class="row">
                <div class="col-12">
                    <div class="card">
                        <a href="?pagina=productos" class="card-body">  
                        <h2>Toyota</h2>    
                        </a>
                    </div>
                </div>
             </div>
  

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <a href="?pagina=productos" class="card-body">  
                        <h2>Hyundai</h2>    
                        </a>
                    </div>
                </div>
            </div>

             <div class="row">
                <div class="col-12">
                    <div class="card">
                        <a href="?pagina=productos" class="card-body">  
                        <h2>Ford</h2>    
                        </a>
                    </div>
                </div>
             </div>
            
             <div class="row">
                <div class="col-12">
                    <div class="card">
                        <a href="?pagina=productos" class="card-body">  
                        <h2>Renault</h2>    
                        </a>
                    </div>
                </div>
             </div>
        

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <a href="?pagina=productos" class="card-body">  
                        <h2>Chevrolet</h2>    
                        </a>
                    </div>
                </div>
            </div>
        

             <div class="row">
                <div class="col-12">
                    <div class="card">
                        <a href="?pagina=productos" class="card-body">  
                        <h2>Fiat</h2>    
                        </a>
                    </div>
                </div>
             </div>
            
             <div class="row">
                <div class="col-12">
                    <div class="card">
                        <a href="?pagina=productos"  class="card-body">  
                        <h2>Citroen</h2>    
                        </a>
                    </div>
                </div>
             </div>

              <div class="row">
                <div class="col-12">
                    <div class="card">
                        <a  href="?pagina=productos" class="card-body">  
                        <h2>Volkswagen</h2>    
                        </a>
                    </div>
                </div>
             </div>
            </div>
            
        </div>
    </section>
</form>