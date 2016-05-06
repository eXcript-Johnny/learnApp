<?php

include_once'usuario';

$usuario = new usuario();
$usuario->usuario = $_post["usuario"];
$usuario->senha   = $_post["senha"];
$usuario_existe = $usuario->verificarUsuario();

if($usuario_existe) {
    header('localização: view/login.php');
            
}else {
    echo"Página não encontrar";
}

?>
