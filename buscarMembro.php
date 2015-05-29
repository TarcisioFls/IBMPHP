<?php include_once './menu.php'; ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt-br">
    <head>
        <title>Buscar de Membros</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery-2.1.3.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <br/>
        <section class="container-fluid">
            <br/>
            <a href="index.php" <span>Pagina Inicial</span></a> -> <a href="relatorio.php" <span>Busca</span></a>
            <h3>Resultado da Busca</h3>
            <form method="POST" action="">
                <div class="panel panel-default">
                    <table class="table table-bordered table-hover" title="Resultado da Busca">
                    <thead>
                    <tr>
                        <th>Selecione</th>
                        <th>Nome do Membro</th>
                        <th>Nome do Pai</th>
                        <th>Nome da Mãe</th>
                        <th>Data de Nascimento</th>
                        <th>Data de Conversão</th>
                        <th>Data de Batismo</th>
                        <th>Estado Civil</th>
                        <th>Rua</th>
                        <th>Bairro</th>
                        <th>Cidade</th>
                        <th>Status</th>
                        <th>Nível</th>
                        <th>Telefone Principal</th>
                    </tr>
                    </thead>
                    <tbody>

                <?php

                    $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
                  /*  $dataNascimento = isset($_POST['dataNascimento']) ? $_POST['dataNascimento'] : '';
                    $dataConversao = isset($_POST['dataConversao']) ? $_POST['dataConversao'] : '';
                    $dataBatismo = isset($_POST['dataBatismo']) ? $_POST['dataBatismo'] : '';
                    $sexo = isset($_POST['sexo']) ? $_POST['sexo'] : '';
                    $estadoCivil = isset($_POST['estadoCivil']) ? $_POST['estadoCivil'] : '';
                    $bairro = isset($_POST['bairro']) ? $_POST['bairro'] : '';
                    $estado = isset($_POST['estado']) ? $_POST['estado'] : '';
                    $cidade = isset($_POST['cidade']) ? $_POST['cidade'] : '';
                    $cep = isset($_POST['cep']) ? $_POST['cep'] : '';
                    $status = isset($_POST['status']) ? $_POST['status'] : '';
                    $nivel = isset($_POST['nivel']) ? $_POST['nivel'] : ''; */

                    include_once './conexao.php';

                    $query = "SELECT * FROM usuario WHERE nome like '$nome%'";
                           // . " OR dataNascimento like '%$dataNascimento%' OR dataConvesao like '%$dataConversao%' OR dataBatismo = '$dataBatismo' OR sexo = '$sexo' OR estadoCivil = '$estadoCivil' OR bairro = '$bairro' OR estado = '$estado' OR cidade = '$cidade' OR cep = '$cep' OR status = '$status' OR nivel = '$nivel' ";

                    $result = mysqli_query($conn, $query);

                    while ($query2 = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                        echo "<tr><td><input type='radio' name='id' value='".$query2['id']."'></td><td>".$query2['nome']."</td><td>".$query2['nomePai']."</td><td>".$query2['nomeMae']."</td><td>".$query2['dataNascimento']."</td><td>".
                                        $query2['dataConversao']."</td><td>".$query2['dataBatismo']."</td><td>".$query2['estadoCivil']."</td><td>".
                                        $query2['rua']."</td><td>".$query2['bairro']."</td><td>".$query2['cidade']."</td><td>".
                                        $query2['status']."</td><td>".$query2['nivel']."</td><td>".$query2['fone1']."</td></tr>";
                    }

                    mysqli_close($conn);
                ?>
                    </tbody>
                </table>
                </div>
            </form>
            <input type="submit" class="btn" value="Atualizar">
            <input type="reset" class="btn" value="Limpar">
        </section>    
    </body>
</html>