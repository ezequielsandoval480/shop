<?php

include 'includes/core.php';

include 'parciales/header.php';

//Condicional para saber que pagina cargar
// seria misitio.com/?pagina=inicio
if(isset($_GET['pagina'])){
    include "vistas/" . $_GET['pagina'] .".php";
} else {
    include "vistas/inicio.php";
}

include "parciales/footer.php";