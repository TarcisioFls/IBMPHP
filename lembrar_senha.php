
<?php
    include "./conexao.php";
?>

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
		<link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
            <form action="pergunta_secreta.php" method="post" enctype="multipart/form-data" name="formlembrar">
            <section class="container-fluid">
              <br/>
              
            &nbsp &nbsp <a href="index.php" <span>Pagina Inicial</span></a> &nbsp -> &nbsp
						  <a href="login2.php" <span>Logar</span></a> &nbsp -> &nbsp
						  <a href="lembrar_senha.php" <span>Recuperar Senha</span></a>
			
            <h1 class="text-center">Recuperar senha</h1>
            <br/>
                <div class="modal-body">
                   
                    <table class="table-condensed">
                                          
                        <tr>
                            <td>
								<input type="text" required="required" maxlength="200" class="form-control" id="login" placeholder="Login" required="required" name="login" maxlength="100">
                            </td>
							<th class="corAsteristico">*<th>
                        </tr>
						<tr>
                            <td>
								<input maxlength="200"class="form-control"  id="label3" placeholder="Email" required="required"name="email">
							</td>
							<th class="corAsteristico">*<th>
                        </tr>
                         
                        <tr>
                            <td>
                                <br/>
                            <br/>
								<input class="btn btn-primary btn-lg btn-block" type="submit" value="Verificar" id="Verificar" name="Verificar" class="btn" >
                            </td>
                        </tr>
                    </table>
                </div>
                
           
                 </section>                
        </form>
        <br />
    </body>
</html>

  