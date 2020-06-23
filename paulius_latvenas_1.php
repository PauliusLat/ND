<?php
echo '=== Paulius Latvenas. 1 week. 1 Part: Kintamieji ir sąlygos. ===<br>';
echo '<br>---------------U1------------------<br>';

    $vardas = 'Paulius';
    $pavarde = 'Latvenas';
    $gimimoMetai = 1986;
    $metai = 2020;
    $amzius = $metai - $gimimoMetai;

    echo "Aš esu $vardas $pavarde. Man yra $amzius metai(ų).";

echo '<br>---------------U2------------------<br>';

    $first = rand(0, 4);
    $second = rand(0, 4);
    // var_dump("$first, $second");
    if($first === 0 || $second === 0){
        echo '!!! Dalyba iš nulio negalima !!!';
    }else{
        $rezult = ($first >= $second) ? $first/$second : $second/$first;
        echo "Skaičių $first ir $second dalyba iš didesnio lygi: " . round($rezult, 2);
    }

echo '<br>---------------U3------------------<br>';

    $first = rand(0, 25);
    $second = rand(0, 25);
    $third = rand(0, 25);
    if(($first > $second && $third > $first) || ($first < $second && $third < $first)) $average = $first;
    elseif(($first > $second && $third < $second) || ($first < $second && $third > $second)) $average = $second;
    elseif(($first > $second && $third < $first) || ($first < $second && $third > $first)) $average = $third;
    else $average = "(esant vienodiems skaičiams, vidutinio rasti negalima.)";

    echo("Iš gautų skaičių: $first, $second, $third. Vidutinis yra: $average.");

echo '<br>---------------U4------------------<br>';

    // krastiniu ilgiai
    $a = rand(1,10);
    $b = rand(1,10);
    $c = rand(1,10);
    $longest = ($a > $b && $a > $c) ? $a : (($b > $a && $b > $c) ? $b : $c);
    $isTriangle = ($a + $b + $c - $longest > $longest) ? 'galima' : 'negalima';

    echo "Iš kraštinių: $a, $b, $c $isTriangle sudaryti trikampį(-io).";

