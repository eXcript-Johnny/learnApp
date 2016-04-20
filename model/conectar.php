<?php
ob_start();
session_start();
if(isset($_SESSION['email']) && (isset($_SESSION['senha']))){
    header("Location: ../view/index.php"); exit();
}
   include("conexao.php");
   
if(isset($_POST['logar'])){
    $usuario = trim(strip_tags($_POST['email']));
    $senha = trim(strip_tags($_POST['senha']));
    
    $select = "SELECT * from usuarios WHERE email=:usuario AND senha=:senha";
  
    try{
        $result = $conexao->prepare($select);
        $result ->bindParam(':email', $email, PDO::PARAM_STR);
        $result ->bindParam(':senha',$senha,PDO::PARAM_STR);
        $result->execute();
        $cont = $result ->rowCount();
        if($cont>0){
            $email =['email'];
            $senha =['senha'];
            $_SESSION['email'] = $email;
            $_SESSION['senha'] =$senha;
            
            echo '<div class = "alert alert-success">
                 <button type="button" class="close" data-dismiss="alert"> x </button>
                 <strong> logado com sucesso</strong> Redirecionando para o sistema.
                 </div>';
            header("Refresh:5, index.php");
        }else{
            echo 'os dados digitados estão incorretos';
            
        }
    } catch (Exception $e) {
        echo $e;

    }
    
}

    
    ?>
