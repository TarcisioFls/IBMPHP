<?php

    require './eventos.php';
    
    ini_set('default_charset','UTF-8');
    
    $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
    $dataInicio = isset($_POST['dataInicio']) ? $_POST['dataInicio'] : '';
    $dataTerminio = isset($_POST['dataTerminio']) ? $_POST['dataTerminio'] : '';
    $horaInicio = isset($_POST['horaInicio']) ? $_POST['horaInicio'] : '';
    $horaTermino = isset($_POST['horaTermino']) ? $_POST['horaTermino'] : '';
    $grupo = isset($_POST['grupo']) ? $_POST['grupo'] : '';
    $local = isset($_POST['local']) ? $_POST['local'] : '';
    $descricao = isset($_POST['descricao']) ? $_POST['descricao'] : '';
    
    include './conexao.php';
    
    $query = "INSERT INTO evento(nome, dataInicio, dataTerminio, horaInicio, horaTermino, grupo, local, descricao) VALUES ('$nome', '$dataInicio', '$dataTerminio', '$horaInicio', '$horaTermino', '$grupo', '$local', '$descricao')";
    
    mysqli_query($conn, $query);

?>