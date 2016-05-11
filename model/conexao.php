<?php

class Conexao{
	const  host     = "localhost";
	const  user     = "root";
	const  password = "";
	const  base     = "learnappbd";
	
    function conectar(){
        $pdo = new PDO("msql: host=".self ::host.";dbname=" .self::base."; charset =utf8", self::user, self::password);
        $pdo = setAttribute(PDO::ATTR_ERRNOME, PDO::ARR_EXPECTION);
        
	return $pdo;
    }
		
}
