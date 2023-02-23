<?php
session_start();
echo '<link href="../karen.css" type="text/css" rel="stylesheet">';

    $codigo = $_REQUEST['codigo'];
    $confirmo = $_REQUEST["confirmo"];

    $conexion = mysqli_connect ("localhost", "root", "rootroot") or die ("No se puede conecatr con la base de datos");
    mysqli_select_db ($conexion, "inmobiliaria") or die ("No se puede seleccionar la base de datos");

    $query="delete from pisos where Codigo_piso='$codigo'";
    
    if(($codigo=='') || ($confirmo==''))
    {
        echo "Falta rellenar algún parámetro";
    } 
    else
    {
        if($confirmo=='si')
        {
            if(mysqli_query ($conexion, $query))
            {
                echo "<script language='javascript'>
                alert('Compra efectuada');
                window.location.replace('./compradorindex.php')
                </script>";            }
            else
            {
                echo "<script language='javascript'>
                alert('Piso NO comprado');
                window.location.replace('./comprarp.php')
                </script>";
            }
        }
        else if($confirmo=='no')
        {
            echo "<script language='javascript'>
                alert('Gracias por su visita');
                window.location.replace('./compradorindex.php')
            </script>";
        }
    }
    mysqli_close($conexion);
?>