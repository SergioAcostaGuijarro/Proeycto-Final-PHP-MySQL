<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
        <?php
        session_start();

            $conexion = mysqli_connect ("localhost", "root", "rootroot") or die ("No se puede conectar con el servidor");
            mysqli_select_db ($conexion,"inmobiliaria") or die ("No se puede conectar con la base de datos");
            
            $correo= $_POST["correo"];
            $pass = $_POST["password"];
            $query="select * from usuario where correo='$correo' and clave=MD5('$pass')";

            $consulta = mysqli_query ($conexion,$query) or die ("Fallo en la consulta");
            $nfilas = mysqli_num_rows ($consulta);
            $resultado = mysqli_fetch_array($consulta);

            if ($nfilas == 1) 
            {
                $_SESSION['name'] = $resultado['nombres'];
                $_SESSION['email'] = $resultado['correo'];
                $_SESSION['tipo'] = $resultado['tipo_usuario'];


                if ($consulta == true) 
                {
                    if ($_SESSION['tipo'] == "admin")
                    {
                        echo "<script>window.location.replace('./admin/adminindex.php')</script>";
                    }
                    else if ($_SESSION['tipo'] == "comprador")
                    {
                        echo "<script>window.location.replace('./comprador/compradorindex.php')</script>";
                    }
                    else if ($_SESSION['tipo'] == "vendedor")
                    {
                        echo "<script>window.location.replace('./vendedor/vendedorindex.php')</script>";
                    }
                } 
                else 
                {
                    echo "Compruebe los parámetros";
                }
            }
            else
            {
                echo "Compruebe los parametros";
            }

            mysqli_close ($conexion);
        ?>
	</body>
</html>