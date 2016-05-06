<?php

// incluir a class conexao com o include
include_once 'conexao.php';

class usuario extends Conexao{
    public $conexao;
    
    
    
    function __construct(){
        $this->conexao = Conexao::conectar();
    }
    
}

?>
