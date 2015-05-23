<?php
    require_once './formulario.php';
    
    ini_set('default_charset','UTF-8');
    
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
    
    include './conexao.php';

    $query = "INSERT INTO usuario(nome, nomePai, nomeMae, dataNascimento, dataConversao, dataBatismo, sexo, estadoCivil, conjuge, quantidadeFilho, rg, cpf, rua, numero, bairro, estado, cidade, cep, referencia, status, nivel, fone1, fone2, email) VALUES ('$nome', '$nomePai', '$nomeMae', '$dataNascimento', '$dataConversao', '$dataBatismo', '$sexo', '$estadoCivil', '$conjuge', '$quantidadeFilho', '$rg', '$cpf', '$rua', '$numero', '$bairro', '$estado', '$cidade', '$cep', '$referencia', '$status', '$nivel', '$fone1', '$fone2', '$email')";

    mysqli_query($conn, $query);   
    
?>
