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
                                                                                    <!--Impimir las Vidas-->
            <h2>Vidas:</h2>
                                                                                    <!--Historial de Disparos-->
            <p>Historial de Disparos:</p>
            <!--Aqui hay que poner el registro de los disparos-->
                                                                                    <!--TABLA-->
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
                echo "</tbody>";
            echo "</table>";
                                                                                    //Barcos
                    //Mientras sea mayor que 8
                    $EJEX = ["@","A","B","C","D","E","F","G","H","I","J"];
                    $EJEY = ["0","1","2","3","4","5","6","7","8","9","10"];

                    do{
                        //Para las filas
                        $i=rand(1,10);
                        //Para las columnas
                        $j=rand(1,10);
                        if ($i<8)
                            $barco4h =[ $i,$i+1,$i+2,$i+3];

                        elseif ($j<8)
                            $barco4v =[ $j,$j+1,$j+2,$j+3];
                        
                    } while ($i>8 && $j>8);

                    //barco de 3
                    do{
                        $i=rand(1,10);
                        $j=rand(1,10);
                        if ($i<9)
                            $barco3h =[ $i,$i+1,$i+2];

                        elseif ($j<9)
                            $barco3v =[ $j,$j+1,$j+2];

                        } while ($i>9 && $j>9);
                                                                    //Verificar Coliciones
                                //Usar array_intersect_assoc
            ?> 
            <br>
                Posición X(Letra): <input type="text" name="X" required>
                Posición Y(Número): <input type="text" name="Y" required>
                
                <input type ="submit" name ="Traducit" value="Disparar!!">
    </body>
</html>



