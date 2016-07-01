
<?php

include "./util/comum.php";
validarSessao();
?>






<html>
<head><title>Aplicacao Projetos</title></head>
<body>
	<nav class="navbar navbar-default">
		<div class="navbar-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="/4500-PHP/Projetos/">Projetos</a>
				</div>
				<ul class="nav navbar-nav">
					<li><a href="projetos.php">Projetos</a></li>
					<li><a href="clientes.php">Clientes</a></li>
					<li><a href="usuarios.php">Usuario</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
				<li><a href="#"><? echo $_SESSION['nome'];?></a></li>	

					<li><a href="logaut.php" >Sair</a></li>
				</ul>
			</div>
		</div>
		</nav>