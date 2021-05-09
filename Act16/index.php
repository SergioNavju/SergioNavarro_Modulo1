<?php
    //Abrimos la sesion de la pagina anterior
    session_start();
    //Verificamos si ta habiamos inciado sesión 
    if((isset($_SESSION["nombre"])))
    {
        //Desplegamos la tabla con los datos
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
                    <table border="1" style="text-align: center">
                        <th colspan= "2">Información de Inicio de sesión</th> 
                        <tr>
                            <td>Nombre Completo:</td>
                            <td>';
                            echo $_SESSION ["nombre"] ." ". $_SESSION ["apellido"]. "</td></tr><tr>
                            <td>Grupo:</td>
                            <td>"; 
                            echo $_SESSION ["grupo"]. "</td>
                        </tr>
                        <tr>
                            <td>Fecha de nacimiento:</td>
                            <td>"; 
                            echo $_SESSION ["fecha"] . "</td>
                        </tr>
                        <tr>
                            <td>Correo electrónico:</td>
                            <td>"; 
                            echo $_SESSION ["correo"] . "</td>
                        </tr>
                    </table>
                </body>
                <form action= \"cerrar.php\" method=\"post\" enctype=\"multipart/form-data\">
                <input type =\"submit\" name =\"Cerrar\" value=\"Cerrar Sesión\"></fieldset>
                </form>
            </html>";
        
    }
    //Se inicializan las variables que nos llegan del formulario
    elseif ((isset ($_POST["Ingresar"]))) 
    {
        echo "<br>";

        $_SESSION ["nombre"] = ($_POST["nombre"]);
        $_SESSION ["apellido"] = ($_POST["apellido"]);
        $_SESSION ["grupo"] = ($_POST["grupo"]);
        $_SESSION ["fecha"] = ($_POST["fecha"]);
        $_SESSION ["correo"] = ($_POST["correo"]);
    }
    else
    {
        //Si nunca ha iniciado sesion se pide que lo haga rellenando el formulario
        header ("location: ./form.php");
    }
?>

