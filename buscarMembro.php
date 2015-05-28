<?php

    $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
    $dataNascimento = isset($_POST['dataNascimento']) ? $_POST['dataNascimento'] : '';
    $dataConversao = isset($_POST['dataConversao']) ? $_POST['dataConversao'] : '';
    $dataBatismo = isset($_POST['dataBatismo']) ? $_POST['dataBatismo'] : '';
    $sexo = isset($_POST['sexo']) ? $_POST['sexo'] : '';
    $estadoCivil = isset($_POST['estadoCivil']) ? $_POST['estadoCivil'] : '';
    $bairro = isset($_POST['bairro']) ? $_POST['bairro'] : '';
    $estado = isset($_POST['estado']) ? $_POST['estado'] : '';
    $cidade = isset($_POST['cidade']) ? $_POST['cidade'] : '';
    $cep = isset($_POST['cep']) ? $_POST['cep'] : '';
    $status = isset($_POST['status']) ? $_POST['status'] : '';
    $nivel = isset($_POST['nivel']) ? $_POST['nivel'] : '';
    
    include_once './conexao.php';
    
    $query = "SELECT * FROM usuario WHERE nome = '$nome' OR dataNascimento = '$dataNascimento' OR dataConvesao = '$dataConversao' OR dataBatismo = '$dataBatismo' OR sexo = '$sexo' OR estadoCivil = '$estadoCivil' OR bairro = '$bairro' OR estado = '$estado' OR cidade = '$cidade' OR cep = '$cep' OR status = '$status' OR nivel = '$nivel' ";
    
    mysqli_query($conn, $query);
