<?php
echo '<link href="../../karen.css" type="text/css" rel="stylesheet">';
    $nombre = $_REQUEST["nombre"];
    $correo = $_REQUEST["correo"];
    $contraseña = $_REQUEST["clave"];        
    $contraseña2= $_REQUEST["clave2"];
    $tipo_usuario = $_REQUEST["opcion"];

    $conexion = mysqli_connect ("localhost", "root", "rootroot") or die ("No se puede conecatr con la base de datos");
    mysqli_select_db ($conexion, "inmobiliaria") or die ("No se puede seleccionar la base de datos");

    $query="insert into usuario(nombres, correo, clave, tipo_usuario) values ('$nombre','$correo',MD5('$contraseña'),'$tipo_usuario')";
    
    if(($correo=='') || ($contraseña=='') || ($nombre=='') || ($tipo_usuario==''))
    {
        echo "Falta rellenar algún parámetro";
    }
    else if ($contraseña != $contraseña2)
    {
        echo "Las contraseñas no coinciden";
    }
    else
    {
        if(mysqli_query ($conexion, $query))
        {
            echo "<script language='javascript'>
            alert('Usuario dado de alta');
            window.location.replace('./usuarios.php')
            </script>";
        }
        else
        {
            echo "<script language='javascript'>
            alert('Usuario NO dado de alta');
            window.location.replace('./añadiru.php')
            </script>";
        }
    }

    mysqli_close($conexion);
?>