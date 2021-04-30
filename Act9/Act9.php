<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablero</title>
</head>
<body>
        <h1>Tablero Ajedrez<h1>
        <table border="1" >
            <tbody>
            <?php
                /*Definimos variables que facilitan el poner las imagenes y 
                aquella que controla el tamaño del tablero*/
                $tamtablero = 8;
                $cNegro = "<img src=\"./negro.jpg\" width=\"50\" height=\"50\">";
                $cBlanco = "<img src=\"./blanco.jpg\" width=\"50\" height=\"50\">";

                //Se lleva un control de filas totales
                //Estructura que itera segun el valor de tamtablero
                for ($n=1; $n<=$tamtablero; $n++)
                {
                    echo "<tr>";
                        //Se lleva un control sobre pares y nones para poder alternar el color de las casillas
                        //Se imprimen las filas que empiezan con negro
                        if ($n%2 != 0)
                        {   //Se lleva un control de columnas
                            for ($i=1; $i<=$tamtablero; $i++)
                            {
                                //Se buscan los nones para poder alternar el color de las casillas
                                if($i%2 != 0)
                                {
                                    echo "<td>";
                                    echo $cNegro;
                                    echo "</td>";   
                                }
                                else
                                {
                                    echo "<td>";
                                    echo $cBlanco;
                                    echo "</td>";
                                }
                            }
                        }
                        //Se imprimen las filas que empiezan con blanco
                        else if ($n%2 == 0)
                        {
                            //Se lleva un control de columnas
                            for ($i=1; $i<=$tamtablero; $i++)
                            {
                                
                                if($i % 2 != 0)
                                {
                                    echo "<td>";
                                    echo $cBlanco;
                                    echo "</td >";
                                }
                                //Se buscan los pares para poder alternar el color de las casillas
                                else
                                {
                                    echo "<td>";
                                    echo $cNegro;
                                    echo "</td>";
                                }
                            }  
                        }
                    echo "</tr>";
                }
            ?>
            </tbody>
        </table>
</body>
</html>
