<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form name="login" method="post" action="logar.php">
            
        <div class="navbar-form navbar-right" role="button">
            <div >
				<button type="button" class="btn btn-default" data-toggle="modal" data-target="#idModal">Logar</button>
            </div>
        </div>
        <div class="modal fade" id="idModal">
            <div class="modal-dialog">
            <div class="modal-content">                                        
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                 <h1 class="text-center">Efetue seu login</h1>
            </div>
            <div class="modal-body">
            <div class="form-group">
				<input type="text" class="form-control input-lg" placeholder="Login" required="required" name="login">
            </div>
            <div class="form-group">
              <input type="password" class="form-control input-lg" placeholder="Senha" required="required" name="senha">
              <input type="checkbox" name="lembrar" id="lembrar" value="1"<?php if ( !empty($_COOKIE['lembrar']) ) echo ' checked="checked"';?> />
              <label for="lembrar" style="display:inline">Lembrar nome de usu&aacute;rio.</label>
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block">Entrar</button>
				<br/>
              <span><a href="cadastro_login.php" >Cadastre-se</a></span>
              <span class="pull-right"><a href="./lembrar_senha.php"> Esqueceu a senha?</a></span>
            </div>
				</form>
					</div>
						<div class="modal-footer">
							<div class="col-md-12">
								<button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
							</div>
						</div>
							</div>
								</div>
									</form>
										</body>
											</html>

