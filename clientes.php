<?php 

include "template/topo.php"; 
include "util/clientes_funcoes.php";

$result = listaClientes();




?>





<div class="container">
	<a class="btn btn-success" href="cadastrar_clientes.php">Novo</a>
 	<table class="table table-striped">
	<th>ID</th>
	<th>Nome</th>
	<th>Email</th>
	
	
	
	<?php foreach($result as $p ){?>

	<tr>

     <td><?php echo $p['id'];?></td>
     <td><?php echo $p['nome'];?></td>
     <td><?php echo $p['email'];?></td>
     

      <td> 
      	<a class="btn btn-sucess" href="cadastrar_clientes.php?editar=<? echo $p['id'];?>">Editar</a>
      	<a class="btn btn-danger" href="deletar_clientes.php?id=<? echo $p['id']?>">Deletar
      	<span class="glyphicon glyphicon-remove"></span></a>
      </td>
     </tr>
	

	<?php }?>




	</table>	

</div>




	



<?php include "template/rodape.php";?>