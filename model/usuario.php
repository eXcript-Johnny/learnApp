<?php
class usuario extends Conexao{
    public $conexao;
    public $usuario;
    public $senha;
    
    function __construct(){
        $this->conexao = Conexao::conectar();
    }
    
    
    public function selectUsuario(){
        $query        =  new $pdo->prepare("SELECT * FROM usuarios WHERE email = :email AND senha = :senha");
        $consultation = $this->conexao->prepare($query);
        $consultation->bindValue(":email", $this->email);
        $consultation->execute();

        return $consultation->fetchObject();
    }
}

?>
