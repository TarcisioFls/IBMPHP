<?php
    include_once './menu_publico.php';
    ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
            <form method="POST" name="recumperar_senha" action="enviar_senha.php"> 
            <section class="container-fluid">
              <br/>
              
            <a href="index.php" <span>Pagina Inicial</span></a>
                <div class="modal-body">
                   
                    <table class="table-condensed">
                                          
                         <tr>
                            <td>
                                <label for="login">Login</label>
                            </td>
                            <td>
                                <input type="text" name="login" id="login" required="required"  class="form-control"  maxlength="30">
                            </td>
                         </tr>
                                               
                           <tr>
                            <td>
                                <label for="email">Email</label>
                            </td>
                            <td>
                                <input type="text" name="email" id="email" required="required" class="form-control">
                            </td>
                        </tr>  
                        <tr>
                            <td>
                        <input type="submit" value="Enviar solicitação" id="enviar" name="enviar" class="btn">
                        
                            </td>
                            </tr>
                    </table>
                </div>
                
           
                 </section>                
        </form>
        <br />
    </body>
</html>

  