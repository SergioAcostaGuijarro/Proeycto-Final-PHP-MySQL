<?php
session_start();
echo '<link href="../../karen.css" type="text/css" rel="stylesheet">';

    $codigo = $_REQUEST["codigo"];

    $conexion = mysqli_connect ("localhost", "root", "rootroot") or die ("No se puede conecatr con la base de datos");
    mysqli_select_db ($conexion, "inmobiliaria") or die ("No se puede seleccionar la base de datos");

    $query="delete from pisos where Codigo_piso='$codigo'";

    if(mysqli_query ($conexion, $query))
    {
        echo "<script language='javascript'>
            alert('Piso eliminado');
            window.location.replace('./listarp.php')
            </script>";
    }
    else
    {
        echo "<script language='javascript'>
            alert('Piso NO eliminado');
            window.location.replace('./eliminarp.php')
            </script>";
    }
    mysqli_close($conexion);
?>