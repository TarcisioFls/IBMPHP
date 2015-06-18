<?php
    $id = isset($_POST['id']) ? $_POST['id'] : '';

    include_once './conexao.php';

    $delete = "DELETE FROM usuario WHERE id = '$id'";

    $result = mysqli_query($conn, $delete) or die((mysqli_error()));

    if ($result){
        echo 'Sucesso';
    }
    else {
        echo 'Falha';
    }

?>
