    <!DOCTYPE html>
    <head>
    <link rel="stylesheet" href="./formstyle.css">
    <link rel="stylesheet" href="./karen.css">
    </head>
    <body>
    <header>
        <h2>REGISTRARSE </h2>
    </header><br><br><br>
        <div id="form" id="form">
        <br><a href="./index.php"><img src="./img/logo.png" width="100px" class="img"></a><br>
        <hr><br><form action="añadirusuario.php" method="POST"><a>
            <input type="text" placeholder="Nombre..." name="nombre"><br>
            <input type="email" placeholder="Correo..." name="correo"><br>
            <input type="password" placeholder="Contraseña..." name="clave" id="contr1"><br>
            <input type="password" placeholder="Repita la contraseña..." name="clave2" id="contr2"><br>
            <br><a><input type="radio" value="comprador" name="opcion"> Soy comprador  <input type="radio" value="vendedor" name="opcion"> Soy vendedor</a>
            <br><br><input type="submit" value="REGISTRARSE" name="añadir" onclick="f_validar()">
        </form>
        <br><a href="./inicio_sesión.php">¿Ya tienes cuenta? Inicie sesión</a>
        <div>
    </body>
<html>