<?php 


$id = (int) $_POST['id'];
$nome = $_POST["nome"];
$cliente = $_POST["cliente"];
$data_entrega = $_POST["data_entrega"];
$valor = $_POST["valor"];
$objetivo = $_POST["objetivo"];
$atual = $_POST["atual"];
$proposto = $_POST["proposto"];


$con = mysqli_connect("localhost","root","","projetos");
$result = mysqli_query ($con, "update projetos
							   set nome='".$nome."',
							   cliente='".$cliente."',
							   data_entrega='".$data_entrega."',
							   valor=".$valor."',
							   objetivo=".$objetivo."',
							   $atual=".$atual."',
							   $proposto=".$proposto.",

							   where id=".$id);





if($result)
{

	echo "<h1> Cadastro Atualizado com Sucesso!</h1>";
}
else
{
	echo "<h1> Falhou a Atualizacao! </h1>";


}

?>

<center><a href= "projetos.php">Voltar</a></center>





<?php include "template/rodape.php";

?>