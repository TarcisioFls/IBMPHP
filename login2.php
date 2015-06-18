<?php
    include "./menu_publico.php";
?>

<html lang="pt-br">
    <head>
        <title>cadastrar_login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery-2.1.3.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
		<body>
            <form name="login" method="post" action="logar.php">
              <br/>
               &nbsp &nbsp <a href="index.php" <span>Pagina Inicial</span></a> &nbsp -> &nbsp
							<a href="login2.php" <span>Login</span></a>
				<div class="modal-header">
                <div class="modal-dialog">
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
                </div> 
					</form>
						</body>
							</html>

  