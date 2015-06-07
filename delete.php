<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt-br">
    <head>
        <title>1ª Igreja Batista em Muribeca</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery-2.1.3.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
            include_once "./menu.php";
        ?>
        <form method="POST" action="selecionarApagar.php">
            <section class="container-fluid">
                <h3>Busca Para deletar</h3>
                <div class="panel panel-default">
                    <table class="table-condensed">
                        <tr>
                            <td>
                                <label for="nome">Nome do Membro</label>
                            </td>
                            <td>
                                <input type="text" name="nome" id="nome"  class="form-control">
                            </td>
                        </tr>
                    </table>
                </div>
                <input type="submit" value="Buscar" class="btn">
                <input type="reset" value="Limpar" class="btn">
            </section>
        </form>        
    </body>
</html>