<?php
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
            echo "Usuario dado de alta<br><br>";
            print"<a href='./inicio_sesión.php'>Inicio sesión</a>";
        }
        else
        {
            echo "Usuario no dado de alta<br><br>";
            print"<a href='./registro.php'>Registrarse</a>";
        }
    }

    mysqli_close($conexion);
?>