<?php

if(isset($_post['email'] && isset($_post['senha'])){

class Login{
   
	public $email;
	public $senha;
	
	
	
	function logar{
	
	$this ->$email = $email;
	$this ->$senha = md5($senha);
	}

}


}
?>