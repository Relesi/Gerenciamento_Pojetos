<?php

include_once "database.php";


function listaClientes()
{

	$con = conectaBanco();
	$result = mysqli_query($con, "select * from clientes");
	return $result;

}


function novoCliente()
{
	$cliente = array(

					"id"=>"",	
					"nome"=>"",
					"email"=>"",
					"senha"=>"",
					"url"=>"",

		);

	return $cliente;
}

function editarCliente($cliente_id)
{
	$con = conectaBanco();
	$cliente = mysqli_query($con,"select * from clientes where id=". $cliente_id);
	$cliente_array = array(

					"id"=>"",	
					"nome"=>"",
					"email"=>"",
					"senha"=>"",
					"url"=>"",

		);
	foreach ($cliente as $c)
	{
		$cliente_array["id"] = $c["id"];
		$cliente_array["nome"] = $c["nome"];
		$cliente_array["email"] = $c["email"];
		$cliente_array["senha"] = $c["senha"];
		
	}
	$cliente_array["url"] = "atualizar_clientes.php";
	return $cliente_array;
}

function salvarCliente($nome, $email, $senha)
{
	$con = conectaBanco();
	$result = mysqli_query($con,"insert into clientes
		(nome,email,senha) 
		values('".$nome."',
			   '".$email."',
			   '".$senha."'
			    
			   )"
		);
	return $result;
}

function atualizarCliente($cliente_id,$nome, $email, $senha)
{

	$con = conectaBanco();
	$result = mysqli_query($con, "update clientes
									set nome='".$nome."',
									email='".$email."',
									senha='".$senha."'
									where id=".$cliente_id);
									
	return $result;

}
function deletaClientes($cliente_id){

$con = conectaBanco();
	$result = mysqli_query($con,"delete from  cliente where id=" .$cliente_id);
	return $result;
}

?>