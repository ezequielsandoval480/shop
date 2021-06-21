<?php

//tenes que hacer las funciones asi
function buscarProducto($nombreproducto){
    global $db;
    $results = $db->table("productos")->select()
    ->where("nombre = :nombre")->bind(array("nombre" => $nombreproducto))->exec();

    return $results;
}

function loguearUsuario($usuario,$password){
    global $db;
    $results = $db->table("user")->select()
        ->where("usuario = :usuario AND password = :password")
        ->bind(array(
            "usuario" => $usuario,
            'password' =>md5($password)
        ))->exec();
    if(!empty($results)){
        $_SESSION['id']=$results[0]['id'];
        $_SESSION['usuario'];
        //redirigir al inicio 

    }else{

    }
}

function registrarUsuario($usuario,$password,$correo,$telefono){
    global $db;
    $results = $db->table("user")->insert()
        ->where("usuario = :usuario AND password = :password AND correo = :correo AND telefono = :telefono")
        ->bind(array(
            "usuario" => $usuario,
            'password' =>md5($password),
            "correo" => $correo,
            "telefono" => $telefono
        ))->exec();
    if(!empty($results)){
        $_SESSION['id']=$results[0]['id'];
        $_SESSION['usuario'];

   //redirigir al inicio 

    }else{

    }
}

function chequearUsuario($redirect=''){
    if(isset($_SESSION['id'])){
        return true;
    }else{
        if($redirect!=''){
            header("Location" .$_SERVER['SERVER_NAME']. $redirect);
            exit();
        }else{
         return false;
        }
    }
}

/*chequearUsuario('/?pagina=contacto');

$log = chequearUsuario();

if($log){
    echo "Mi usuario esta logueado";
}else{
    echo "No esta logueado";
}*/

?>



