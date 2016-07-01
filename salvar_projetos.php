<?php 

include "util/projetos_funcoes.php";


$nome = $_POST["nome"];
$cliente = $_POST["cliente"];
$data_entrega = $_POST["data_entrega"];
$valor = (float) $_POST["valor"];
$objetivo = $_POST["objetivo"];
$atual = $_POST["atual"];
$proposto = $_POST["proposto"];

$res=inserirProjetos($nome,$cliente,$data_entrega,$valor, $objetivo, $atual, $proposto);
if($res)
{

	echo "<h1> Cadastro efetuado com Sucesso! </h1>";
}
else
{
	echo "<h1> Falhou ao cadastrar! ".$res." </h1>";
}

?>

<center><a href= "projetos.php">Voltar</a></center>





<?php include "template/rodape.php"; ?>