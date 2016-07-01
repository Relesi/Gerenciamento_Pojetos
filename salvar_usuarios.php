<?php 

include "util/usuario_funcoes.php";

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];



if(salvarUsuario($nome, $email, $senha))
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