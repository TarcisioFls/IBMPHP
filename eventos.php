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
    </head>
    <body>
        <?php
            include_once './menu.php';
        ?>
        <section class="container-fluid">
            <form method="POST" action="cadastroEvento.php">
                <br/>
                <a href="index.php" <span>Pagina Inicial</span></a>
                <h3>Cadastros de Eventos</h3>
                <div class="panel panel-default">
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
