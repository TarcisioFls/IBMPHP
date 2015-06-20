
<?php
    include "./menu_publico.php";
?>
<!DOCTYPE html>

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
            <form action="cadastro.php" method="post" enctype="multipart/form-data" name="formcadastro">
            <section class="container-fluid">
              <br/>
              &nbsp &nbsp <a href="index.php" <span>Pagina Inicial</span></a> &nbsp -> &nbsp
						  <a href="login2.php" <span>Logar</span></a>
              
              <h1 class="text-center">Cadastre-se</h1>
                <div class="modal-body">
                   
                    <table class="table-condensed">
                       <tr>
                            <td>
                                <input  required="required" class="form-control"  name="nome" type="text" id="label3" size="40" maxlength="200" placeholder="Nome">
                            </td>
                            <th class="corAsteristico">*<th>
                        </tr>
                        
                         <tr>
                            <td>
                                <input required="required"  class="form-control" name="login" type="text" id="login" size="40" maxlength="200" placeholder="Login">
                            </td>
                            <th class="corAsteristico">*<th>
                         </tr>
                            
                         <tr>
                            <td>
                                <input required="required" class="form-control" name="senha" type="password" id="label" size="20" maxlength="15" placeholder="Senha">
                            </td>
                            <th class="corAsteristico">*<th>
                        </tr>
                       
                        <tr>
                            <td>
                                <input required="required" class="form-control" name="rep_senha" type="password" id="label2" size="20" maxlength="15" placeholder="Repita a senha">
                            </td>
                            <th class="corAsteristico">*<th>
                        </tr>
                       
                        
                         <tr>
                            <td>
                                <input required="required" class="form-control" name="email" type="text" id="label4" size="40" maxlength="200"placeholder="Email">
                            </td>
                            <th class="corAsteristico">*<th>
                        </tr>  
                        
                        <tr>
                            <td>
                                <input required="required" class="form-control" name="pergunta" type="text" id="label11" size="40" maxlength="200" placeholder="Pergunta de Segurança">
                            </td>
                            <th class="corAsteristico">*<th>
                        </tr>
                        
                       <tr>
                            <td>
                                <input required="required" class="form-control" name="resposta" type="text" id="label12" size="40" maxlength="200"  placeholder="Resposta de Segurança">
                            </td>
                            <th class="corAsteristico">*<th>
                        </tr>
                        
                        <tr>
                            <td>
                        <input type="submit" value="Cadastrar" id="enviar" name="enviar" class="btn btn-primary btn-lg btn-block">
                        
                            </td>
                        </tr>
                           
                    </table>
                </div>
                </section>                
        </form>
        
       </body>
</html>

