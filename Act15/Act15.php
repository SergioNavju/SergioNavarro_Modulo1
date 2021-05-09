<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria de Arte</title>
</head>
    <body>
        <?php
        //Validación general para saber si ya existio una peticion para los archivos
        if(isset ($_FILES["ArchObra"]))
        {
            //Recibimos los valores del cuestinario
            $nobra = $_POST["NomO"];
            $nautor = (isset($_POST["NomA"]) && $_POST["NomA"]!= "") ?$_POST["NomA"] : "Sin Autor";
            $naño = (isset($_POST["Año"]) && $_POST["Año"]!= "") ?$_POST["Año"] : "Sin Año";
            //recibimos los archivos
            $archobra = $_FILES["ArchObra"];
            $arch= $_FILES["ArchObra"]["tmp_name"];
            $name= $_FILES["ArchObra"]["name"];
            //Validamos la extension que recbimos 
            $ext = pathinfo ($name, PATHINFO_EXTENSION);
            if($ext == "jpg" || $ext == "png" || $ext == "jpeg")
            {
                //Modificamos el nombre 
                rename($arch,"./statics/".$nobra."$".$nautor."$"."&".$naño."&". "." . pathinfo ($name, PATHINFO_EXTENSION));
                echo "Se subio correctamente tu imagen";  
            }
            else
            {
                echo "Necesitas darme una foto";   
            }
        }

        echo "<form action= \"Act15.php\" method=\"post\" enctype=\"multipart/form-data\">";
        echo "<br><input type =\"submit\" name =\"GALERIA\" value=\"Ver Galeria\"></fieldset>";
        echo "</form>";

        //Abrimos la ruta donde buscaremos los archivos
        $ruta_carpeta = "./statics";
        $carpeta= opendir($ruta_carpeta);
        $archivos = array();
        $hayArchivos =true;
        //Hacemos una segunda validación para evitar que los archivos se vayan a desplegar o unirse al arreglo de archivos
        while($hayArchivos)
        {
            $archivo = readdir ($carpeta);
            if ($archivo !== false)
            {
                if ($archivo != "." && $archivo != "..")
                {
                    $ext = pathinfo ($archivo, PATHINFO_EXTENSION);
                    if($ext == "jpg" || $ext == "png" || $ext == "jpeg")
                    {
                        array_push($archivos, $archivo);
                    }
                }
            }
            else 
                $hayArchivos = false;
        }
        if (isset ($_POST["GALERIA"]))
        {
            //Desplegamos la Galeria 
            echo "<fieldset>
            <legend><h1>IMAGENES DE LA GALERIA DE ARTE</h1></legend>";
            echo "<table border=\"1\" style=\"text-align: left\"> <tr>";
            if(empty($archivos))
            {
                echo "TU GALERIA DE ARTE NO TIENE NIGUNA IMAGEN";
            }
            //Recorremos el arreglo archivos donde tenemos los archivos recibidos
            foreach ($archivos as $key => $value)
            {
                if($key % 2 == 0)
                {
                    echo "<tr>";
                }
                echo "<td><img src='./statics/$value' width ='400' height= '470'>";
                //Manipulamos la cadena para poder reconocer cada parte del nombre completo de la obra
                $nombreCompleto=explode("$",$value);
                $nombreObra=$nombreCompleto[0];
                $autorObra=$nombreCompleto[1];
                $añoCompleto=explode ("&", $value);
                $añoObra = $añoCompleto[1];
                echo "<ul>
                        <li><strong>Nombre de la obra: </strong> $nombreObra </li>
                        <li><strong>Nombre del artista: </strong> $autorObra </li>
                        <li><strong>Año: </strong> $añoObra </li>
                    </ul>";
                if($key % 2 != 0)
                {
                    echo "</tr>";
                }
            }
            //Podemos recibir mas obras 
            echo "</table>";
            echo "<form action= \"Act15.html\" method=\"post\" enctype=\"multipart/form-data\">";
            echo "<br><input type =\"submit\" name =\"REGISTRO\" value=\"Agregar obra a la galeria\"></fieldset>";
            echo "</form>";
            closedir($carpeta);
        }

        ?>
    </body>
</html>