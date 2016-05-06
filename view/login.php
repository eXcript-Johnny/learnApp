<!DOCTYPE html>
<html lang="pt-br">
    <head> 
        <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> LearnApp Login </title>
        <link rel="stylesheet" href="../view/css/bootstrap.css">
	<link rel="stylesheet" href="../view/css/estilo.css">
	<link rel="stylesheet" href="../view/css/bootstrap.min.css">
        <script type="text/javascript" src="view/js/jquery-1.12.3.js"></script>
        <script type="text/javascript" src="view/js/login.js"></script>
    </head>
    
    <body>
        <div class="container form-login">   
            
                    <h2 class="form-login-heading"> Entre com o usuário</h2>
                    <label for="email">E-mail</label>
                    <input type="email" id="email" class="form-control" placeholde="Email">
                    <label for="inputPassword">Senha</label>
                    <input type="password" id="senha" class="form-control" placeholde="Senha">
                    <div class="checkbox">
                            <label>
                            <input type="checkbox" value= "esqueci"> Esqueci a senha
                            </label>
                            </div>
                            <button type="submit" class="btn btn-lg btn-primary btn-block" onclick="evento.validar()"> Entrar </button>
                            <button type="button" class="btn btn-lg btn-primary btn-block"> Cadastrar-se</button>
           
	</div>
    </body>
</html>