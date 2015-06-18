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
        <form action="logar.php" method="post" enctype="multipart/form-data" name="form_mostra_senha">
        <section class="container-fluid">
            <br/>
                &nbsp &nbsp <a href="index.php" <span>Pagina Inicial</span></a> &nbsp -> &nbsp
							<a href="login2.php" <span>Logar</span></a> &nbsp -> &nbsp
							<a href="lembar_senha.php" <span>Recuperar Senha</span></a> &nbsp -> &nbsp
							<a href="pergunta_secreta.php" <span>Pergunta de Segurança</span></a>&nbsp -> &nbsp
							<a href="mostrar_senha.php" <span>Dados de Login</span></a>
							<br/>
							<br/>
				
                    <h1 class="text-center">Dados de Login</h1>
                        <div class="modal-body">
                             <table class="table-condensed">
                        
                            <?php
                            // inclui o arquivo de configuração do sistema
                                include "./conexao.php";

                            // recebe dados do lembrar_senha.php
                                $login = htmlspecialchars($_POST['login']);
                                $resposta = htmlspecialchars($_POST['resposta']);

                            // faz consulta no banco de dados
                            $consulta = mysql_query("select * from dados_usuarios where Login = '$login'");

                            // imprime dados do usuario
                            while($linha = mysql_fetch_object($consulta)) {
                            
                            // verifica se a resposta é verdadeira
                             
                                 if($resposta == $linha->Resposta) {
                            ?>
                                          
                        <tr>
                            
                            <td>
							 <label>Login</label>
                                <input name="login" type="text" id="label" required="required"  class="form-control"  maxlength="30" value="<?php echo $linha->Login;?>" size="20" />
                            <br/>
							</td>
                        </tr>
                                               
                        <tr>
                            <td>
								 <label>Senha</label>
                                <input name="senha" type="text" id="label" required="required" class="form-control" value="<?php echo $linha->Senha;?>" maxlength="200" />
                            </td>
                        </tr>  
                                      
                        <tr>
                            <td>
							<br/>
								<button name="logar"class="btn btn-primary btn-lg btn-block" id="logar" >Logar</button>
                            </td>
                        </tr>
                        
                        <?php
                          }else {
                              echo "<font color=red><b> Sua resposta esta errada! </font></b>";
                                exit;
                          }
                          }
                              ?>
                    </table>
                </div>
                
           
                 </section>                
        </form>
        <br />
    </body>
</html>

  