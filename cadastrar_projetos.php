<?php include "template/topo.php";

include "util/projetos_funcoes.php";



if(isset($_GET["editar"]))
{
	$dados = editarProjetos($_GET["editar"]);


}
else
{
	$dados = cadastrarProjetos();
}


?>

<div class="container">
	<form method="Post" action= "<?php echo $dados["url"] ?>" class="form-horizontal">
		<div class="form-group">
			<label class="col-sm-2">Nome</label>
			<div class="col-sm-10">
			  <input type="text" value="<?php echo $dados['nome']?>" name= "nome"class="form-control" placeholder="digite o nome do projeto?"/>
			</div>
		
	</div>
	
		<div class="form-group">
			<label class="col-sm-2">Cliente</label>
			<div class="col-sm-10">

			  <select name="cliente">

			  	<?php  echo selecionaCliente($dados["cliente"]);?>		
			 
			  </select>

			</div>
		
		</div>

		<div class="form-group">
			<label class="col-sm-2">Data Entrega</label>
			<div class="col-sm-10">
			  <input type="text" value="<?php echo $dados["data_entrega"]?>" name= "data_entrega"class="form-control" placeholder="digite o nome do projeto?"/>
			</div>
		
	</div>

		<div class="form-group">
			<label class="col-sm-2">Valor</label>
			<div class="col-sm-10">
			  <input type="text" value="<?php echo $dados["valor"]?>" name= "valor"class="form-control" placeholder="digite o nome do projeto?"/>
			</div>
		</div>


			<div class="form-group">
			<label class="col-sm-2">Objetivo</label>
			<div class="col-sm-10">
			  <textarea class="form-control" name="objetivo" cols="20" rows="2" placeholder="objetivo"></textarea>
			</div>
			</div>

			<div class="form-group">
			<label class="col-sm-2">Cenario Atual</label>
			<div class="col-sm-10">
			  <textarea class="form-control" name="atual" cols="20" rows="2" placeholder="objetivo"></textarea>
			</div>
			</div>

			<div class="form-group">
			<label class="col-sm-2">Proposto</label>
			<div class="col-sm-10">
			  <textarea class ="form-control" name="proposto" cols="20" rows="2" placeholder="objetivo"></textarea>
			</div>
			</div>


			<input type="hidden" value= "<?php echo $dados["id"]?>" name="id"/>
			<input type="submit" class="btn btn-primary" value="Salvar">
		</form>
	</div>


		
		
			

		
	</div>


</div>	


<?php include "template/rodape.php";?>