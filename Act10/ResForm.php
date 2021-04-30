<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitud de ingreso a la Universidad</title>
</head>
    <body>
        <table border="1" style="text-align:center;">
            <tbody>
            <?php
                $nom = (isset($_POST["Nombre"]) && $_POST["Nombre"] != " " ) ?$_POST["Nombre"] : "No especifico";
                $apa = (isset($_POST["Apaterno"]) && $_POST["Apaterno"] != " " ) ?$_POST["Apaterno"] : "No especifico";
                $ama = (isset($_POST["Amaterno"]) && $_POST["Amaterno"] != " "  ) ?$_POST["Amaterno"] : "No especifico";
                $sx = (isset($_POST["Sexo"]) && $_POST["Sexo"] != " " ) ?$_POST["Sexo"] : "No especifico";
                $ed = (isset($_POST["Edad"]) && $_POST["Edad"] != " " ) ?$_POST["Edad"] : "No especifico";
                $mail = (isset($_POST["Correo"]) && $_POST["Correo"] != " "  ) ?$_POST["Correo"] : "No especifico";
                $tel = (isset($_POST["Telefono"]) && $_POST["Telefono"] != " " ) ?$_POST["Telefono"] : "No especifico";
                $cel = (isset($_POST["Celular"]) && $_POST["Celular"] != " " ) ?$_POST["Celular"] : "No especifico";
                $esc = (isset($_POST["Escuela"]) && $_POST["Escuela"] != " " ) ?$_POST["Escuela"] : "No especifico";
                $prom = (isset($_POST["Promedio"]) && $_POST["Promedio"] != " " ) ?$_POST["Promedio"] : "No especifico";
                $op1 = (isset($_POST["Op1"]) && $_POST["Op1"] != " " ) ?$_POST["Op1"] : "No especifico";
                $op2 = (isset($_POST["Op2"]) && $_POST["Op2"] != " " ) ?$_POST["Op2"] : "No especifico";

                echo "<thead>";
                    echo "<tr>";
                        echo "<th colspan=  \"4\">";
                            echo "<h2>Solicitud de ingreso a la Universidad </h2>";
                        echo "</th>";
                    echo "</tr>";
                echo "</thead>";

                echo "<tbody>";
                    echo "<tr>";
                        echo "<td>". $apa. "</td>";
                        echo "<td>". $ama. "</td>";
                        echo "<td colspan=  \"4\">". $nom. "</td>";
                    echo "</tr>";

                    echo "<tr>";
                        echo "<td>". "<u><b>Apellido Paterno<b><u>". "</td>";
                        echo "<td>". "<u><b>Apellido Materno<b><u>". "</td>";
                        echo "<td colspan=  \"4\">". "<u><b>Nombre(s)<b><u>" ."</td>";
                    echo "</tr>";

                    echo "<tr>";
                        echo "<td>". "<u><b>Sexo:<b><u>". "</td>";
                        echo "<td>". $sx. "</td>";
                        echo "<td>". "<u><b>Edad:<b><u>". "</td>";
                        echo "<td>". "$ed". "</td>";
                    echo "</tr>";

                    echo "<tr>";
                        echo "<td colspan=  \"2\">". $mail. "</td>";
                        echo "<td>". $tel. "</td>";
                        echo "<td>". $cel. "</td>";
                    echo "</tr>";

                    echo "<tr>";
                        echo "<td colspan=  \"2\">". "<u><b>Correo electrónico<b><u>". "</td>";
                        echo "<td>". "<u><b>Teléfono<b><u>". "</td>";
                        echo "<td>". "<u><b>Celular<b><u>". "</td>";
                    echo "</tr>";

                    echo "<tr>";
                        echo "<td>". "<u><b>Escuela de procedencia:<b><u>". "</td>";
                        echo "<td>". $esc. "</td>";
                        echo "<td>". "<u><b>Promedio:<b><u>". "</td>";
                        echo "<td>". "$prom". "</td>";
                    echo "</tr>";

                    echo "<tr>";
                        echo "<td colspan=  \"2\">". "<u><b>Primera Opción:<b><u>". "</td>";
                        echo "<td colspan=  \"2\">". $op1. "</td>";
                    echo "</tr>";

                    echo "<tr>";
                        echo "<td colspan=  \"2\">". "<u><b>Segunda Opción:<b><u>". "</td>";
                        echo "<td colspan=  \"2\">". "$op2". "</td>";
                    echo "</tr>";

                echo "</tbody>";


            ?>
            </tbody>
        </table>
    </body>
</html>
