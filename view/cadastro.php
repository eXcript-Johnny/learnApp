<html>
<head>
    
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> Cadastro </title>
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/navBar.css">
<meta http-equiv="Content-Type" content="text/html" charset=utf-8" />
<title>Cadastro</title>
</head>
<body>
    
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" href="login.php">Learnapp - Sistema Inovador de Estudo </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            
          </ul>
          
        </div>
      </div>
    </nav>
 
    <div class="container form-login">
        
        <h2 class="form-cadastro-heading"> Cadastre-se </h2></br></br>
        
                <label class="nome">Cadastrar-se como:</label>
            <input type="radio" name="perfil" value="A" checked="checked"> Aluno
            <input type="radio" name="perfil" value="P"> Professor</br></br>
                <label class="nome">Nome: </label>
                <input type="nome" id="nome" class="form-control" placeholder="nome" required autofocus>
                
                 <label class="email">Email:</label>
                <input type="email" id="email" class="form-control" placeholder="email" required>
                
                <label class="telefone">Telefone:</label>
                <input type="telefone" id="telefone" class="form-control" placeholder="telefone" required>
                
                <label for="inputPassword">Digite sua senha</label>
                <input type="password" id="senha" class="form-control" placeholde="Senha" required >
                
                <button type="submit" class="btn btn-lg btn-primary btn-block"  > Confirmar Cadastrar </button>
                <!--<button type="submit" class="btn btn-lg btn-primary btn-block" href="login.php" > Voltar</button>-->
		 
    


</body>

</html>
