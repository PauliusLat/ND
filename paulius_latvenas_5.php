<?php
echo '=== Paulius Latvenas. Week-1. Part-5: Masyvai2. ===<br>';
echo '<br>---------------U1------------------<br>';

    $doubleArray = [];
    for ($i=0; $i <10; $i++) { 
        $arr=[];
        for ($j=0; $j<5; $j++) { 
            array_push( $arr, rand(5,25) );
        }
        array_push($doubleArray, $arr);
    }
    echo'<pre>';
    var_dump($doubleArray);

echo '<br>---------------U2------------------<br>';

    //a
    echo'<br>a.)<br>';
    $counter = 0;
    $max = 0;
    for ($i=0; $i <count($doubleArray); $i++) { 
        for ($j=0; $j<count($doubleArray[$i]); $j++) { 
            if ($doubleArray[$i][$j] >10) $counter++;
            if ($doubleArray[$i][$j] > $max) $max = $doubleArray[$i][$j];
        }
    }
    echo "Didesnių kaip 10 yra: $counter";

    //b
    echo'<br>b.)<br>';
    
    echo "Didziausia reikšmė: $max";
    //c
    echo'<br>c.)<br>';
    for ($i=0; $i <count($doubleArray[$i]); $i++) { 
        $sum=0;
        for ($j=0; $j<count($doubleArray); $j++) { 
            $sum+= $doubleArray[$j][$i];
        }
        echo "[$i] Suma: $sum<br>";
    }

    //d
    echo'<br>d.)<br>';

    for ($i=0; $i <count($doubleArray); $i++) { 
        for ($j=0; $j< 2; $j++) { 
            array_push( $doubleArray[$i], rand(5,25) );
        }
    }
    print_r($doubleArray);
    
    //e
    echo'<br>e.)<br>';
    $doubleArrayNew = [];
    for ($i=0; $i <count($doubleArray); $i++) { 
        $sum=0;
        for ($j=0; $j<count($doubleArray[$i]); $j++) { 
            $sum += $doubleArray[$i][$j];
        }
        array_push($doubleArrayNew, $sum);
    }
    print_r($doubleArrayNew);

echo '<br>---------------U3------------------<br>';
  
    $chars = range('A','Z');
    $doubleArrayAZ = [];
    for ($i=0; $i <10; $i++) { 
        $lengtg = rand(2,20);
        $arr = [];
        for ($j=0; $j<$lengtg; $j++) { 
            array_push( $arr, $chars[ rand(0, count($chars)-1) ] );
        }  
        array_push($doubleArrayAZ, $arr);
    }
    for ($i=0; $i <count($doubleArrayAZ); $i++) { 
        sort($doubleArrayAZ[$i]);
    }
        print_r($doubleArrayAZ);

echo '<br>---------------U4------------------<br>';

    for ($i=0; $i <count($doubleArrayAZ); $i++) { 
        for ($j=$i+1; $j <count($doubleArrayAZ) ; $j++) { 
            if( count($doubleArrayAZ[$i]) > count($doubleArrayAZ[$j]) ){
                $temp = $doubleArrayAZ[$i];
                $doubleArrayAZ[$i] = $doubleArrayAZ[$j];
                $doubleArrayAZ[$j] = $temp;
            }
        }
    }
    print_r($doubleArrayAZ);

echo '<br>---------------U5------------------<br>';

    $array30=[];
    for ($i=0; $i <30 ; $i++) { 
        $array30[$i] = ["user_id" => rand(1,1000000), "place_in_row" => rand(0,100)];
    }
    print_r($array30);

echo '<br>---------------U6------------------<br>';

    for ($i=0; $i <count($array30) ; $i++) { 
        for ($j=$i+1; $j < count($array30); $j++) { 
            if ($array30[$i]["user_id"] > $array30[$j]["user_id"]) {
                $temp = $array30[$i];
                $array30[$i] = $array30[$j];
                $array30[$j] = $temp;
            }
        }
    }
    for ($i=0; $i <count($array30) ; $i++) { 
        for ($j=$i+1; $j < count($array30); $j++) { 
            if ($array30[$i]["place_in_row"] < $array30[$j]["place_in_row"]) {
                $temp = $array30[$i];
                $array30[$i] = $array30[$j];
                $array30[$j] = $temp;
            }
        }
    }
    print_r($array30);

