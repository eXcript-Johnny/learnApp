<html>

<head></head>


<body>
<?php

/*$host = 'localhost';
$user = 'root';
$pass = '';
$bd = 'learnappbd';
 */
//$cn = mysqli_connect($host, $user, $pass, $bd) or die (mysql_error());
 //$sql= mysql_select_bd($bd) or die (mysql_error());
// echo "Voce esta conectado";

if(mysqli_connect('localhost','root', '', 'learnappbd'))
{
	echo "conexao realizada ";
		
	
} else 
	
	echo "erro na conexão";
	
	
?>
</body>


</html>

