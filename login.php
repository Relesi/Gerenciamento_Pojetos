



<div class="container">
          <div class="row">                 
                  <div class="col-lg-4">
                      <div class="panel panel-success">
                          <div class="panel-heading">Login</div>
                           <div class="panel-body"> 
                                  <form class="form-horizontal" method="post" action="fazer_login.php">
                                       <div class="form-group">
                                            <label class="col-sm-2">E-mail:</label>
                                            <div class="col-sm-10">
                                                 <input type="email" name="email" required class="form-control" placeholder="Digite o email"/>
                                            </div>
                                       </div>
                                        <div class="form-group">
                                            <label class="col-sm-2">Senha:</label>
                                            <div class="col-sm-10">
                                                 <input type="password" name="senha" required class="form-control" placeholder="Digite a senha"/>
                                            </div>
                                       </div>
                                     
                                       <input type="submit" class="btn btn-primary" value="Login" />
                                  </form>
                           </div>
                      </div>
                    </div>
            </div>
    </div>
<?php include("template/rodape.php");?>
