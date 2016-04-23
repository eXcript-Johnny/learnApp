<?php

class Conexao{
	
	const host = "localhost";
        const user = "root";
	const password = "";
        const base = "learnappbd";
        
    
    
	function conectar(){
		
	
	$pdo = new PDO('mysql:host=host;dbname=base,'user,password);
	$pdo = setAttribute(PDO::ATTR_ERRNOME, PDO::ARR_EXPECTION);
	self::host . self::user . self::password .self::base ;
	}
	
}	
   
		
		
	
    


?>
