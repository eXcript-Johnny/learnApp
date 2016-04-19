<?php include_once("../model/conexao.php");
include_once ("../model/conectar.php");
$db =new $this ->conectar();?>

<html lang="pt-br">
<head> 
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> LearnApp Login </title>
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        
        <form action="../controller/verificaCadastro.php" method="POST" accept-charset="utf-8" class="form-login" >
		<h2 class="form-login-heading"> Entre com o usuário</h2>
		<label for="email">E-mail</label>
		<input type="email" id="email" class="form-control" placeholde="Email" required autofocus>
		<label for="inputPassword">Senha</label>
		<input type="password" id="Senha" class="form-control" placeholde="Senha" required >
		<div class="checkbox">
			<label>
			<input type="checkbox" value= "esqueci"> Esqueci a senha
			</label>
			</div>
			<button type="submit" class="btn btn-lg btn-primary btn-block" > Entrar </button>
	
	</form>
	</div>
</body>
</html>
