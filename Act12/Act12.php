<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traducción</title>
</head>
    <body>
        <?php
    
            $modo = (isset($_POST["Traducción"]) && $_POST["Traducción"] != " " ) ?$_POST["Traducción"] : "No especifico";
            $txt = (isset($_POST["texto"]) && $_POST["texto"] != " " ) ?$_POST["texto"] : "No especifico";
            //Creamos listas donde de ponen todos los caracteres que el traductor podra reconocer
            $ABC = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U",
                    "V","W","X","Y","Z","1","2","3","4","5","6","7","8","9","0","!",".",",","?","\""," ","/"];

            $MORSE = [".-","-...","-.-.","-..",".","..-.","--.","....","..",".---","-.-",".-..","--","-.","---",
                    ".--.","--.-",".-.","...","-","..-","...-",".--","-..-","-.--","--..",".----","..---",
                    "...--","....-",".....","-....","--...","---..","----.","-----","--..--",".-.-.-",
                    "-.-.--","..--..",".-..-."," ","/"];
            /*Realizamos una validacion sobre el texto que recibimos con un substr que revisara el primer caracater que el usuario ingrese, 
            esto para poder buscar coicidencias y ver si el usuario se confundio de forma de traducción*/ 
            //VALIDACIÓN español a morse
            $fallo =0;
            if ($modo==0)
            {
                $valid = substr($txt,0,1);
                $valid = strtoupper($valid);
                if($valid == "." || $valid == "-")
                {
                    $fallo =1;
                }
                else
                    $modo = 2;

                if ($fallo == 1)
                {
                    echo "<h1>No puedo traducir eso, tal vez te equivocaste de modo para traducir</h1>";
                }
                
            }
            //VALIDACIÓN morse a español
            if ($modo==1)
            {
                $valid = substr($txt,0, 1);
                $valid = strtoupper($valid);
                if($valid == "." || $valid == "-")
                {
                    $modo= 3;
                }
                else
                    echo "<h1> No puedo traducir eso, tal vez te equivocaste de modo para traducir</h1>";
            }
            //Hacemos un arreglo asociativo que servira para poder asignar la traduccion petinente a la letra que se ingrese
            //De Español a Morse
            $E_M = ["A"=>".-","B"=>"-...","C"=>"-.-.","D"=>"-..","E"=>".","F"=>"..-.","G"=>"--.","H"=>"....","I"=>"..","J"=>".---",
                    "K"=>"-.-","L"=>".-..","M"=>"--","N"=>"-.","O"=>"---","P"=>".--.","Q"=>"--.-","R"=>".-.","S"=>"...",
                    "T"=>"-","U"=>"..-","V"=>"...-","W"=>".--","X"=>"-..-","Y"=>"-.--","Z"=>"--..","1"=>".----","2"=>"..---",
                    "3"=>"...--","4"=>"....-","5"=>".....","6"=>"-....","7"=>"--...","8"=>"---..","9"=>"----.","0"=>"-----",
                    "!"=>"--..--","."=>".-.-.-",","=>"-.-.--","?"=>"..--..","\""=>".-..-."," "=>" ","/"=>""];
            // TRADUCCION DE ESPAÑOL A MORSE
            if ($modo == 2)
            {
                echo "<fieldset>";
                    echo "<legend> <h3>Tu texto a traducir fue: </h3> </legend>";
                    $txt = strtoupper($txt);
                    echo $txt;
                    echo "<br>";
                    //convertimos todo la cadena de ingreso en un arreglo para poder hacer mas facil las comparaciones con el arreglo asociativo
                    $menmors=str_split($txt);
                    echo "<h3>Su traducción es:</h3>";
                /*Realizamos iteraciones que buscan coididencias entre el arreglo donde tenemos todos los carcateres que podemos reconcer y realizamos una asignacion por medio
                los indices del arreglo asociativo*/
                for($i=0 ; $i<strlen($txt) ; $i++)
                {
                    for($x=0 ; $x<count($ABC) ; $x++)
                    {
                        if($menmors[$i] == $ABC[$x])
                        {
                            if($menmors[$i] == " ")
                            {
                                echo "/";
                            }
                            $letra = $menmors[$i];
                            echo $E_M[$letra];
                            echo " ";
                        }
                    }
                }
                echo "</fieldset>";
            }

            //De Morse a Español
            $M_E = [".-"=>"A","-..."=>"B","-.-."=>"C","-.."=>"D","."=>"E","..-."=>"F","--."=>"G","...."=>"H",".."=>"I",".---"=>"J",
                    "-.-"=>"K",".-.."=>"L","--"=>"M","-."=>"N","---"=>"O",".--."=>"P","--.-"=>"Q",".-."=>"R","..."=>"S",
                    "-"=>"T","..-"=>"U","...-"=>"V",".--"=>"W","-..-"=>"X","-.--"=>"Y","--.."=>"Z",".----"=>"1","..---"=>"2",
                    "...--"=>"3","....-"=>"4","....."=>"5","-...."=>"6","--..."=>"7","---.."=>"8","----."=>"9","-----"=>"0",
                    "--..--"=>"!",".-.-.-"=>".","-.-.--"=>",","..--.."=>"?",".-..-."=>"\""," "=>" ","/"=>""];
            
            // TRADUCCION DE ESPAÑOL A MORSE
            if ($modo == 3)
            {
                echo "<fieldset>";
                    echo "<legend> <h3>Tu texto a traducir fue: </h3> </legend>";
                    //Volvemos a transformar txt a un arreglo que utilizara las diagolanes para poder hacer la diferencia de palabras y letras en el leguaje morse
                    $txt = strtoupper($txt);
                    echo $txt;
                    echo "<br>";
                    $menesp=explode("/",$txt);
                    echo "<h3>Su traducción es:</h3>";
                for($i=0 ; $i<count($menesp); $i++)
                {
                    //Ahora hacemos arreglos que toman de refencias los primeros arreglos de palabras, ahora para poder hacer arreglos de palabras unicamente usando como referencia los espacios
                    $strpalabra=$menesp[$i];
                    $letra=explode(" ",$strpalabra);
                    if ($i>0)
                    {
                        echo " / ";
                    }
                    for($a=0; $a<count($letra); $a++)
                    {
                        for($x=0 ; $x<count($MORSE) ; $x++)
                        {
                            if($letra[$a] == $MORSE[$x])
                            {
                                $trad = $letra[$a];
                                echo $M_E[$trad];
                                echo " ";
                            }
                        }
                    }
                }
                echo "</fieldset>";
            }
            
            
        ?>
    </body>
</html>
