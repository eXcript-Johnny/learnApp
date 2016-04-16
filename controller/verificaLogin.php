<?php

<?php
if(isset($_POST['login']) && isset($_POST['senha'])){
include_once 'conexao.php';
$sql ="select * from usuario where login='" .$_POST['login']. "' && senha='" .$_POST['senha']. "'";
//$sql = "select * from usuario 
//$sql = "select * from usuario where login='Admin' && senha='123'"; esta chamando o registro direto da tabela 
$rs = mysqli_query($cn,$sql);
$n = mysqli_num_rows($rs);        //quantas linhas foi a resultado na query
if($n == 1){
/*	while ($resposta=mysqli_fetch_array($rs)){
		echo $resposta['id'];
		echo "<br/>";
		echo$resposta['login'];
		echo "<br/>";
		echo$resposta['senha'];
	}
	*/	
session_start();  // não permite que o usuario, acesse outras paginas sem logar primeiro
$_SESSION['logado']=true;
$destino="paginaRestrita.php";
	header("location:".$destino);
}
else{
//echo "PERMISSAO NEGADA!!";
$destino="index.php";
	header("location:".$destino);
}
}
?>
