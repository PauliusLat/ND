<?php
echo '=== Paulius Latvenas. Week-1. Part-3: Ciklai. ===<br>';
echo '<br>---------------U1------------------<br>';

    echo'<div style="word-break: break-all;">';
    for ($i=0, $count=0; $i < 400 ; $i++) { 
        if ($count === 50){
            echo '<br>';
            $count = 0;
        } 
        echo '*';
        $count++;
    }
    echo'</div>';

echo '<br>---------------U2------------------<br>';

    for ($i=0, $count=0; $i < 300; $i++) { 
        $number = rand(1,300);
        if($number > 150) $count++;
        if($number > 275) echo "<span style=\"color:red\">$number </span>";
        else echo"$number ";
    }
    echo "<br>Didesniu, kaip 150 yra: $count";

echo '<br>---------------U3------------------<br>';

    echo'<div style="word-break: break-all;">';
    for ($i=1, $flag=FALSE; $i <=3000 ; $i++) { 
        if($i % 77 === 0) {
            if ($flag) echo',';
            $flag = TRUE;
            echo $i;
        }
    }
    echo'</div>';

echo '<br>---------------U4------------------<br>';

    for ($i=0; $i <100 ; $i++) { 
        echo '<span style="line-height: 5px">';
        for ($j=0; $j <100; $j++) { 
            echo'*';
        }
        echo'</span>';
        echo'<br>';
    }

echo '<br>---------------U5------------------<br>';
    $firstStar = 0;
    $lastStar = 99;
    for ($i=0; $i <100 ; $i++) { 
        echo '<span style="line-height: 5px">';
        for ($j=0; $j <100; $j++) { 
            if($firstStar === $j){
                echo '<span style="color:red">*</span>';
                continue;
            }
            if($lastStar ===$j){ 
                echo '<span style="color:red">*</span>';
                continue;
            }
            echo'*';
        }
        $firstStar++;
        $lastStar--;
        echo'</span>';
        echo'<br>';
    }

echo '<br>---------------U6------------------<br>';
//a
    echo'a.)<br>';
    $coin = -1;
    while (0 !== $coin) {
        $coin = rand(0,1);
        echo($coin === 0) ?'H ' : 'S ';
    }
//b
    echo'<br>b.)<br>';
    $count = 0;
    while (3 !== $count) {
        $coin = rand(0,1);
        if(0===$coin){
            echo 'H ';
            $count++;
        }
        else echo 'S ';
    }
//c
    echo'<br>c.)<br>';
    $count = 0;
    while (3 !== $count) {
        $coin = rand(0,1);
        if(0===$coin){
            echo 'H ';
            $count++;
        }
        else{
            echo 'S ';
            $count = 0;
        }
    }

echo '<br>---------------U7------------------<br>';

    $player1 = 0;
    $player2 = 0;

    while (($player1 <= 222) && ($player2 <= 222)) {
        $p1 = rand(10,20);
        $player1 +=$p1;
        $p2 = rand(5,25);
        $player2 +=$p2;
        echo "Pertas surinko $p1, Kazys surinko $p2. ";
        echo ($p1>$p2) ? "Laimėjo Petras. " : (($p1===$p2)? 'Lygiosios. ': "Laimėjo Kazys. ");
        echo '<br>';
    }
    echo 'Turnyrą laimėjo ';
    echo ($player1 > $player2) ? "Petras. $player1 " : "Kazys. $player2 ";

echo '<br>---------------U8------------------<br>';

    $firstStar = 10;
    $lastStar = 10;
    for ($i=0; $i <21 ; $i++) { 
        echo '<span style="line-height: 5px">';
        for ($j=0; $j <21; $j++) { 
            if($j>=$firstStar && $j<=$lastStar){
                $r = rand(0,255);
                $g = rand(0,255);
                $b = rand(0,255);
                echo "<span style=\"color:rgb($r, $g, $b)\">*</span>";
                continue;
            }
            echo'<span style="color:white">*</span>';
        }
        ($i<10) ? $firstStar--: $firstStar++;
        ($i<10) ? $lastStar++ : $lastStar--;
        echo'</span>';
        echo'<br>';
    }

echo '<br>---------------U9------------------<br>';
$begin = microtime(true);
for ($i=0; $i <1000000 ; $i++) { 
    $c = "10 bezdzioniu suvalge 20 bananu.";
}
$end = microtime(true) - $begin;
echo "Dvigubas suciklino per: $end";
echo'<br>';

$begin = microtime(true);
for ($i=0; $i <1000000 ; $i++) { 
    $c = '10 bezdzioniu suvalge 20 bananu.';
}
$end = microtime(true) - $begin;
echo "Viengubas suciklino per: $end";

echo '<br>---------------U10-----------------<br>';

//a.)
    $hits = 0;
    for ($i=0; $i < 5; $i++) { 
        $sukalta = 0;
        while($sukalta < 85){
            $sukalta += rand(5,20);
            $hits++;
        }
    }
    echo "Mažais smūgiais sukalti 5 vinis reikia $hits smūgių.<br>";

//b.)
    $hits = 0;
    $mist = 0;
    for ($i=0; $i < 5; $i++) { 
        $sukalta = 0;
        while($sukalta < 85){
            if(rand(0,1) === 1) $sukalta += rand(20,30);
            else $mist++;
            $hits++; 
        }
    }
    echo "Dideliais smūgiais sukalti 5 vinis reikia $hits smūgių.";
    echo " Nepataikyta į vinį $mist kartų(us).";

echo '<br>---------------U11-----------------<br>';

    $str50 = '';
    for ($i=0; $i <50 ; $i++) { 
        if(strpos($str50, ($num = rand(1,200).' ')) === FALSE){
            $str50 .= $num;
        }
    }
    echo $str50;
    echo '<br>';
    $arr50 = explode(' ',trim($str50));
    $newStr = '';
    foreach ($arr50 as $val) {
        for ($i=2; $i <= ($val / 2) ; $i++) { 
            if(($val%$i) === 0 ) continue 2;
        }
        $newStr .= $val.' ';
    }
    $sortedArr = explode(' ',trim($newStr));
    sort($sortedArr);
    echo 'Sorted: '.implode(' ', $sortedArr);



    