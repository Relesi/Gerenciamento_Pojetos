<?php 

include "template/topo.php"; 
include "util/usuario_funcoes.php";

$result = listaUsuarios();




?>





<div class="container">
	<a class="btn btn-success" href="cadastrar_usuarios.php">Novo</a>
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
      	<a class="btn btn-sucess" href="cadastrar_usuarios.php?editar=<? echo $p['id'];?>">Editar</a>
      	<a class="btn btn-danger" href="deletar_usuario.php?id=<? echo $p['id']?>">Deletar
      	<span class="glyphicon glyphicon-remove"></span></a>
      </td>
     </tr>
	

	<?php }?>




	</table>	

</div>




	



<?php include "template/rodape.php";?>