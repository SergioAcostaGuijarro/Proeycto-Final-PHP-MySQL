<HTML LANG="es">
<HEAD>
</HEAD>
<BODY>
<H1>Listado de pisos por zona</H1>

<?PHP
session_start();
echo '<link href="../karen.css" type="text/css" rel="stylesheet">';

$zona = $_REQUEST['zona'];
    $conexion = mysqli_connect ("localhost", "root", "rootroot")
        or die ("No se puede conectar con el servidor");
    mysqli_select_db ($conexion,"inmobiliaria")
        or die ("No se puede seleccionar la base de datos");

    $instruccion = "select * from pisos where zona='$zona'";
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
            print ("<TD><img src=' ./pisos/" . $resultado['imagen'] . " ' width=100px></TD>\n");            
            print ("<TD>" . $resultado['usuario_id'] . "</TD>\n");
            print ("</TR>\n");
        }
        print ("</TABLE>\n");
    }
    else
        print ("No hay pisos disponibles para mostrar");

 
mysqli_close ($conexion);

?>
<br><a href="./compradorindex.php">Inicio</a>
</BODY>
</HTML>
