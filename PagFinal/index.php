<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="./CSS/CSSFINAL.css">   
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>
            Menú
        </title>
    </head>
    <body>
        <header>
                <div class="nombre">
                    <h1>INMOBILIARIAS ACIVA</h1>
                </div>
                <div class="inicio">
                    <a href="./inicio_sesión.php"><img src="./img/perfil.png" width="45px"></a>
                </div>
        </header><br><br><br><br>
    <article>
    <?PHP
    $conexion = mysqli_connect ("localhost", "root", "rootroot")
        or die ("No se puede conectar con el servidor");
    mysqli_select_db ($conexion,"inmobiliaria")
        or die ("No se puede seleccionar la base de datos");

    $instruccion = "select * from pisos";
    $consulta = mysqli_query ($conexion, $instruccion)
        or die ("Fallo en la consulta");
   
    $nfilas = mysqli_num_rows ($consulta);
    if ($nfilas > 0)
    {
        print ("<TABLE>\n");
        print ("<TR>\n");
        print ("<TH>COD PISO</TH>\n");
        print ("<TH>CALLE</TH>\n");
        print ("<TH>NUMERO</TH>\n");
        print ("<TH>PISO</TH>\n");
        print ("<TH>PUERTA</TH>\n");
        print ("<TH>CP</TH>\n");
        print ("<TH>METROS</TH>\n");
        print ("<TH>ZONA</TH>\n");
        print ("<TH>PRECIO</TH>\n");
        print ("<TH>IMAGEN</TH>\n");
        print ("<TH>USUARIO</TH>\n");
        print ("</TR>\n");

        for ($i=0; $i<$nfilas; $i++)
        {
            $resultado = mysqli_fetch_array ($consulta);
            print ("<TR>\n");
            print ("<TD>" . $resultado['Codigo_piso'] . "</TD>\n");
            print ("<TD>" . $resultado['calle'] . "</TD>\n");
            print ("<TD>" . $resultado['numero'] . "</TD>\n");
            print ("<TD>" . $resultado['piso'] . "</TD>\n");
            print ("<TD>" . $resultado['puerta'] . "</TD>\n");
            print ("<TD>" . $resultado['cp'] . "</TD>\n");
            print ("<TD>" . $resultado['metros'] . "</TD>\n");
            print ("<TD>" . $resultado['zona'] . "</TD>\n");
            print ("<TD>" . $resultado['precio'] . "</TD>\n");
            print ("<TD><img src=' ./img/pisos/" . $resultado['imagen'] . " ' width=100px></TD>\n");            
            print ("<TD>" . $resultado['usuario_id'] . "</TD>\n");
            print ("</TR>\n");
        }
        print ("</TABLE>\n");
    }
    else
        print ("No hay pisos disponibles para mostrar");

 
mysqli_close ($conexion);

?>
    </article>
    </body>
</html>