<?php
    
    $servidor = 'localhost';
    $banco = 'imb';
    $usuario = 'root';
    $senha = '';
    $link = mysqli_connect($servidor, $usuario, $senha);
    $db = mysqli_select_db($banco, $link);
    
    
    $con = mysqli_connect($servidor, $usuario, $senha);
    if (!$con) {
        die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());
    }
    $banco = mysqli_select_db($banco);
    if (!$banco) {
        die("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysqli_error());
    }

?>
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

