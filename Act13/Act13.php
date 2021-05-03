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

                    //TENEMOS QUE HACER ARREGLOS PARA PODER CONCOER LA POSICION DE LOS BARCOS
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
                                    //Crear variable X de los que ingrese el usuario
                    /*foreach ($EJEX as $key => $value) 
                    {
                        $x[$value];
                    }*/
                        //barco de 4

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
                                    echo "BARCO 4 VERTICAL ";
                                    print_r($barco4);
                                    //var_dump ($barco4);
                                    /*echo "Antes de la asignación de letra";
                                    var_dump($barco4v);
                                        $barco4v = $letras[$j];
                                    echo "Después de la asignación de letra";
                                    var_dump($barco4v);*/
                                    
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
                                    /*echo count($barco4h);
                                    echo "<br>";*/
                                    echo "BARCO 4 HORIZONTAL ";
                                    //var_dump ($barco4);
                                    print_r($barco4);
                                    //$barco4 = array_merge($barco4h, $barco4v);
                                } 
                            } while ($i>=8 && $j>=8);
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
                                    echo "BARCO 3 Vertical";
                                    //var_dump ($barco3);
                                    print_r($barco3);
                                    //$barco3 = array_merge($barco3h, $barco3v);
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

                                    //$barco3 = array_merge($barco3h, $barco3v);
                                }
                                else
                                    $barco3=$barco4;
                                //for($k=0; $k <count($barco4); )
                                
                                $subchoque = array_intersect ($barco4, $barco3);
                                var_dump($subchoque);
                                
                            } while ($i>=9 && $j>=9 && empty ($subchoque) == false);
                            
                            
                            //print_r($barco3); 
                            echo "<br>";
                            //print_r($barco4);
                                //Verificar Coliciones
                                //Usar array_intersect_assoc
            ?> 
            <br>
                Posición X(Letra): <input type="text" name="X" required>
                Posición Y(Número): <input type="text" name="Y" required>
                
                <input type ="submit" name ="Traducit" value="Disparar!!">
                <?php

                    $x= $_POST["X"];
                    $y= $_POST["Y"];
                ?>
    </body>
</html>



