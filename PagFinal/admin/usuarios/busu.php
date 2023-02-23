<HTML LANG="es">
<HEAD>
    <link rel="stylesheet" href="../../karen.css">
</HEAD>
<BODY>
<H1>Listado de usuarios</H1>

<?PHP
session_start();

$nombre = $_REQUEST['nombre'];
    $conexion = mysqli_connect ("localhost", "root", "rootroot")
        or die ("No se puede conectar con el servidor");
    mysqli_select_db ($conexion,"inmobiliaria")
        or die ("No se puede seleccionar la base de datos");

    $instruccion = "select * from usuario where nombres='$nombre'";
    $consulta = mysqli_query ($conexion,$instruccion)
        or die ("Fallo en la consulta");

    $nfilas = mysqli_num_rows ($consulta);
    if ($nfilas > 0)
    {
        print ("<TABLE>\n");
        print ("<TR>\n");
        print ("<TH>ID</TH>\n");
        print ("<TH>NOMBRE</TH>\n");
        print ("<TH>CORREO</TH>\n");
        print ("<TH>PASSWD</TH>\n");
        print ("</TR>\n");

    for ($i=0; $i<$nfilas; $i++)
    {
        $resultado = mysqli_fetch_array ($consulta);
        print ("<TR>\n");
        print ("<TD>" . $resultado['usuario_id'] . "</TD>\n");
        print ("<TD>" . $resultado['nombres'] . "</TD>\n");
        print ("<TD>" . $resultado['correo'] . "</TD>\n");
        print ("<TD>" . $resultado['clave'] . "</TD>\n");            
        print ("</TR>\n");
    }
        print ("</TABLE>\n");
    }
    else
        print ("No hay usuarios disponibles para mostrar");

 
mysqli_close ($conexion);

?>
</BODY>
</HTML>