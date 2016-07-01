<?php


include "database.php";
include_once "clientes_funcoes.php";


function listaProjetos()
{
	$con = conectaBanco();
	$result = mysqli_query($con, "select * from projetos order by id desc");
	return $result;


}


function editarProjetos($projeto_id)
{
	$con = conectaBanco();
	$projeto = mysqli_query($con, "select * from projetos where id=" .$projeto_id);

	
	$dados =  array("id"=>"","nome"=>"","cliente"=>"","data_entrega"=>"","valor"=>"","objetivo"=>"","atual"=>"","proposto"=>"","url"=>"", );

	foreach ($projeto as $p)
	{
		$dados["id"] = $p["id"];
		$dados["nome"] = $p["nome"];
		$dados["cliente"] = $p["cliente"];
		$dados["data_entrega"] = $p["data_entrega"];
		$dados["valor"] = $p["valor"];
		$dados["objetivo"] = $p["objetivo"];
		$dados["atual"] = $p["atual"];
		$dados["proposto"] = $p["proposto"];

	}
	$dados["url"] = "atualizar_projetos.php";
	return $dados;

}

function inserirProjetos($nome,$cliente, $data_entrega, $valor, $objetivo, $atual, $proposto)
{
	$con = conectaBanco();
	$result = mysqli_query($con,"insert into projetos
		(nome,cliente,data_entrega,valor, objetivo, atual, proposto, status) 
		values('".$nome."',
			   '".$cliente."',
			   '".$data_entrega."',
			    ".$valor.",
			   '".$objetivo."',
			   '".$atual."',
			   '".$proposto."',
			   0

			   )"
		);
	return $result;
}

function atualizarProjetos($projeto_id, $nome, $cliente, $data_entrega, $valor, $objetivo, $atual, $proposto)
{
	$con = conectaBanco();
	$result = mysqli_query($con, "update projetos
									set nome='".$nome."'
									cliente='".$cliente."'
									data_entrega='".$data_entrega."'
									valor='".$valor."'
									objetivo='".$objetivo."'
									atual='".$atual."'
									proposto='".$proposto."'
									where id=".$projeto_id);
									
	return $result;

}


function cadastrarProjetos()

{	
	

	$dados =  array("id"=>"","nome"=>"","cliente"=>"","data_entrega"=>"","valor"=>"","objetivo"=>"","atual"=>"","proposto"=>"","url"=>"salvar_projetos.php", );
	return $dados;
}


function deletarProjetos($projeto_id)
{
	$con = conectaBanco();
	$result = mysqli_query($con,"delete from  projetos where id=" .$projeto_id);
	return $result;

}


function selecionaCliente($cliente)
{
	
	$clientes = listaClientes();
	$html = "";

	foreach ($clientes as $c) 
	{	

		if($c["nome"] == $cliente)
		{
			$select = "selected";
		}
		else
		{
			$select = "";
		}	

		
		$html .= "<option ".$select." value='".$c["nome"]."'>".$c["nome"]."</option>";
	}
	return $html; 


	
}


function aceiteProjetos($projetos_id)
{
	$con = conectaBanco();
	$result = mysqli_query($con, "update projetos set status=1 where id=".$projetos_id);
	return $result;
}


 function selecionarProjetosPorStatus($status)
 {
 	$con = conectaBanco();
 	$result = mysqli_query($con, "select * from projetos where status=".$status);

 	return $result;

 }

 function selecionarProjetosPorId($id)
 {
 	$con = conectaBanco();
 	$result = mysqli_query($con, "select * from projetos where id=".$id);

 	$res = mysqli_fetch_assoc($result);
 	return $res;


 }






?>