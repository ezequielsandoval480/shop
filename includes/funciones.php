<?php

//tenes que hacer las funciones asi
function buscarProducto($nombreproducto){
    global $db;
    $results = $db->table("productos")->select()
    ->where("nombre = :nombre")->bind(array("nombre" => $nombreproducto))->exec();

    return $results;
}


function getUser($usuario,$password){
    
    global $db;

    $results = $db->table("user")->select()
        ->where("usuario = :usuario AND password = :password")
        ->bind(array(
            "usuario" => $usuario,
            'password' => sha1($password)
        ))->exec();

    return $results;
 }

function getUserById($id){

    global $db;

    $results = $db->table("user")->select('id,usuario,correo,telefono')
        ->where("id = :id")
        ->bind(array(
            "id" => $id,
        ))->exec();
    if(!empty($results)){
        return $results[0];
    } else {
        return false;
    }
}


function registrarUsuario($usuario,$password,$correo,$telefono){
    
    global $db;
    
    $results = $db->table("user")->insert("(`usuario`,`password`,`correo`,`telefono`)")
    ->values("(:usuario,:password,:correo,:telefono)")
    ->bind(array(
        "usuario" => $usuario,
        'password' => sha1($password),
        "correo" => $correo,
        "telefono" =>$telefono
    ))->exec();

    return $results;
}

function updateUser($data){
    global $db;

    if(isset($data['password']) && $data['password'] != ''){
        $results = $db->table("user")->update("telefono = :telefono, correo = :correo, password = :password")->where("id = :id")
        ->bind(array(
            "telefono" => $data['telefono'],
            "correo" => $data['correo'],
            "password" => sha1($data['password']),
            "id" => $_SESSION['id'],
        ))->exec();
    } else {
        $results = $db->table("user")->update("telefono = :telefono, correo = :correo")->where("id = :id")
        ->bind(array(
            "telefono" => $data['telefono'],
            "correo" => $data['correo'],
            "id" => $_SESSION['id'],
        ))->exec();
    }

    return $results;

    // update tbl_list where id = $id
    
}

function estaLogueado ($redirect=''){
    if(isset($_SESSION['id'])){
        return true;
    }else{
         return false;
        }
    }

function redirectTo($to=''){
    $protocol = 'http://';
    $domainName = $_SERVER['HTTP_HOST'].'/';
    $base =  $protocol.$domainName;

    header("Location: " .$base . $to);
    exit();
}


?>



