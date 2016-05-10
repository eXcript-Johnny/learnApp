<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>LearnApp Professor</title>
        <title> LearnApp Login </title>
     <link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/navBar.css">
        <link  rel="stylesheet" href="css/dashboard.css">
        <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
    </head>
    <body>
     <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Learnapp</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" href="homeProf.php">Learnapp - Perfil Professor </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
              <li><a href="homeProf.php">HOME</a></li>
            <li><a href="#">EXERCÍCIOS</a></li>
            <li><a href="#">DESEMPENHO</a></li>
            <li><a href="../controller/logout.php">LOGOUT</a></li>
          </ul>
          
        </div>
      </div>
    </nav>
        <div class="container">
        <form action="#" accept-charset="utf_8" method="post" class="form-login">            
            </br></br>
            
            <label for="disciplina">Nome da disciplina:</label></br>
            <input type="disciplina" class="form-control" placeholder="disciplina" required autofocus="form-prof">
            <label for="aula">Nome da aula:</label>
            <input type="aula" class="form-control" placeholder="aula" required="form-prof">
            <label for="capitulo">Capitulo:</label>
            <input type="capitulo" class="form-control" placeholder="capitulo" required="form-prof">
            <label for="imagem">Adicionar imagem:</label>
            <input type="file" name="imagem"></br></br</br>
            
            <button type="submit" class="btn btn-lg btn-primary btn-block"  id= "bt-login">Submeter Aula </button>

            </div>
        </form>
    </body>
</html>
