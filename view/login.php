<!DOCTYPE html>
<html lang="pt-br">
    <head> 
        <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> LearnApp Login </title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/navBar.css">
        <script type="text/javascript" src="js/jquery-1.12.3.js"></script>
        <script type="text/javascript" src="js/login.js"></script>
        <script type="text/javascript" src="js/cadastro.js"></script>
    </head>
    
    <body>
        
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Learnaap</span>
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
            
                    <h2 class="form-login-heading"> Entre com o usuário</h2>
                    <label for="email">E-mail</label>
                    <input type="email" id="email" class="form-control" placeholde="Email">
                    <label for="inputPassword">Senha</label>
                    <input type="password" id="senha" class="form-control" placeholde="Senha">
                    <div class="checkbox">
                            <label>
                                <a href="#"> Esqueci a senha</a>
                            </label>
                            </div>
                            <button type="submit" class="btn btn-lg btn-primary btn-block" onclick="evento.validar()"> Entrar </button>
                            <button type="button" class="btn btn-lg btn-primary btn-block" onclick="jsCadastrar()" > Cadastrar-se</button>
           
	</div>
    </body>
</html>
