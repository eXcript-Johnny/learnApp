<?php 
      
	$nome = $_POST['nome'];
        $email =$_POST['email'];
        $telefone =$_POST['telefone'];
        $senha =$_POST['senha'];
        
        $sql = mysqli_query("insert into usuarios (nome, email, telefone,senha)
        values ('$nome','$email','$telefone', '$senha')");
        
     header("location: ../view/index.php")	
        
       
	
	
	
	
