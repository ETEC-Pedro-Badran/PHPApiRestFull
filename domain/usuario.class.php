<?php
require_once '..\db\conexao.php';

class Usuario {
    public $id;
    public $nome;
    public $email;
    private $senha;

    public function get(){
    }

    public function insert(){

    }

    public function valida($senha){
        $con = Conexao::getInstance();
        $sql = "select id, nome from usuario where email = :email and senha = :senha";
        $con->prepare($sql);
        $con->bindValue(":email",$this->email);
        $con->bindValue(":senha",$senha);
        $con->execute();
        $registros = $con->fetchAll();
        if(count($registros)>0) {
            $this->id = $registro[0]["id"];
            $this->nome = $registro[0]["nome"];
        }
    

    }

}