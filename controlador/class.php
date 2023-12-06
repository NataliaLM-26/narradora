<?php
    require("classConnectionMySQL.php");

    //nueva instancia 
    $NewConn = new ConnectionMySQL();

    //nueva conexion
    $NewConn->CreateConnection();

    // datos
    $email=$_POST['email'];
    $oracion=$_POST['oracion'];
    $categoria=$_POST['categoria'];
    $autornombre=$_POST['autornombre'];
    $autorfecha=$_POST['autorfecha'];
    $autorinfo=$_POST['autorinfo'];

    //consultas

    //cerrar conexion
    $NewConn->CloseConnection();
?>