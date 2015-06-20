<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt-br">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery-2.1.3.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <form method="GET" action="">
            <section class="container-fluid">
            <br/>


            <div class="panel panel-default">
                <table class="table-condensed">
                    <?php
                        ini_set('default_charset','UTF-8');

                        $id = isset($_POST ['id']) ? $_POST['id'] : '';


                        include './conexao.php';
                        
                     

                        $querylistar = "SELECT * FROM `evento` WHERE dataInicio >= CAST('2015-01-01' AS DATE)AND dataTerminio <= CAST('2015-01-31' AS DATE) order by dataInicio;";

                        $result2 = mysqli_query($conn, $querylistar);
                        while ($query3 = mysqli_fetch_array($result2,MYSQLI_ASSOC)) {
                            echo "<tr>
                                                             
                                        <td>
                                            <h2>".$query3['nome']."</h2>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for='dataInicio'>Data do Inicial do Evento</label>
                                        </td>                            
                                        <td>
                                            <p>".$query3['dataInicio']."</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for='dataTerminio'>Data prevista para o Término do Evento</label>                    
                                        </td>
                                        <td>
                                            <p>".$query3['dataTerminio']."</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for='horaInicio'>Horário inicial para o evento</label>
                                        </td>
                                        <td>
                                            <p>".$query3['horaInicio']."</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for='horaTermino'>Data de Nascimento</label>
                                        </td>
                                        <td>
                                            <p>".$query3['horaTermino']."</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for='grupo'>Grupo Organizador do Evento</label>
                                        </td>
                                        <td>
                                            <p>".$query3['grupo']."</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for='local'>Local onde o Evento será realizado</label>
                                        </td>
                                        <td>
                                            <p>".$query3['local']."</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for='descricao'>Descrição do Evento</label>
                                        </td>
                                        <td>
                                            <p>".$query3['descricao']."</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button title ='Curtir' type='button' class='btn btn-default' aria-label='Left Align'><span class='glyphicon glyphicon-thumbs-up' aria-hidden='true'".$query3['curtir']."></span><span> 0</span></button>
                                            <button title ='Comparecer' type='button' class='btn btn-default' aria-label='Left Align'><span class='glyphicon glyphicon-sunglasses' aria-hidden='true'".$query3['ir']."></span></span><span> 0</span></button>
                                        </td>
                                    </tr>
                            </div>
                            </table>
                            <hr>
                            ";
                            
                        }    
                    ?>
            </section>

        </form>
    </body>
</html>


