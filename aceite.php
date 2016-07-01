<?php
include "template/topo.php";
include_once "util/projetos_funcoes.php";

if(!isset($_GET['id']) && !isset($_GET['status']))
{
	echo "Parametros Invalidos";
}
else 
{
	$aceite = aceiteProjetos($_GET['id'],$_GET['status']);
	if($aceite)
	{
		echo "<center><h1> Projetos Atualizados com sucesso!</h1></center>";
	}
	else
	{
		echo "<center><h1> Erro! </h1></center>";
	}
}


?>

<center><a href="index.php">Voltar</a></center>

<?php include "template/rodape.php"; ?>