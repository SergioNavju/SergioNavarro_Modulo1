<?php
    $t1= (isset($_POST["taco1"]) && $_POST["taco1"] != " " )? $_POST["taco1"] : "No especifico";
    $t2= (isset($_POST["taco2"]) && $_POST["taco2"] != " " )? $_POST["taco2"] : "No especifico";
    $t3= (isset($_POST["taco3"]) && $_POST["taco3"] != " " )? $_POST["taco3"] : "No especifico";
    $t4= (isset($_POST["taco4"]) && $_POST["taco4"] != " " )? $_POST["taco4"] : "No especifico";
    $t5= (isset($_POST["taco5"]) && $_POST["taco5"] != " " )? $_POST["taco5"] : "No especifico";
    $t6= (isset($_POST["taco6"]) && $_POST["taco6"] != " " )? $_POST["taco6"] : "No especifico";
    $t7= (isset($_POST["taco7"]) && $_POST["taco7"] != " " )? $_POST["taco7"] : "No especifico";
    $t8= (isset($_POST["taco8"]) && $_POST["taco8"] != " " )? $_POST["taco8"] : "No especifico";
    $t9= (isset($_POST["taco9"]) && $_POST["taco9"] != " " )? $_POST["taco9"] : "No especifico";
    $t10= (isset($_POST["taco10"]) && $_POST["taco10"] != " " )? $_POST["taco10"] : "No especifico";
    
    $Resp=[$t1, $t2, $t3, $t4, $t5, $t6, $t7, $t8, $t9, $t10];
    //Hacemos un arreglo por todas las respuestas del cuestionario posibles 
    $A = [];
    $B = [];
    $C = [];
    $D = [];
    //La iteracion agrega un elemento que aumenta la cantidad de variables que hay en el arreglo segun la cantidad de veces que sale esa respuesta en el cuestionario
    for ($i=0; $i<10; $i++)
    {
        if($Resp[$i] == "A")
        {
            array_push($A,$i);
        }
        elseif($Resp[$i] == "B")
        {
            array_push($B, $i);
        }
        elseif($Resp[$i] == "C")
        {
            array_push($C, $i);
        }
        elseif($Resp[$i] == "D")
        {
            array_push($D, $i);
        }
    }
    //Se da el valor que regresa count a una variblea para poder hacer comapraciones con mayor facilidad
    $a=count($A);
    $b=count($B);
    $c=count($C);
    $d=count($D);
    //Se agrega un arreglo que contiene los tipos de taco para poder hacer mas simple su impresión
    $tipotaco =["de Pastor", "de Suadero", "de Barbacoa", "Lagunero", "Campechano", "Light", "Placero", "de Carnitas", "de Mixiote", "Bell", "de Sal"];
    echo "Eres un taco ";
    
    if ($a==$b && $b==$c && $a+$b+$c==9 || $a==$b && $d==$b && $a+$b+$d==9 || $d==$b && $b==$c && $a==3 && $b==3 && $c==3 && $a+$b+$c==9)
    {
        echo $tipotaco[10];
    }
    elseif ($a>$b && $a>$c && $a>$d) 
        echo $tipotaco[0];

    elseif ($b>$a && $b>$c && $b>$d)
        echo $tipotaco[1];
    
    elseif ($c>$a && $c>$b && $c>$d)
        echo $tipotaco[2];

    elseif ($d>$a && $d>$b && $d>$c)
        echo $tipotaco[3];

    elseif ($a==$b && $a+$b>5)
        echo $tipotaco[4];

    elseif ($a==$d && $a+$d>5)
        echo $tipotaco[5];

    elseif ($a==$c && $a+$c>5)
        echo $tipotaco[6];

    elseif ($b==$c && $b+$c>5)
        echo $tipotaco[7];

    elseif ($b==$d && $b+$d>5)
        echo $tipotaco[8];

    elseif ($c==$d && $c+$d>5)
        echo $tipotaco[9];
?>