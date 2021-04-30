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
                $tamablero = 8;
                $cNegro = "<img src=\"./negro.jpg\" width=\"50\" height=\"50\">";
                $cBlanco = "<img src=\"./blanco.jpg\" width=\"50\" height=\"50\">";
                for ($n=1; $n<=$tamablero; $n++)
                {
                    echo "<tr>";
                        if ($n%2 != 0)
                        {
                            for ($i=1; $i<=$tamablero; $i++)
                            {
                                
                                if($i%2 != 0)
                                {
                                    echo "<td width=\"50\" height=\"50\">";
                                    echo $cNegro;
                                    echo "</td>";   
                                }
                                else
                                {
                                    echo "<td width=\"50\" height=\"50\">";
                                    echo $cBlanco;
                                    echo "</td>";
                                }
                            }
                        }  
                        if ($n%2 == 0)
                        {
                            for ($i=1; $i<=$tamablero; $i++)
                            {
                            
                                if($i % 2 != 0)
                                {
                                    echo "<td width=\"50\" height=\"50\">";
                                    echo $cBlanco;
                                    echo "</td >";
                                }
                                else
                                {
                                    echo "<td width=\"50\" height=\"50\">";
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
