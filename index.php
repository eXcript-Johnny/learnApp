<?php
session_start();

if($_SESSION["email"] && ["senha"]){
    header('localização: ../view/home.php');
}else{
    include 'localização: ../view/login';
}


// Primeira coisa verificar se o usuario está logado
//if($_SESSION["logado"]){
    // direcionar para a tela inicial do sistema
//} else {
    include "view/login.php";
    
    // direcionar para a tela de login
//}



// Direcionar para a view da tela de login 

?>