echo '<br>---------------U7------------------<br>';

    for ($i=0; $i <count($array30); $i++) { 
        $array30[$i] += [
            "name" => str_shuffle( substr( implode($chars,''), rand(0,count($chars)-15), rand(5,15))), 
            "surname" => str_shuffle( substr( implode($chars,''), rand(0,count($chars)-15), rand(5,15)))
        ];
    }
    print_r($array30);

echo '<br>---------------U8------------------<br>';

    $array10 = [];
    for ($i=0; $i <10 ; $i++) {
        $arr = [];
        for ($j=0; $j < $size = rand(0,5); $j++) { 
            array_push($arr, rand(0,10));
        }
        if(0===$size) $array10[$i] = rand(0,10);
        else array_push($array10, $arr);
    }
    print_r($array10);

echo '<br>---------------U9------------------<br>';

    $sum=0;
    for ($i=0; $i <count($array10) ; $i++) {
        if(is_array($array10[$i])){
            for ($j=0; $j <count($array10[$i]) ; $j++) { 
                $sum += $array10[$i][$j];
            }
        }
        else $sum += $array10[$i];
    }
    echo "Visų emelentų suma: $sum<br>";


    for ($i=0; $i <count($array10)-1 ; $i++) {
        for($j=$i+1; $j<count($array10); $j++ ){

            $a1 = &$array10[$i];
            $a2 = &$array10[$j];
            if( (is_array($a1) ? sum($a1) : $a1) > (is_array($a2) ? sum($a2) : $a2 ) ){
                $temp = $a1;
                $a1 = $a2;
                $a2 = $temp;
            }
        }
    }

    function sum( $array ){
        $sum=0;
            for ($j=0; $j <count($array) ; $j++) { 
                $sum += $array[$j];
            }
        return $sum;
    }
    print_r($array10);

echo '<br>---------------U10-----------------<br>';

    $array10_10 = [];
    for ($i=0; $i <10 ; $i++) { 
        $arr1=[];
        for ($j=0; $j <10 ; $j++) { 
            $arr1[$j] = ["value" => substr('#%+*@%', rand(0,5),1), "color" => '#'.rand(100000,999999) ]; 
        }
        array_push($array10_10, $arr1);
    }

    for ($i=0; $i <count($array10_10); $i++) { 
        for ($j=0; $j <count($array10_10[$i]) ; $j++) { 
            echo '<span style="color:'.$array10_10[$i][$j]['color'].'">'.$array10_10[$i][$j]['value'].' </span>';
        }
        echo '<br>';
    }

echo '<br>---------------U11-----------------<br>';

do {
    $a = rand(0, 1000);
    $b = rand(0, 1000);
} while ($a == $b);
$long = rand(10,30);
$sk1 = $sk2 = 0;
echo '<h3>Skaičiai '.$a.' ir '.$b.'</h3>';
$c = [];
for ($i=0; $i<$long; $i++) {
    $c[] = array_rand(array_flip([$a, $b]));
}
//sprendimas:
$sum=0;
for ($i=0; $i <count($c) ; $i++) { 
    $sum += $c[$i];
}
$sk2 = ( (count($c)*count($c)*max($c)) - ($sum*count($c))) / (($sum - (min($c)*count($c))) + (max($c)*(count($c))) - $sum );
$sk1 = count($c) - $sk2;
//

echo '<h4>Masyvas:</h4>';
echo '<pre>';
print_r($c);
echo '</pre>';

echo '<h3>Skaičius <span style="color:brown">'.max($c).'</span> yra pakartotas '.$sk1.' kartų, o skaičius <span style="color:brown">'.min($c).'</span> - '.$sk2.' kartų.</h3>';
