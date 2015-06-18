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
            include_once './menu.php';
        ?>
        <section class="container-fluid">
            <br/>
            <a href="index.php" <span>Pagina Inicial</span></a>
            <h3>Atualização dos Dados Pessoais</h3>
            <div class="panel panel-default">
                <table class="table-condensed">
                    <?php
                        ini_set('default_charset','UTF-8');

                        $id = isset($_POST ['id']) ? $_POST['id'] : '';
                        $nome = isset($_POST ['nome']) ? $_POST['nome'] : '';
                        $nomePai = isset($_POST ['nomePai']) ? $_POST['nomePai'] : '';
                        $nomeMae = isset($_POST ['nomeMae']) ? $_POST['nomeMae'] : '';
                        $dataNascimento = isset($_POST ['dataNascimento']) ? $_POST['dataNascimento'] : '';
                        $dataConversao = isset($_POST ['dataConversao']) ? $_POST['dataConversao'] : '';
                        $dataBatismo = isset($_POST ['dataBatismo']) ? $_POST['dataBatismo'] : '';
                        $sexo = isset($_POST ['sexo']) ? $_POST['sexo'] : '';
                        $estadoCivil = isset($_POST ['estadoCivil']) ? $_POST['estadoCivil'] : '';
                        $conjuge = isset($_POST ['conjuge']) ? $_POST['conjuge'] : '';
                        $quantidadeFilho = isset($_POST ['quantidadeFilho']) ? $_POST['quantidadeFilho'] : '';
                        $rg = isset($_POST ['rg']) ? $_POST['rg'] : '';
                        $cpf = isset($_POST ['cpf']) ? $_POST['cpf'] : '';
                        $rua = isset($_POST ['rua']) ? $_POST['rua'] : '';
                        $numero = isset($_POST ['numero']) ? $_POST['numero'] : '';
                        $bairro = isset($_POST ['bairro']) ? $_POST['bairro'] : '';
                        $estado = isset($_POST ['estado']) ? $_POST['estado'] : '';
                        $cidade = isset($_POST ['cidade']) ? $_POST['cidade'] : '';
                        $cep = isset($_POST ['cep']) ? $_POST['cep'] : '';
                        $referencia = isset($_POST ['referencia']) ? $_POST['referencia'] : '';
                        $status = isset($_POST ['status']) ? $_POST['status'] : '';
                        $nivel = isset($_POST ['nivel']) ? $_POST['nivel'] : '';
                        $fone1 = isset($_POST ['fone1']) ? $_POST['fone1'] : '';
                        $fone2 = isset($_POST ['fone2']) ? $_POST['fone2'] : '';
                        $email= isset($_POST ['email']) ? $_POST['email'] : '';

                        include "./conexao.php";

                        $queryAtualizar = "UPDATE usuario
                                         SET nome='$nome',nomePai='$nomePai',nomeMae='$nomeMae',
                                                 dataNascimento='$dataNascimento',dataConversao='$dataConversao',dataBatismo='$dataBatismo',sexo='$sexo',
                                                 estadoCivil='$estadoCivil',conjuge='$conjuge',quantidadeFilho='$quantidadeFilho',rg='$rg',cpf='$cpf',
                                                 rua='$rua',numero='$numero',bairro='$bairro',estado='$estado',cidade='$cidade',
                                                 cep='$cep',referencia='$referencia',status='$status',nivel='$nivel',fone1='$fone1',
                                                 fone2='$fone2',email='$email' 
                                         WHERE id ='$id'";
                        mysqli_query($conn, $queryAtualizar);
                        
                        ?>

                  
        </section>
    </body>
</html>