echo '<br>---------------U5------------------<br>';

    $first = rand(0, 2);
    $second = rand(0, 2);
    $third = rand(0, 2);
    $fourth = rand(0, 2);
    $zero = 0;
    $one = 0;
    $two = 0;
    ($first === 0) ? $zero++ : (($first === 1) ? $one++ : $two++); 
    ($second === 0) ? $zero++ : (($second === 1) ? $one++ : $two++); 
    ($third === 0) ? $zero++ : (($third === 1) ? $one++ : $two++); 
    ($fourth === 0) ? $zero++ : (($fourth === 1) ? $one++ : $two++); 

    echo "Sugeneruoti skaičiai: $first, $second, $third, $fourth.<br>'0'x$zero<br>'1'x$one<br>'2'x$two";

 echo '<br>---------------U6------------------<br>';

    $tagsNumber = rand(1, 6);
    echo "<h$tagsNumber>$tagsNumber</h$tagsNumber>";
    
 echo '<br>---------------U7------------------<br>';

    $number1 = rand(-10, 10);
    $number2 = rand(-10, 10);
    $number3 = rand(-10, 10);
    $color1 = ($number1 === 0) ? 'red' : (($number1 < 0 ) ? 'green' : 'blue');
    $color2 = ($number2 === 0) ? 'red' : (($number2 < 0 ) ? 'green' : 'blue');
    $color3 = ($number3 === 0) ? 'red' : (($number3 < 0 ) ? 'green' : 'blue');

    echo "<h3 style=\"color: $color1\">$number1</h3>";
    echo "<h3 style=\"color: $color2\">$number2</h3>";
    echo "<h3 style=\"color: $color3\">$number3</h3>";
    
 echo '<br>---------------U8------------------<br>';

    $qty = rand(5, 3000);
    $price = 1.00;
    if($qty * $price > 1000) $price = 0.97; 
    if($qty * $price > 2000) $price = 0.96; 

    echo "Perkamos $qty žvakės po $price Eur. <br>Suma: " . $qty*$price ." Eur.";

 echo '<br>---------------U9------------------<br>';

    $first = rand(0, 100);
    $second = rand(0, 100);
    $third = rand(0, 100);
    $totalAverage = (Integer)(($first + $second + $third)/3);
    $sum = 0;
    $count = 0;
    if($first >= 10 && $first <= 90) {
        $sum += $first;
        $count++;
    }
    if($second >= 10 && $second <= 90) {
        $sum += $second;
        $count++;
    }
    if($third >= 10 && $third <= 90) {
        $sum += $third;
        $count++;
    }
    $average = (Integer) ($sum / $count);

    echo "Skaičių $first, $second, $third :<br>";
    echo "- Bendras aritmetinis vidurkis: $totalAverage<br>";
    echo "- Aritmetinis vidurkis atmetus mažesnes kaip 10 ir didesnes kaip 90 reikšmes: $average";
    
 echo '<br>---------------U10-----------------<br>';

    $hour = rand(0, 23);
    $min = rand(0, 59);
    $sec = rand(0, 59);
    $secPlus = rand(0,300);
    $currentSecs = $hour * 3600 + $min * 60 + $sec;
    if($hour < 10) $hour = "0" . $hour;
    if($min < 10) $min = "0" . $min;
    if($sec < 10) $sec = "0" . $sec;
    echo " $hour:$min:$sec <br>";
    echo "Pridedame $secPlus<br>";
    $totalSec = $currentSecs + $secPlus;
    $hour = (Integer)($totalSec / 3600);
    if($hour > 23) $hour -= 24;
    $min = (Integer)($totalSec % 3600 / 60);
    $sec = $totalSec % 60;
    if($hour < 10) $hour = "0" . $hour;
    if($min < 10) $min = "0" . $min;
    if($sec < 10) $sec = "0" . $sec;
    echo " $hour:$min:$sec";

 echo "<br>---------------U11-----------------<br>";

    $v1 = rand(1000, 9999);    
    $v2 = rand(1000, 9999);    
    $v3 = rand(1000, 9999);    
    $v4 = rand(1000, 9999);    
    $v5 = rand(1000, 9999);    
    $v6 = rand(1000, 9999);    
    if($v1 < $v2){
        $temporary = $v1;
        $v1 = $v2;
        $v2 = $temporary;
    }
    if($v1 < $v3){
        $temporary = $v1;
        $v1 = $v3;
        $v3 = $temporary;
    }
    if($v1 < $v4){
        $temporary = $v1;
        $v1 = $v4;
        $v4 = $temporary;
    }
    if($v1 < $v5){
        $temporary = $v1;
        $v1 = $v5;
        $v5 = $temporary;
    }
    if($v1 < $v6){
        $temporary = $v1;
        $v1 = $v6;
        $v6 = $temporary;
    }
    if($v2 < $v3){
        $temporary = $v2;
        $v2 = $v3;
        $v3 = $temporary;
    }
    if($v2 < $v4){
        $temporary = $v2;
        $v2 = $v4;
        $v4 = $temporary;
    }
    if($v2 < $v5){
        $temporary = $v2;
        $v2 = $v5;
        $v5 = $temporary;
    }
    if($v2 < $v6){
        $temporary = $v2;
        $v2 = $v6;
        $v6 = $temporary;
    }   
    if($v3 < $v4){
        $temporary = $v3;
        $v3 = $v4;
        $v4 = $temporary;
    }
    if($v3 < $v5){
        $temporary = $v3;
        $v3 = $v5;
        $v5 = $temporary;
    }
    if($v3 < $v6){
        $temporary = $v3;
        $v3 = $v6;
        $v6 = $temporary;
    }
    if($v4 < $v5){
        $temporary = $v4;
        $v4 = $v5;
        $v5 = $temporary;
    }
    if($v4 < $v6){
        $temporary = $v4;
        $v4 = $v6;
        $v6 = $temporary;
    }
    if($v5 < $v6){
        $temporary = $v5;
        $v5 = $v6;
        $v6 = $temporary;
    }
    echo "$v1 $v2 $v3 $v4 $v5 $v6";

