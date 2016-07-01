<?php 

include "util/clientes_funcoes.php";

$id = (int) $_POST['id'];
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];




$result = atualizarCliente($id, $nome, $email, $senha);
if($result)
{

	echo "<h1> Cadastro atualizado com Sucesso!</h1>";
}
else
{
	echo "<h1> Falhou a Atualizacao!  </h1>";


}

?>

<center><a href= "clientes.php">Voltar</a></center>





<?php include "template/rodape.php";

?>