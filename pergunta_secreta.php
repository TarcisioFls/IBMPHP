
<?php
  include_once './menu_publico.php';
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
            <form action="mostrar_senha.php" method="post" enctype="multipart/form-data" name="formmostar">
            <section class="container-fluid">
              <br/>
              
            &nbsp &nbsp <a href="index.php" <span>Pagina Inicial</span></a> &nbsp -> &nbsp
						<a href="login2.php" <span>Logar</span></a> &nbsp -> &nbsp
						<a href="lembar_senha.php" <span>Recuperar Senha</span></a> &nbsp -> &nbsp
						<a href="pergunta_secreta.php" <span>Pergunta de Segurança</span></a> 
						<br/>
						<br/>
			
			
             <h1 class="text-center">Responda a pergunta de segurança</h1>
             <br/>
                <div class="modal-body">
                   
                    <table class="table-condensed">
                        <?php
//                       inclui o arquivo de configuração do sistema
                         include "./conexao.php";

//                      recebe dados do formulario
                        $login = htmlspecialchars($_POST['login']);

                        // faz consulta no banco de dados
                        $consulta = mysql_query("select * from dados_usuarios where Login = '$login'");

                        // imprime a pergunta do usuario
                        while($linha = mysql_fetch_object($consulta)) {
                        echo "<label>".$linha->Pergunta."?</label>";
                        }
                        ?>
                                          
                        <tr>
                            <td>
							
								<input type="text" required="required" maxlength="200" class="form-control" id="resposta" placeholder="Resposta" required="required" name="resposta" maxlength="200">
								<th class="corAsteristico">*<th>
                            </td>
                         </tr>
                                               
                        <tr>
                            <td>
                               	<input type="text" required="required" maxlength="200" class="form-control" id="login" placeholder="Login" required="required" name="login" maxlength="200">
								<th class="corAsteristico">*<th>
                            </td>
                        </tr>  
                        
                       
                        <tr>
                            <td>
                               <a href="login2.php"><input class="btn btn-primary btn-lg btn-block" type="submit" value="Mostar senha" id="mostar" name="mostar" class="btn"><a/>
                            </td>
                        </tr>
      
                                            
                    </table>
                        </div>
                             </section>                
                                </form>
                                    </body>
                                        </html>

  