<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reloj Mundial / Calcula cumpleaños</title>
</head>
    <body>
        <?php
            if (isset($_POST["Consultar"]) && $_POST["Consultar"] != " ")
            {
                //Inicializamos las varibles que recibimos de los imputs
                $h= (isset($_POST["HoraCDMX"]) && $_POST["HoraCDMX"] != " " )? $_POST["HoraCDMX"] : FALSE;
                $NY= (isset($_POST["RELOJNY"]))? $_POST["RELOJNY"] : FALSE;
                $SP= (isset($_POST["RELOJSP"]))? $_POST["RELOJSP"] : FALSE;
                $M= (isset($_POST["RELOJM"]))? $_POST["RELOJM"] : FALSE;
                $P= (isset($_POST["RELOJP"]))? $_POST["RELOJP"] : FALSE;
                $R= (isset($_POST["RELOJR"]))? $_POST["RELOJR"] : FALSE;
                $A= (isset($_POST["RELOJA"]))? $_POST["RELOJA"] : FALSE;
                $B= (isset($_POST["RELOJB"]))? $_POST["RELOJB"] : FALSE;
                $T= (isset($_POST["RELOJT"]))? $_POST["RELOJT"] : FALSE;

                //Cuando nos mandan una hora para poder comparar empezamos a hacer las madificicaciones a las horas
                if ($h != FALSE)
                {
                    echo "<table border=\"1\" style=\"text-align: center\"> 
                                <th colspan= \"2\">Reloj mundial</th> 
                                <tr>
                                <td>CDMX</td>";
                        //Eliminamos los dos puntos para trabajar unicamente con los valores 
                        $hrsmin = explode(":",$h);
                        $hrsmx=$hrsmin[0];
                        //Transformamos todos los valores a entero para pdoer hacer sumas y restas
                        $hrsmx=intval($hrsmx);
                        //Consideramos el aumento o disminucion de horas conrespecto a la Ciudad de Mexico 
                        $horamx=$hrsmx+0;
                        //Modificamos a un formato de 24 hrs 
                        if($horamx>=24)
                        {
                            $horamx=$hrsmx-24;
                        }
                        echo "<td>";
                        //Imprimimos en la tabla
                        echo $horamx. " hrs";
                        $horamx = $hrsmin[1];
                        echo $horamx. " mins";
                        echo "</td>";
                    //El proceso anterior se repite para cada uno de los lugares unicamnete modificando nombres de varibles y la diferencia en horas que hay entre las ciudades con respecto a la CDMX
                    
                    //Para NY
                    if ($NY != FALSE)
                    {
                        echo "<tr>";
                        echo "<td>";
                        echo "NEW YORK </td>";
                        $hrsmin = explode(":",$h);
                        $hrsNY=$hrsmin[0];
                        $hrsNY=intval($hrsNY);
                        $horaNY=$hrsNY+1;
                        if($horaNY>=24)
                        {
                            $horaNY=$horaNY-24;
                        }
                        echo "<td>";
                        echo $horaNY. " hrs";
                        $horaNY = $hrsmin[1];
                        echo $horaNY. " mins";
                        echo "</td>";
                        echo "<tr>";
                    }
                    //Para SaoPaulo
                    if ($SP != FALSE)
                    {
                        echo "<tr>";
                        echo "<td>";
                        echo "SAO PAULO </td>";
                        $hrsminSP = explode(":",$h);
                        $hrsSP=$hrsminSP[0];
                        $hrsSP=intval($hrsSP);
                        $horaSP=$hrsSP+2;
                        if($horaSP>=24)
                        {
                            $horaSP=$horaSP-24;
                        }
                        echo "<td>";
                        echo $horaSP. " hrs";
                        $horaSP = $hrsminSP[1];
                        echo $horaSP. " mins";
                        echo "</td>";
                        echo "<tr>";
                    }
                    //Para Madrid
                    if ($M != FALSE)
                    {
                        echo "<tr>";
                        echo "<td>";
                        echo "MADRID </td>";
                        $hrsminM = explode(":",$h);
                        $hrsM=$hrsminM[0];
                        $hrsM=intval($hrsM);
                        $horaM=$hrsM+7;
                        if($horaM>=24)
                        {
                            $horaM=$horaM-24;
                        }
                        echo "<td>";
                        echo $horaM. " hrs";
                        $horaM = $hrsminM[1];
                        echo $horaM. " mins";
                        echo "</td>";
                        echo "<tr>";
                    }
                    //Para Paris
                    if($P != FALSE)
                    {
                        echo "<tr>";
                        echo "<td>";
                        echo "PARIS </td>";
                        $hrsminP = explode(":",$h);
                        $hrsP=$hrsminP[0];
                        $hrsP=intval($hrsP);
                        $horaP=$hrsP+7;
                        if($horaP>=24)
                        {
                            $horaP=$horaP-24;
                        }
                        echo "<td>";
                        echo $horaP. " hrs";
                        $horaP = $hrsminP[1];
                        echo $horaP. " mins";
                        echo "</td>";
                        echo "<tr>";
                    }
                    //Para Roma
                    if($R != FALSE)
                    {
                        echo "<tr>";
                        echo "<td>";
                        echo "ROMA </td>";
                        $hrsminR = explode(":",$h);
                        $hrsR=$hrsminR[0];
                        $hrsR=intval($hrsR);
                        $horaR=$hrsR+7;
                        if($horaR>=24)
                        {
                            $horaR=$horaR-24;
                        }
                        echo "<td>";
                        echo $horaR. " hrs";
                        $horaR = $hrsminR[1];
                        echo $horaR. " mins";
                        echo "</td>";
                        echo "<tr>";
                    }
                    //Para Atenas
                    if($A != FALSE)
                    {
                        echo "<tr>";
                        echo "<td>";
                        echo "ATENAS </td>";
                        $hrsminA = explode(":",$h);
                        $hrsA=$hrsminA[0];
                        $hrsA=intval($hrsA);
                        $horaA=$hrsA+8;
                        if($horaA>=24)
                        {
                            $horaA=$horaA-24;
                        }
                        echo "<td>";
                        echo $horaA. " hrs";
                        $horaA = $hrsminA[1];
                        echo $horaA. " mins";
                        echo "</td>";
                        echo "<tr>";
                    }
                    //Para Beijing
                    if($B != FALSE)
                    {
                        echo "<tr>";
                        echo "<td>";
                        echo "BEIJING </td>";
                        $hrsminB = explode(":",$h);
                        $hrsB=$hrsminB[0];
                        $hrsB=intval($hrsB);
                        $horaB=$hrsB+13;
                        if($horaB>=24)
                        {
                            $horaB=$horaB-24;
                        }
                        echo "<td>";
                        echo $horaB. " hrs";
                        $horaB = $hrsminB[1];
                        echo $horaB. " mins";
                        echo "</td>";
                        echo "<tr>";
                    }
                    //Para Tokio
                    if($T != FALSE)
                    {
                        echo "<tr>";
                        echo "<td>";
                        echo "TOKIO </td>";
                        $hrsminT = explode(":",$h);
                        $hrsT=$hrsminT[0];
                        $hrsT=intval($hrsT);
                        $horaT=$hrsT+14;
                        if($horaT>=24)
                        {
                            $horaT=$horaT-24;
                        }
                        echo "<td>";
                        echo $horaT. " hrs";
                        $horaT = $hrsminT[1];
                        echo $horaT. " mins";
                        echo "</td>";
                        echo "<tr>";
                    }
                }
                else
                    echo "Debes darme una hora";
            }
            //Para el modo de Cumpleaños
            elseif (isset($_POST["Calcular"]) && $_POST["Calcular"] != " ")
            {
                date_default_timezone_set("America/Mexico_City");
                echo "<table border=\"1\" style=\"text-align: center\"> 
                                <th>Próximo Cumpleaños</th> ";
                //Inicializamos las varibales que recibimos
                $cump= (isset($_POST["Cumpleaños"]) && $_POST["Cumpleaños"] != " " )? $_POST["Cumpleaños"] : FALSE;
                $D= (isset($_POST["Dias"]))? $_POST["Dias"] : FALSE;
                $H= (isset($_POST["Horas"]))? $_POST["Horas"] : FALSE;
                $M= (isset($_POST["Minutos"]))? $_POST["Minutos"] : FALSE;
                $F= (isset($_POST["FinSem"]))? $_POST["FinSem"] : FALSE;

                //Hacemos una arreglo con 24 meses que realizara facilitara la suma de dias totales
                //Se consideran 24 meses para poder iterar y aumentar en los meses de dos digitos y no revasar el indice de 12
                $Mes=[0,31,28,31,30,31,30,31,31,30,31,30,31,31,28,31,30,31,30,31,31,30,31,30,31];
                $feac=date("Y-m-d");
                $f=explode("-", $feac);
                //Verificamos que recibimos una fecha con la que podamos comparar
                if ($cump != FALSE)
                {
                    //Transformamos todos los valores a enteros para poder modificarlos 
                    $intañof=$f[0];
                    $f[0]=intval($intañof);
                    $intmesf=$f[1];
                    $f[1]=intval($intmesf);
                    $intdiaf=$f[2];
                    $f[2]=intval($intdiaf);
                    
                    $c=explode("-", $cump);
                    $c[0] = $f[0];

                    $intañoc=$c[0];
                    $c[0]=intval($intañoc);
                    $intmesc=$c[1];
                    $c[1]=intval($intmesc);
                    $intdiac=$c[2];
                    $c[2]=intval($intdiac);

                    //Primero verificamos el mes 

                    //Si el mes es menor con respecto al mes actual
                    if($c[1]<$f[1])
                    {
                        //Significa que el proximo cumple es un año por lo que se aunmenta un año con repecto al año actual
                        $c[0] = $f[0]+1;
                        $f[0]=$f[0]+1;
                        //Hacemos una diferencia de meses para poder determinar cuantos dias sumar
                        $difmes=$f[1]-$c[1];
                        $ll=$c[1];
                        $dias=0;
                        //Hacemos la iteracion en donde se estaran guardando los dias de los meses
                        for($p=0; $p<$difmes; $p++)
                        {
                            $dias=$dias+$Mes[$ll+$p];
                        }
                        //Hacemos una diferencia de dias que mas tarde restaremos o sumaremos para poder considerar los dias entre los meses
                        $difdia=$c[2]-$f[2];   
                        
                        if($difdia<0)
                            $difdia=$difdia*-1;
                        
                        if ($c[1]>$f[1])
                            $dia=$dias+$difdia;

                        if ($c[1]<$f[1])
                            $dia=$dias-$difdia;
                        //Se hace la resta con respecto a 365 dias del año
                        $diatot=365-$dia-1;
                    }
                    
                    //El mes es igual
                    //Cuando el mes igual, el cumpleaños es en cuestion de dias por lo que no iteraremos en el arreglo de meses 
                    elseif ($c[1]==$f[1])
                    {
                        //Aun no llega tu cumple
                        if($c[2]<$f[2])
                        {
                            $difdia=$f[2]-$c[2];
                            $diatot=$difdia;
                        }
                        elseif($c[2]>$f[2])
                        {
                            $difdia=$f[2]-$c[2];

                            if($difdia<0)
                                $difdia=$difdia*-1;
                            
                            $dia=$difdia;
                            $diatot=$dia;
                        }
                    }
                    //Si el mes es mayor con respecto al mes actual
                    //Repetimos los pasos de cuando el mes de cumpleaños es menor unicamente que ahora no restaremos con 365 dias, porque significa que
                    // el cumpleaños es en este año
                    elseif ($c[1]>$f[1])
                    {
                        $difmes=$c[1]-$f[1];
                        $ll=$c[1];
                        $dias=0;
                        for($p=0; $p<$difmes; $p++)
                        {
                            $dias=$dias+$Mes[$ll+$p];
                        }
                        $difdia=$c[2]-$f[2];
                        if($difdia<0)
                            $difdia=$difdia*-1;

                        if ($c[2]>$f[2])
                            $dia=$dias+$difdia;

                        if ($c[2]<$f[2])
                            $dia=$dias-$difdia;

                        $diatot=$dia;
                    }
                    //Empezamos a hacer las impresiones 
                    //Del prox cumple
                    $c=implode("-",$c);
                    echo "<td>$c</td>
                                <tr>";
                    //Impresion de los dias 
                    if ($D != FALSE)
                    {
                        if($feac != $cump)
                        {
                            echo "<td>";
                            echo "Dias:</td>";
                            echo "<td>$diatot</td>
                            <tr>";
                        }
                        else
                        {
                            echo "<td>";
                            echo "Dias:</td>";
                            echo "<td>0</td>
                            <tr>";
                        }
                    }
                    //Impresion de las horas
                    if ($H != FALSE)
                    { 
                        if($feac != $cump)
                        {
                            echo "<td>";
                            echo "Horas:</td>";
                            $horastot=$diatot*24;
                            echo "<td>$horastot</td>
                            <tr>";
                        }
                        else
                        {
                            echo "<td>";
                            echo "Horas:</td>";
                            echo "<td>0</td>
                            <tr>";
                        }
                    }
                    //Impresion de los minutos 
                    if ($M != FALSE)
                    {
                        if($feac != $cump)
                        {
                            echo "<td>";
                            echo "Minutos:</td>";
                            $mintot=$horastot*60;
                            echo "<td>$mintot</td>
                            <tr>";
                        }
                        else
                        {
                            echo "<td>";
                            echo "Minutos:</td>";
                            echo "<td>0</td>
                            <tr>";
                        }
                    }
                    //Impresión de si es fin de semana o no 
                    if ($F != FALSE)
                    {
                        //Consideramos la fecha actual para poder hacer la comparacion de los fines de semana 
                        $c = strtotime($c);
                        $c = localtime($c,true);
                        echo "<td>";
                        echo "¿Es en un fin de semana?</td>";
                        if($c["tm_wday"]== 6 || $c["tm_wday"]== 0)
                        {
                            echo"<td>Si</td>
                            <tr>";
                        }
                        else
                            echo"<td>No</td>
                            <tr>";
                    }
                }
                else{
                    echo "Debes de darme una fecha";
                }
            }
        ?>
    </body>
</html>