<?php

//Para recibir requests

if(isset($_POST['action']) &&  $_POST['action']=='loguear_usuario'){

    $resultados = loguearUsuario($_POST['usuario'],$_POST['password']);

    //aca si es exitoso lo guardas en la sesion
}
