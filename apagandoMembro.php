<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt-br">
    <head>
        <title>1º Igreja Batista em Muribeca</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery-2.1.3.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
            $id = isset($_POST['id']) ? $_POST['id'] : '';
            
            include_once './conexao.php';
            
            $delete = "DELETE FROM usuario WHERE id = '$id'";
            
            $result = mysqli_query($conn, $delete);
            
            
            
        ?>
    </body>
</html>
