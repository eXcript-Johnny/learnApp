<?php
class usuario extends Conexao{
    public $conexao;
    public $usuario;
    public $senha;
    
    function __construct(){
        $this->conexao = Conexao::conectar();
    }
    
    
    public function selectUsuario(){
        $query        = "montar a query where email = :email";
        $consultation = $this->conexao->prepare($query);
        $consultation->bindValue(":email", $this->email);
        $consultation->execute();

        return $consultation->fetchObject();
    }
}

?>
