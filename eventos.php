<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt-bt">
    <head>
        <title>1ª Igreja Batista em Muribeca</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery-2.1.3.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
        <script>
            $(function(){
               $('#form').submit(function(){
                  $.ajax({
                     url: 'cadastroEvento.php',
                     type: 'POST',
                     data: $('#form').serialize(),
                     success: function(result){
                             if(result == "Sucesso") {
                             $("#form").each(function () {
                                 this.reset();
                             });
                             $("#teste").html('<div class="alert alert-success"><button type="button" class="close" \n\
                                 data-dismiss="alert">×</button><h4>Sucesso!</h4>Cadastro Realizado com sucesso</div>');
                             $("#nome").focus();    
                        }
                        else {
                            $("#teste").html('<div class="alert alert-error"><button type="button" class="close" \n\
                                 data-dismiss="alert">×</button><h4>Falha!</h4>Cadastro não efetuado. Por favor tentar novamente!</div>');
                        }
                     }
                  });
                  return false;
               }); 
            });
        </script>
    </head>
    <body>
        <?php
            include_once './menu.php';
        ?>
        <section class="container-fluid">
            <div id="teste"></div>
            <form id="form" method="POST" action="">
                <br/>
                <a href="index_privado.php" <span>Pagina Inicial</span></a>
                <h1 class="text-center">Cadastros de Eventos</h1>
                <div class="panel panel-default2">
                    <table class="table-condensed">
                        <tr>
                            <td>
                                <label for="nome">Nome do Evento</label>
                            </td>
                            <td>
                                <input type="text" name="nome" id="nome" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="dataInicio">Data de Inicio</label>
                            </td>
                            <td>
                                <input type="date" name="dataInicio" id="dataInicio" class="form-control">
                            </td>
                            <td>
                                <label for="dataTermino">Até</label>
                            </td>
                            <td>
                                <input type="date" name="dataTerminio" id="dataTerminio" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="horaInicio">Hora de Inicio</label>
                            </td>
                            <td>
                                <input type="time" name="horaInicio" id="horaInicio" class="form-control">
                            </td>
                            <td>
                                <label for="horaTermino">Ás</label>
                            </td>
                            <td>
                                <input type="time" name="horaTermino" id="horaTermino" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="grupo">Grupo Organizador</label>
                            </td>
                            <td>
                                <input type="text" name="grupo" id="grupo" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="local">Local de Realização</label>
                            </td>
                            <td>
                                <input type="text" name="local" id="local" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="descricao">Descrição do Evento</label>
                            </td>
                            <td>
                                <textarea name="descricao" id="descricao" class="form-control"></textarea>
                            </td>
                        </tr>
                    </table>
                </div>    
                <input type="submit" value="Cadastrar Evento" class="btn">
                <input type="reset" value="Limpar" class="btn">
            </form>
        </section>
    </body>
</html>
