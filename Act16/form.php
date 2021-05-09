<?php
    session_start();
    //Si la sesión ya esta iniciada no hay necesidad de desplegar el formulario, por lo que se envia al usuario a index.php
    if ((isset($_SESSION["nombre"])))
    {
        header("location: ./index.php");
    }
    else
    {
        //Fomulario de inicio de sesion
        echo '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Inicio de Sesión</title>
        </head>
            <body>
                <fieldset>
                        <legend>Inicio de Sesión</legend>
                        <form action="index.php" method="post">
                            Nombre: <input type="text" name="nombre" required><br><br>
                            Apellidos: <input type="text" name="apellido" required><br><br>
                            Grupo: <input type="number" name="grupo" required><br><br>
                            Fecha de nacimiento: <input type="date" name="fecha" required><br><br>
                            Correo Electronico: <input type="email" name="correo" required><br><br>
                            Contraseña: <input type="password" name="contra" required><br><br>
                            <input type="submit" value="Ingresar" name ="Ingresar">
                        </form>
                </fieldset>
            </body>
        </html>';
    }
?>
