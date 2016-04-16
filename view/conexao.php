<?php

function conexao ( $host, $user, $pass, $bd,$cn)
{
$host = 'localhost';
$user = 'root';
$pass = '';
$bd = '';
 
$cn = mysqli_connect($host, $user, $pass, $bd) or die ("falha na conexao");
    
}
