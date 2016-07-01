<?php

function conectaBanco()

{
	$con = mysqli_connect("localhost","root","","projetos")
	or die("Nao foi possivel conectar a banco de dados");
	return $con;

}



?>


