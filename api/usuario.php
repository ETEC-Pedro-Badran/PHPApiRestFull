<?php
require_once "..\domain\usuario.class.php";

//validar
if (isset($_POST["email"]) && 
    isset($_POST["senha"])) {
    
    $usuario = new Usuario();
    $usuario->id = 1;
    $usuario->email = "teste@teste.com.br";

    echo json_encode($usuario);
} else { 
   echo http_response_code(400);
}


