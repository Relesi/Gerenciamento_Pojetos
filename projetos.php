<?php include "template/topo.php"; 

include "util/projetos_funcoes.php";

$result = listaProjetos();

?>

<div class="container">
	<a class="btn btn-success" href="cadastrar_projetos.php">Novo</a>
 	<table class="table table-striped">
	<th>ID</th>
	<th>Nome</th>
	<th>Cliente</th>
	<th>Data Entrega</th>
	<th>Valor</th>
	
	<?php foreach($result as $p ){?>

	<tr>

     <td><?php echo $p['id'];?></td>
     <td><?php echo $p['nome'];?></td>
     <td><?php echo $p['cliente'];?></td>
     <td><?php echo $p['data_entrega'];?></td>
     <td><?php echo $p['valor'];?></td>
     <td> 

      	#<a class="btn btn-sucess" href="cadastrar_projetos.php?editar=<? echo $p['id'];?>">Editar</a>
          <a class="btn btn-danger" href="deletar_projetos.php?id=<? echo $p['id']?>">Deletar
      		<span class="glyphicon glyphicon-remove"></span></a>
     </td>
     </tr>
	

	<?php }?>

	</table>


	

</div>

<?php include "template/rodape.php";?>