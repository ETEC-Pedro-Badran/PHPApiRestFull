<?php
require_once "..\domain\usuario.class.php";

//validar
if (isset($_POST["email"]) && 
    isset($_POST["senha"])) {
    
    $usuario = new Usuario();
    $usuario->email = $_POST["email"];
    $usuario->valida($_POST["senha"]);
    if ($usuario->id>0)
      echo json_encode($usuario);
    else 
      echo http_response_code(403);   
} else { 
   echo http_response_code(400);
}


