<?php

class Conexao {

    const usuario = 'root';
    const host = 'localhost';
    const dbname = 'rest';
    const passwd = '';

    static function getInstance(){
        return PDO('mysql:host='.Conexao::host.';dbname='.Conexao::dbname,
        usuario, passwd);
    } 

}