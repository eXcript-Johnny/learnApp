<?php
class usuario extends Conexao{
    public $conexao;
    public $usuario;
    public $senha;
    
    function __construct(){
        $this->conexao = Conexao::conectar();
    }
    
    
    public function selectUsuario(){
        $query        = "montar a query";
        $consultation = $this->conexao->prepare($query);
        $consultation->bindValue(":ID_cliente", $this->ID_cliente);
        $consultation->execute();

        return $consultation->fetchObject();
    }
}

?>
