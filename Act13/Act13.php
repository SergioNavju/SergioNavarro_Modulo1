<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Batalla Naval</title>
</head>
    <body>
      <?php
      if(!isset($_POST["Disparar"]))
      {
        $ganaste=0;
        $perdiste=0;
      }
      else{
        $ganaste = $_POST["Ganaste"];
        $perdiste = $_POST["Perdiste"];
      }
      if ($ganaste == 0 && $perdiste == 0)
      {
        echo "<h1>Batalla Naval</h1>                                                        
            <h3>Vidas:</h3>";
                //Inicializamos variables
                $x=[0,1,2,3,4,5,6,7,8,9,10];
                $y=0;
                $vidas= (isset($_POST["vidas"]))? $_POST["vidas"] : 8;
                $choques =[];
                if(!isset($_POST["Disparar"]))
                {
                  for ($i=1; $i<=$vidas; $i++)
                  { 
                    echo"<img src=\"./Cora.png\" alt=corazon height=25 widgth=25>";
                  }
                }
                $letras=[];
                $EJEX=[];
                $EJEY=[];
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
                            "J" => "10"
                                        ];
                    // Historial Y Contador de Vidas 
                  foreach ($EJEX as $key => $value) {
                    $x[$value];
                  }
                  $Historial ="";
                  if(isset($_POST["Disparar"]))
                  {
                    $choques = (isset($_POST["choques"]))? $_POST["choques"] : [];
                    //Verificar si sucede un choque
                    echo "<br>";
                    $barcos = $_POST["barcos"];
                    $choque=0;
                    $x= $_POST["X"];
                    $y= $_POST["Y"];
                    $x=$EJEX[$x];
                    $Disparo = $x.$y;
                    foreach($barcos as $coord)
                    {
                      if ($coord == $Disparo) 
                      {
                        $choque=1;
                        //////////
                        echo "Pablo";
                        var_dump ($barcos);
                        //$coord =0;
                        for($l=0; $l<count($barcos); $l++)
                        {
                            if ($barcos [$l] == $Disparo)
                            {
                                unset($barcos [$l]);
                            }
                            if(empty($barcos)==true)
                            {
                                $ganaste=1;
                            }
                        }
                        echo "Pablo?";
                        var_dump ($barcos);
                      }     
                    }
                    if ($choque == 0)
                    {
                      $vidas--;
                    }
                    if($vidas==0)
                    {
                      $perdiste=1;
                    }
                    //imprimimos las vidas
                    for ($i=1; $i<=$vidas; $i++)
                    { 
                    echo"<img src=\"./Cora.png\" alt=corazon height=25 widgth=25>";
                    }
                  //Historial
                  $P=$x;
                  $J=$y;
                  $P=$letras[$P];
                  
                  $Historial.=$P.$J;
                  $Historial.=","." ".$_POST["Historial"];
                  echo"<p><b>Historial de Disparos:</b></p>";
                  echo "$Historial<br><br>";
                  
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
                          $explo=false;
                          for($r=0;$r<count($choques); $r++)
                          {
                            $CoordenadasChoque= explode(",",$choques[$r]);
                            if($j == $CoordenadasChoque[0] && $i == $CoordenadasChoque[1])
                            {
                              echo $acierto;
                              $explo=true;
                            }
                                                
                          } 
                          //Logica de Acertar un disparo
                          if($j == $x && $i == $y)
                          {
                            if ($choque == 1)
                            {
                              echo $acierto;
                              $CoordenasDisp="";
                              $CoordenasDisp.=$x.",".$y;
                                            
                              array_push($choques,$CoordenasDisp);
                            }
                            elseif ($choque==0)
                            {
                              echo $fallo;
                            }   
                          }
                          elseif (!$explo)
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
                        <form action =\"Act13.php\" method=\"post\">
                            Posición X(Letra): <input type=\"text\" name=\"X\" required>
                            Posición Y(Número): <input type=\"number\" name=\"Y\" min = \"1\" max =\"10\" required>
                            <input type =\"submit\" name =\"Disparar\" value=\"Disparar!!\">";
                            echo "<input type=\"hidden\" name=\"vidas\" value=\"$vidas\">";
                            echo "<input type=\"hidden\" name=\"Historial\" value=\"$Historial\">";
                            echo "<input type=\"hidden\" name=\"Ganaste\" value=\"$ganaste\">";
                            echo "<input type=\"hidden\" name=\"Perdiste\" value=\"$perdiste\">";
                            foreach ($choques as $disp)
                            {
                                echo "<input type=\"hidden\" name=\"choques[]\" value=\"$disp\">";
                            }
                            foreach ($barcos as $coordenada)
                            {
                                echo "<input type=\"hidden\" name=\"barcos[]\" value=\"$coordenada\">";
                            }
                    echo "</form>";
                    echo "Ganaste". $ganaste;
                    echo "Perdiste". $perdiste;
      }
      elseif($perdiste == 1)
      {
        echo "<h1> Felicidades Perdiste !!<h1> <br>
        Hecho: Arturo & Sergio <br>
        PD. Te amamos PABLO";
      }
      else{
        echo "<h1> Ganaste !!<h1> <br>
        Hecho: Arturo & Sergio <br>
        PD. Te amamos PABLO";
      }
      ?>
    </body>
</html>