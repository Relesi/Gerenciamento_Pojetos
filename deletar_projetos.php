<?php


include "util/projetos_funcoes.php";



if(deletarProjetos($_GET["id"])) 
{
	echo "<h1> Projeto Deletado com Sucesso! </h1>";
}

else
{
	echo "<h1> Erro ao remover o projeto </h1>";
}

		echo "<center><a href= 'projetos.php'>Voltar</a></center>";	

?>
