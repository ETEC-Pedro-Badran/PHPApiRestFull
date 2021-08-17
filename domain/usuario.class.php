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
        $st = $con->prepare($sql);
        $st->bindValue(":email",$this->email);
        $st->bindValue(":senha",$senha);
        $st->execute();
        $registros = $st->fetchAll();
        if(count($registros)>0) {
            $this->id = $registros[0]["id"];
            $this->nome = $registros[0]["nome"];
        }
    }

}