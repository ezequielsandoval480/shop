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
        ->where("usuario = :Usuario, Contraseña = :password")
        ->bind(array(
            "usuario" => $usuario,
            'password' => $password
        ))->exec();

    return $results;
}