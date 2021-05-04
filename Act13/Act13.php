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
            <?php
                //Inicializamos variables
                $x=0;
                $y=0;
                    //ARREGLOS PARA PODER CONCOER LA POSICION
                    $letras = ["@","A","B","C","D","E","F","G","H","I","J"];

                    $EJEY = [0,1,2,3,4,5,6,7,8,9,10];
                    $EJEX = [
                        "@" => "0",
                        "A" => "1",
                        "B" => "2",
                        "C" => "3",
                        "D" => "4",
                        "E" => "5",
                        "F" => "6",
                        "G" => "7",
                        "H" => "8",
                        "I" => "9",
                        "J" => "10",
                                    ];

                //Contador de vidas x8
                //Hace falta logica
                for ($i=1; $i <=8; $i++)
                { 
                    echo"<img src=\"./Cora.png\" alt=corazon height=40 widgth=40>";
                }
                // Historial 
                echo"<p>Historial de Disparos:</p>";
                if(isset($_POST["Disparar"]))
                {
                    
                    //Verificar si sucede un choque
                    $barcos = $_POST["barcos"];
                    $choque=0;
                    $x= $_POST["X"];
                    $y= $_POST["Y"];
                    $x=$EJEX[$x];
                    $Disparo = $x.$y;
                    foreach($barcos as $coord)
                    {
                        var_dump ($coord);
                        echo "<br>";
                        echo "disparo:";
                        var_dump ($Disparo);
                        if ($coord == $Disparo) 
                        {
                            
                            $choque=1;
                        }
                    }
                    //array_push( $histdisp, ($Disparo) );
                }
                // Condicion para genarar barcos
                else
                {
                    do {
                            $i=rand(1,10);
                            $j=rand(1,10);
                            if ($i<8) 
                            {
                                //El barco se hace vertical
                                $barco4h =[$i,$i+1,$i+2,$i+3];
                                $barco4v = [$j];
                                $barco4 =[];
                                for ($u=0; $u<count($barco4h); $u++)
                                {
                                    array_push($barco4,strval($j) .strval($barco4h[$u]));
                                }
                                echo "BARCO 4 VERTICAL";
                                print_r($barco4);
                            } 
                            //El barco se hace horizontal
                            elseif ($j<8)
                            {
                                $barco4v =[$j,$j+1,$j+2,$j+3];
                                $barco4h = [$i];
                                $barco4 =[];
                                for ($u=0; $u<count($barco4v); $u++)
                                {
                                    array_push($barco4, strval($barco4v[$u]). strval($i) );
                                }
                                echo "BARCO 4 HORIZONTAL";
                                print_r($barco4);
                            } 
                        } while ($i>=8 && $j>=8 && $Disparar == NULL);
                        //barco de 3
                    do {
                            $i=rand(1,10);
                            $j=rand(1,10);
                            //El barco se hace vertical
                            if ($i<9) 
                            {
                                $barco3h =[ $i,$i+1,$i+2];
                                $barco3v = [$j];
                                $barco3 =[];
                                for ($u=0; $u<count($barco3h); $u++)
                                {
                                    array_push($barco3,strval($j) .strval($barco3h[$u]));
                                }
                                echo "BARCO 3 VERTICAL";
                                print_r($barco3);
                            }
                            //El barco se hace horizontal
                            elseif ($j<9) 
                            {
                                $barco3v =[ $j,$j+1,$j+2];
                                $barco3h =[$i];
                                $barco3 =[];
                                for ($u=0; $u<count($barco3v); $u++)
                                {
                                    array_push($barco3,strval($barco3v[$u]). strval($i));

                                }
                                echo "BARCO 3 Horizontal";
                                //var_dump ($barco3);
                                print_r($barco3);
                            }
                            else
                                $barco3=$barco4;
                            
                            $subchoque = array_intersect ($barco4, $barco3);
                            var_dump($subchoque);
                            
                        } while ($i>=9 && $j>=9 && empty ($subchoque) == false && $Disparar == NULL);
                        $barcos=array_merge($barco3,$barco4);
                }
                //TABLA
            echo "<table border=\"1\" style=\"text-align: center\">";
            echo "<tbody>";
                            $tamtablero = 11;
                            $mar = "<img src=\"./Mar.png\" width=\"40\" height=\"40\">";
                            $acierto = "<img src=\"./Acierto.jpeg\" width=\"40\" height=\"40\">";
                            $fallo = "<img src=\"./Fallo.jpeg\" width=\"40\" height=\"40\">";
                            
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
                                        //Logica de Acertar un disparo
                                        if($j == $x && $i == $y)
                                        {
                                            if ($choque == 1)
                                            {
                                                echo $acierto;
                                            }
                                            elseif ($choque==0)
                                            {
                                                echo "LLEGO";
                                                echo $fallo;
                                            }
                                        }
                                        else
                                            echo $mar;
                                    }
                                    echo "</td>";   
                                }
                                echo "</tr>";
                            }
                        echo "</tbody>";
                    echo "</table>";

                    //Guardar el valor de los arreglos que guardan las posiciones de los barcos
                    echo "<br>
                        <form action =\"./Act13.php\" method=\"post\">
                            Posición X(Letra): <input type=\"text\" name=\"X\" required>
                            Posición Y(Número): <input type=\"number\" name=\"Y\" min = \"1\" max =\"10\" required>
                            <input type =\"submit\" name =\"Disparar\" value=\"Disparar!!\">";
                            foreach ($barcos as $coordenada)
                            {
                                echo "<input type=\"hidden\" name=\"barcos[]\" value=\"$coordenada\">";
                            }
                            //Para poder hacer el registros de los disparos
                            /*
                            foreach ($Disparo as $coordenada) {
                                echo"<input type=\"hidden\"name=\"Disparos[]\" value=\"$coordenada\">";
                            }*/
                    echo "</form>";
            ?>
    </body>
</html>



