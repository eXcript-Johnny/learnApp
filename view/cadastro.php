<?php require_once ('../model/conexao.php') ?>

<html>
<head>
    
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> Cadastro </title>
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
<meta http-equiv="Content-Type" content="text/html" charset=utf-8" />
<title>Cadastro</title>
</head>
<body>
 
    <div class="container">
        <form action=../controller/verificaCadastro.php method="POST" accept-charset="utf-8" class="form-login">
        <h2 class="form-cadastro-heading"> Cadastre-se </h2>
        
     
                <label class="nome">Nome: </label>
                <input type="nome" id="nome" class="form-control" placeholder="nome" required autofocus>
                
                 <label class="email">Email:</label>
                <input type="email" id="email" class="form-control" placeholder="email" required>
                
                <label class="telefone">Telefone:</label>
                <input type="telefone" id="telefone" class="form-control" placeholder="telefone" required>
                
                <label for="inputPassword">Digite sua senha</label>
		<input type="password" id="senha" class="form-control" placeholde="Senha" required >
                
                <button type="submit" class="btn btn-lg btn-primary btn-block" > Confirmar Cadastrar </button>
        
		 
    


</body>

</html>
