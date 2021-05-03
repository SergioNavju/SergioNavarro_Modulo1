<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Batalla Naval</title>
</head>
    <body>
        <h1>Batalla Naval<h1>
            <h2>Vidas:</h2>
            <p>Historial de Disparos:</p>
            <!--Aqui hay que poner el registro de los disparos-->
            <table border="1" style="text-align: center">
                <tbody>
                <?php
                    $tamtablero = 11;
                    $mar = "<img src=\"./Mar.png\" width=\"40\" height=\"40\">";;
                    
                    for ($i=0; $i<$tamtablero; $i++)
                    {
                        echo "<tr>";
                        for ($j=0; $j<$tamtablero; $j++)
                        {
                            echo "<td>";
                            if($i == 0)
                            {
                                if ($j>0)
                                    echo "<b>". chr(64+$j). "</b>";
                            }
                            if($j == 0)
                            {
                                if($i>0)
                                    echo "<b>" . $i . "</b>";
                            }
                            if ($j !=0 && $i!=0)
                            {
                                echo $mar;
                            }
                            echo "</td>";   
                        }
                        echo "</tr>";
                    }
            ?>
                </tbody>
            </table>
            <br>
                Posición X(Letra): <input type="text" name="X" required>
                Posición Y(Número): <input type="text" name="Y" required>
                
                <input type ="submit" name ="Traducit" value="Disparar!!">
    </body>
</html>



