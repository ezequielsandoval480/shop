<?php

session_start();

$db_conf = array(
    "HOST" => "127.0.0.1",
    "NAME" => "shop",
    "USER" => "root",
    "PWD" => "",
    "PORT" => "3306",
    "PREFIX" => ""
);


include "db.php";
$db= db_helper($db_conf);



include "funciones.php";
include "acciones.php";
?>