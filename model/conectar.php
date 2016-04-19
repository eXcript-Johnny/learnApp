<?php

class Conectar{
    public $db;
    
    public function __construct() {
        $db = new Database();
        $this ->bd =$db ->instance();
        $this ->sendContact();
    }
    public function sendContact(){
        if($_POST){
          try{
             $query = $this ->$db -> prepare("INSERT INTO  usuarios (nome,email, telefone) values (:nadia,:nadia@gmail.com, :telefone)");
             $query ->bindValue(":nome",$_POST['nome'],PDO::PARAM_STR);
             $query ->bindValue(":email",$_POST['email'],PDO::PARAM_STR);
             $query->execute();
             echo"enviado com sucesso!";
          } catch (PDOException $e) {
              echo"Problema";

          }  
         
        } 
    }
    
    ?>
