<?php

$id = $_GET["id"];

$con = mysqli_connect("localhost","root","","projetos");
$result = mysqli_query($con,"delete from clientes where id = ".$id."");

if ($result) 
{
	echo "<h1> Cliente Deletado com Sucesso </h1>";
}
else
{
	echo "<h1> Falhou ao deletar</h1>";
}


?>
<center><a href= "clientes.php">Voltar</a></center>