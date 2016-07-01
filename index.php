<?php
include_once "template/topo.php";
include_once "util/projetos_funcoes.php";

define('AGUARDANDO',0);
define('APROVADOS',1);
define('REPROVADOS',2);

$aguardando = selecionarProjetosPorStatus(AGUARDANDO);
$aprovados  = selecionarProjetosPorStatus(APROVADOS);
$reprovados = selecionarProjetosPorStatus(REPROVADOS);

?>
<div class="container">
   <div class="row">
    <div class="col-lg-4">
        <div class="panel panel-info ">
          <div class="panel-heading">Aguardando</div>
          <div class="panel-body">
            <ul class="list-group">
              <? foreach($aguardando as $a) { ?>
              <li class="list-group-item">
                <a class="btn btn-primary" href='ver_projetos.php?id=<?php echo $a["id"];?>'>Ver</a> <? echo $a['nome']; ?> 
              </li>
              <? } ?>
            </ul>
          </div>
        </div>
    </div> 
    <div class="col-lg-4">
        <div class="panel panel-success">
          <div class="panel-heading">Aprovados</div>
          <div class="panel-body">
            <ul class="list-group">
              <? 
                
                foreach($aprovados as $ap) { ?>
              <li class="list-group-item">
                <a class="btn btn-primary" href='ver_projetos.php?id=<?php echo $ap["id"];?>'>Ver</a> <? echo $ap['nome']; ?> 
              </li>
              <? 
                $p++;
               } ?>
            </ul>
          </div>
        </div>
    </div>  
    <div class="col-lg-4">
        <div class="panel panel-danger">
          <div class="panel-heading">Reprovados</div>
          <div class="panel-body">
            <ul class="list-group">
              <? 
                foreach($reprovados as $r) { ?>
              <li class="list-group-item">
                <a class="btn btn-primary" href='ver_projetos.php?id=<?php echo $r['id'];?>'>Ver</a><? echo $r['nome']; ?> 
              </li>
              <? 
               } ?>
            </ul>
          </div>
        </div>
    </div>    
  </div>
</div>

<?php
include "template/rodape.php";
?>



    