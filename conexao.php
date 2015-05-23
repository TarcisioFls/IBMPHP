<?php
    ini_set( 'display_errors', true );
    error_reporting( E_ALL );
    
    ini_set('default_charset','UTF-8');
    
    $conn = mysqli_connect('localhost', 'root', '', 'ibm2', 3306);
    if (!$conn) {
        die('Não foi possivel Conectar: ' .mysqli_error());
    }
?>