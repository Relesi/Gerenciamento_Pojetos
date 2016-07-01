<?php include "template/topo.php";
include "util/clientes_funcoes.php";

if(isset($_GET["editar"]))
{
	$dados = editarCliente($_GET["editar"]);	


}
else 
{
				$url = "salvar_usuarios.php";
				$dados = array(

				"id"=>"",
				"nome"=>"",
				"email"=>"",
				"senha"=>"",	
				);

}


?>






<div class="container">
	<form method="Post" action="<? echo $dados["url"] ?>" class="form-horizontal">
		<div class="form-group">
			<label class="col-sm-2">Nome</label>
			<div class="col-sm-10">
				
			  <input type="text" name="nome" class="form-control" placeholder="Digite o nome do cliente?"
			   value="<? echo $dados['nome'] ?>"/>
			</div>
	</div>
</div>	

<div class="container">
		<div class="form-group">
			<label class="col-sm-2">E-mail</label>
			<div class="col-sm-10">
			  <input type="text" name="email" class="form-control" value="<? echo $dados['email']?>" placeholder="Digite o email do cliente?"/>
			</div>
	</div>
</div>	

<div class="container">
		<div class="form-group">
			<label class="col-sm-2">Senha</label>
			<div class="col-sm-10">update projetos
                                 set nome='".$cliente."',
    
			  <input type="text" name="senha" class="form-control" value="<? echo $dados['senha']?>" placeholder="Digite o senha do cliente?"/>
			</div>
			<input type="hidden" name="id" value="<? echo $dados['id']?>">
			<input type="submit" class="btn btn-primary" value="Salvar">
		</form>

	</div>

</div>	




<?php include "template/rodape.php";?>