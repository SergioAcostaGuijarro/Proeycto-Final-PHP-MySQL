<?php
session_start();
echo '<link href="../karen.css" type="text/css" rel="stylesheet">';
    $nombre = $_REQUEST["nombre"];

    $conexion = mysqli_connect ("localhost", "root", "rootroot") or die ("No se puede conectar con la base de datos");
    mysqli_select_db ($conexion, "inmobiliaria") or die ("No se puede seleccionar la base de datos");

    $query="delete from usuario where nombres='$nombre'";

    if(mysqli_query ($conexion, $query))
    {
        echo "<script language='javascript'>
            alert('Usuario eliminado');
            window.location.replace('./listaru.php')
            </script>";
    }
    else
    {
        echo "<script language='javascript'>
            alert('Usuario NO eliminado');
            window.location.replace('./eliminaru.php')
            </script>";
    }
    mysqli_close($conexion);
?>