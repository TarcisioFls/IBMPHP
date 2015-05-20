<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
<?php
    ini_set( 'display_errors', true );
    error_reporting( E_ALL );
    
    header( "Content-Type: text/html; charset = 'UTF-8'" );

    $servidor = 'localhost';
    $banco = 'ibm';
    $usuario = 'root';
    $senha = '';
    $link = mysqli_connect($servidor, $usuario, $senha, $banco);
    
    
    
    $con = mysqli_connect($servidor, $usuario, $senha);
    if (!$con) {
        die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysqli_error());
    }
    

?>
    </body>
</html>