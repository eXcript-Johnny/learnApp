<?php
include_once '../model/conexao.php';
include_once '../model/usuario.php';

// Receber dados
$email = isset($_POST["email"]) ? $_POST["email"] : false;
$senha = isset($_POST["senha"]) ? $_POST["senha"] : false;

if($email && $senha){
    $usuario = new usuario();
    $usuario->email = $email;
    $usuario->senha = $senha;
    $resultado      = $usuario->selectUsuario();
    
    if(!$resultado){
        echo "erro";
    } else {
        // Criar a session (logado)
        session_start();
        $_session['logado'];
        
        echo "sucesso";
    }
    
} else {
    echo "Erro";
}




//
//$usuario = new usuario();
//$usuario->usuario = $_post["usuario"];
//$usuario->senha   = $_post["senha"];
//$usuario_existe = $usuario->verificarUsuario();
//
//if($usuario_existe) {
//    header('localização: view/login.php');
//            
//}else {
//    echo"Página não encontrar";
//}

?>
