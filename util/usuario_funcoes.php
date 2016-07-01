<?php 


include_once "database.php";

function listaUsuarios()
{
	$con = conectaBanco();
	$result  = mysqli_query($con, "select * from usuarios");
	return $result;
}




function inserirUsuario($nome, $email, $senha)
{

$con = conectaBanco();
$result = mysqli_query($con, "insert usuarios(nome, email, senha)
								value('".$nome."',
									'".$email."',
									'".$senha."')");

return $result;
}

function novoUsuario()
{
	$dados = array(
					"id"=>"",
					"nome"=>"",
					"email"=>"",
					"senha"=>"",
					"url"=>"salvar_usuarios.php",
					);
	return $dados;
}
function salvarUsuario($nome, $email, $senha)
{
	
$con = conectaBanco();
$result = mysqli_query($con, "insert usuarios(nome, email, senha)
								value('".$nome."',
									  '".$email."',
									  '".$senha."')");

return $result;

	
}

function obterUsuario($email)
{
	$con = conectaBanco();

	$result =  mysqli_query($con,"select * from  usuarios where email='" .$email."'");

	$r =  mysqli_fetch_assoc($result);

	return $r;


}

function editarUsuarios($usuarios_id)
{
	$con = conectaBanco();
	$projeto = mysqli_query($con, "select * from projetos where id=" .$usuarios_id);

	
	$dados =  array("id"=>"","nome"=>"","email"=>"","senha"=>"", );

	foreach ($usuarios as $p)
	{
		$dados["id"] = $p["id"];
		$dados["nome"] = $p["nome"];
		$dados["email"] = $p["email"];
		$dados["senha"] = $p["senha"];
	}
	$dados["url"] = "atualizar_usuarios.php";
	return $dados;


}

function atualizarUsuarios($nome,$email, $senha)
{
	$con = conectaBanco();
	$result = mysqli_query($con, "update usuarios
									set nome='".$nome."'
									email='".$email."'
									senha='".$senha."'
								   where id=".$usuario_id);
									
	return $result;

}

function deletarUsuario($usuarios_id)
{
	$con = conectaBanco();
	$result = mysqli_query($con,"delete from  usuarios where id=" .$usuarios_id);
	return $result;

}



?>