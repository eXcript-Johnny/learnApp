
<?php
class Database{
    public static $db;
    public function instance(){
        if(!self::$db){
            self::$db = $this ->connect();
       } 
       return self::$db;
    }
    
    private function connect(){
   
    $db= new PDO("mysql:host=localhost;bd=learnappbd","root", "");    
    $db ->setAttribute(PDO::ATTR_ERRMODE,ERRMODE_EXCEPTION);
    return $db;
    }
}
$db = new Database();
$bancodedados = $db ->instance();
$bancodedados -> query("INSERT INTO usuarios (nome) values ('teste')");

?>
