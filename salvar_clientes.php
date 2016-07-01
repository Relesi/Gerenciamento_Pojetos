<?php 

include "util/cliente_funcoes.php";

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];


$con = mysqli_connect("localhost","root","","projetos");
$result = mysqli_query ($con,"insert into clientes(nome,email,senha) values('".$nome."','".$email."','".$senha."')");

if($result == TRUE)
{

	echo "<h1> Cadastro efetuado com Sucesso!</h1>";
}
else
{
	echo "<h1> Falhou ao cadastrar! </h1>";


}

?>

<center><a href= "clientes.php">Voltar</a></center>





<?php include "template/rodape.php";

?>