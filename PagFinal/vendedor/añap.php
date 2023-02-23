<?php
echo '<link href="../karen.css" type="text/css" rel="stylesheet">';

    $codigo = $_REQUEST["codigo"];
    $calle = $_REQUEST["calle"];    
    $numero = $_REQUEST["numero"];  
    $piso = $_REQUEST["piso"];      
    $puerta = $_REQUEST["puerta"];  
    $cp = $_REQUEST["cp"];          
    $metros = $_REQUEST["metros"]; 
    $zona = $_REQUEST["zona"];   
    $precio = $_REQUEST["precio"];  
    $imagen = $_REQUEST["imagen"];
    $usuario = $_REQUEST["usuario"];


    $conexion = mysqli_connect ("localhost", "root", "rootroot") or die ("No se puede conecatr con la base de datos");
    mysqli_select_db ($conexion, "inmobiliaria") or die ("No se puede seleccionar la base de datos");

    $query="insert into pisos(Codigo_piso, calle, numero, piso, puerta, cp, metros, zona, precio, imagen, usuario_id) values ('$codigo','$calle','$numero','$piso','$puerta','$cp','$metros','$zona','$precio','$imagen','$usuario')";
    
    if(($codigo=='') || ($calle=='') || ($numero=='') || ($piso=='') || ($puerta=='') || ($cp=='') || ($metros=='') || ($zona=='') || ($precio=='') || ($imagen=='') || ($usuario==''))
    {
        echo "Falta rellenar algún parámetro";
    } 
    else
    {
        if(mysqli_query ($conexion, $query))
        {
            echo "<script language='javascript'>
            alert('Piso añadido');
            window.location.replace('./listarp.php')
            </script>";
        }
        else
        {
            echo "<script language='javascript'>
            alert('Piso NO añadido');
            window.location.replace('./añadirp.php')
            </script>";
        }
    }
    mysqli_close($conexion);
?>