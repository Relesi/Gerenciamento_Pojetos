<?php

include "util/usuario_funcoes.php";
session_start();
switch ($_SERVER["REQUEST_METHOD"])


{

case 'GET':
		if(!isset($_SESSION['email'])){
			header("location: login.php");
		}
break;

case 'POST':
	
$email = $_POST['email'];
$senha = $_POST['senha'];
$dados = obterUsuario($email);

if($email == $dados["email"] && $senha == $dados["senha"])

{
	$_SESSION["email"] = $email;	
	$_SESSION["nome"] = $dados["nome"];
	header("location: index.php");
}
else
{
	header("location: login.php");
}
break;		


}




?>