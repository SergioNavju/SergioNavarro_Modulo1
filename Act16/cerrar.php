<?php
    //Se verifica que se cierre la sesion con el boton de cerrar
    if ((isset ($_POST["Cerrar"])))
    {
        session_start();
        session_unset();
        session_destroy();
        header("location:./form.php");
    }
    //Se manda al usuario al formulario para poder iniciar sesión
    else
        header("location:./form.php");

?>