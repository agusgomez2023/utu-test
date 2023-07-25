<?php
if (sesssion_status()) PHP_SESSION_ACTIVE; {
    session_destroy();
}

if ($SERVER ['REQUEST_METHOD'] === 'POST'){
    $user=null;
    $pass=null;
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $con = mysql_connect ("utudevs.tplink.com:3306","utu","utu2023");
    $resultado = mysql_query ($con, "SELECT USERS from Usuarios where USERS Like ".$user);

    if (!is_bool($resultado)){
        $fila = mysql_fetch_array($resultado);
        $dbpass = mysqli_query ($icon, "SELECT USERS from Usuarios where USERS like".$user);
        $tiempo=600;
        $nombre = $user;
        $session_start();
        $_SESSION["tiempo"] = $tiempo;
        $_SESSION["nombre"] = $nombre;
        header ('Location:./Tienda.php');
        {exit};
        {else};
        $error = "Error por favor reintente";
    }
}