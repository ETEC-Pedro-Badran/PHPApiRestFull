<?php
require_once "..\domain\usuario.class.php";

//valida
if (isset($_POST["op"]) && $_POST["op"]=="inc") {
    $usuario = new Usuario();
    $usuario->email = $_POST["email"];
    $usuario->nome = $_POST["nome"];
    $usuario->setSenha($_POST["senha"]);
    return json_encode($usuario->incluir());
 } else if (isset($_POST["email"]) && 
    isset($_POST["senha"])) {
    $usuario = new Usuario();
    $usuario->email = $_POST["email"];
    $usuario->setSenha($_POST["senha"]);
    $usuario->valida();
    if ($usuario->id>0)
      echo json_encode($usuario);
    else 
      echo http_response_code(403);   
} else { 
   echo http_response_code(400);
}


