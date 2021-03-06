<?php

//Para recibir requests

if(isset($_POST['action']) &&  $_POST['action']=='loguear_usuario'){

    $resultados = getUser($_POST['usuario'],$_POST['password']);

    if(!empty($resultados)){
        $_SESSION['id'] = $resultados[0]['id'];
        $_SESSION['usuario'] = $resultados[0]['usuario'];
        redirectTo('?pagina=inicio');
    } else{
        $mensaje = 'No se ha encontrado el usuario';
    }

    //aca si es exitoso lo guardas en la sesion
}


if(isset($_POST['action']) &&  $_POST['action']=='registrarUsuario'){

     $resultados = registrarUsuario($_POST['usuario'],$_POST['password'],$_POST['correo'], $_POST['telefono']);

    $resultados = getUser($_POST['usuario'],$_POST['password']);

      if(!empty($resultados) && intval($resultados)){
        $_SESSION['id'] = $resultados;
        $_SESSION['usuario'] = $_POST['usuario'];
        $mensaje = 'Usuario creado';
    } else{
         $mensaje = 'No se ha encontrado el usuario';
    }

 }

 if(isset($_POST['action']) &&  $_POST['action'] == 'actualizar_usuario'){

    $resultados = updateUser($_POST);

    if($resultados && $resultados > 0){
        $mensaje = 'Usuario actualizado';
    } else{
        $mensaje = 'Ocurrio un problema al actualizar';
    }

}

 if(isset($_POST['action']) &&  $_POST['action']  =='registrarCompras'){

    $resultados = registrarCompras($_POST['idProducto'],$_POST['nombre'],$_POST['preciounitario'],$_POST['datos'],$_POST['Cantidad']);

    if($resultados > 0){
        $mensaje = 'Se registro la compra correctamente';
    } else{
        $mensaje = 'Ocurrio un problema al registrar la compra';
    }

}


 if(isset($_GET['action']) &&  $_GET['action']  =='eliminar'){

    $resultados = eliminar($_GET['idProducto'],$_GET['nombre'],$_GET['preciounitario'],$_GET['Cantidad']);
 
    if($resultados > 0 ){
        $mensaje = 'Se elimino la compra correctamente';
    } else{
        $mensaje = 'Ocurrio un problema al eliminar la compra';
    }

}



if(isset($_POST['action']) &&  $_POST['action']  =='agregar_producto_carrito'){

    print_r($_POST);


    $idProducto = $_POST['idProducto'];
    $cantidad = $_POST['cantidad'];

    if(intval($idProducto)) :

        $producto = getProductoById($idProducto);

        $resultados = agregarSesion(
            $producto,
            $_SESSION['id'], //Este es el id del usuario
            $cantidad
        );


    endif;
 
    if($resultados > 0 ){
        $mensaje = 'Se elimino la compra correctamente';
    } else{
        $mensaje = 'Ocurrio un problema al eliminar la compra';
    }

}