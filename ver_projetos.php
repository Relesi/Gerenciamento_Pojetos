		<?php include "template/topo.php"; 

		include_once "util/projetos_funcoes.php";	


		if(!isset($_GET['id']))
		{
		    echo "Projeto nao encontrado";

		}
		else
		{
		     $projetos = selecionarProjetosPorId($_GET['id']);

		}  


		?>



		<div class="container">
		<div class="row">
		<div class="container col-lg-6">
		<div class="panel panel-default">
		<div class="panel panel-heading">Objetivo</div>
		<div class="panel panel-body">
		<? echo $projetos["objetivo"];?>
	</div>
</div>
				


			<div class="panel panel-primary">
			<div class="panel panel-heading">cenario proposto</div>
			<div class="panel panel-body">
			<? echo $projetos["proposto"];?>	

			</div>
			</div>
					

			<div class="panel panel-success">
			<div class="panel panel-heading">cenario atual</div>
			<div class="panel panel-body">
			<? echo $projetos["atual"];?>
		</div>
	</div>
</div>


		<div class="container col-lg-6">
			<div class="panel panel-default">
			<div class="panel panel-heading">Detalhes</div>
			<div class="panel panel-body">
				<div class="input-group">
					<span class="input-group-addon">
						<span class="glyphicon glypicon-user">Cliente</span> </span>
					<input type= 'text' class="form-control"
						<? echo $projetos["cliente"];?>
			</div></br>	

						<div class="input-group">
							<span class="input-group-addon">
								<span class="glyphicon glypicon-user">Data Entrega</span></span>
										<input type= 'text' class="form-control">
											<? echo $projetos["data_entrega"];?>
										</div></br>

										<?php if($projetos['status'] !=1){?>

											<div class="form-inline">
												<div class="form-group">
													<a href="aceite.php?id=<? echo $projetos['id']; ?>$status=1"<a class="btn btn-sucess">Aprovar</a>
												</div>


												<div class="form-group">
													<a href="aceite.php?id=<? echo $projetos['id']; ?>$status=1"<a class="btn btn-sucess">Reprovar</a>
												</div>
											</div>
												<?php } ?>
											</div>


<?php include "template/rodape.php";?>