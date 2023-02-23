<?php
session_start();
echo '<link href="../../karen.css" type="text/css" rel="stylesheet">';

    $nombre = $_REQUEST["nombre"];
    $correo = $_REQUEST["correo"];
    $pass = $_REQUEST["contraseña"];

    $conexion = mysqli_connect ("localhost", "root", "rootroot") or die ("No se puede conectar con la base de datos");
    mysqli_select_db ($conexion, "inmobiliaria") or die ("No se puede seleccionar la base de datos");

    $query="update usuario set nombres='$nombre', clave=MD5('$pass') where correo='$correo'";

    if(mysqli_query ($conexion,$query))
    {
        echo "<script language='javascript'>
            alert('Usuario actualizado');
            window.location.replace('./usuarios.php')
            </script>";
    }
    else
    {
        echo "<script language='javascript'>
            alert('Usuario NO actualizado');
            window.location.replace('./actualizaru.php')
            </script>";
    }
    mysqli_close($conexion);
?>