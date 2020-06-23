<?php
echo '=== Paulius Latvenas. Week-1. Part-4: Masyvai. ===<br>';
echo '<br>---------------U1------------------<br>';
    
    $array30 = [];
    while (@$a++ < 30) {
        array_push($array30, rand(5,25));
    }   
    echo'<pre>'; 
    print_r($array30);

echo '<br>---------------U2------------------<br>';
//a
echo'<br>a.)<br>';
    $counter = 0;
    foreach($array30 as $val){
        if($val>10) $counter++;
    }
    echo "Didesnių kaip 10 yra: $counter";
//b
echo'<br>b.)<br>';
    $min = 1000;
    foreach($array30 as $val){
        if($val<$min) $min = $val;
    }
    echo "Mažausia reikšmė: $min";
//c
echo'<br>c.)<br>';
    $sum = 0;
    foreach($array30 as $val){
        $sum += $val;
    }
    echo "Suma: $sum";
//d
echo'<br>d.)<br>';
    $array30new = [];
    foreach($array30 as $indx => $val){
        array_push($array30new, $val -= $indx);
    }
    print_r($array30new);

//e
echo'<br>e.)<br>';
    while (@$b++ < 10) {
        array_push($array30new, rand(5,25));
    }
    print_r($array30new);
//f
echo'<br>f.)<br>';
    $array1=[];
    $array2=[];
    foreach($array30new as $val){
        (0 === $val%2) ? array_push($array1, $val) : array_push($array2, $val);
    }
    print_r($array1);
    print_r($array2);

//g
echo'<br>g.)<br>';
    foreach($array2 as $indx =>&$val){
        if($val > 15) $val=0;
    }
    unset($val);
    print_r($array2);

//h
echo'<br>h.)<br>';
    $reply = 'Didesnio kaip 10 masyvas neturi.';
    foreach($array2 as $indx => $val){
        if($val > 10){
            echo "Pirmo didesnio kaip 10 indeksas: $indx";
            $reply = '';
            break;
        }
    }
    echo $reply;
//i
echo'<br>i.)<br>';
    foreach($array30new as $indx => $val){
        if(0===$val%2) unset($array30new[$indx]);
    }
    print_r($array30new);

echo '<br>---------------U3------------------<br>';
   
    $a=0;
    $b=0;
    $c=0;
    $d=0;
    $arrayAD = [];
   
    while (@$z++ < 200) {
        switch (rand(0,3)) {
            case 0:
                array_push($arrayAD, 'A');
                $a++;
                break;
            case 1:
                array_push($arrayAD, 'B');
                $b++;
                break;
            case 2:
                array_push($arrayAD, 'C');
                $c++;
                break;
            case 3:
                array_push($arrayAD, 'D');
                $d++;
                break;
            
            default:
                echo 'Invalid SWITCH value!';
                break;
        }
    }
    
    echo "A = $a, B = $b, C = $c, D = $d";    

echo '<br>---------------U4------------------<br>';

    sort($arrayAD);
    print_r($arrayAD);

echo '<br>---------------U5------------------<br>';
    function arraysAD(){
        $arrayAD = [];
        $z=0;
        while (@$z++ < 200) {
            switch (rand(0,3)) {
                case 0:
                    array_push($arrayAD, 'A');
                    break;
                case 1:
                    array_push($arrayAD, 'B');
                    break;
                case 2:
                    array_push($arrayAD, 'C');
                    break;
                case 3:
                    array_push($arrayAD, 'D');
                    break;
                default:
                    echo 'Invalid SWITCH value!';
                    break;
            }
        }return $arrayAD;
    }

    $arrayAD1 = arraysAD();
    $arrayAD2 = arraysAD();
    $arrayAD3 = arraysAD();
    $arrayADmerged = [];
    for ($i=0; $i < count($arrayAD1); $i++) { 
        array_push( $arrayADmerged, $arrayAD1[$i].$arrayAD2[$i].$arrayAD3[$i] );
    }
    // print_r($arrayADmerged);

    print_r('Unikalūs elementai: '.count(array_unique( $arrayADmerged)));

echo '<br>---------------U6------------------<br>';

    function arraysNumb(){
        $arrayNumb = [];
        $z=0;
        while (@$z++ < 100) {
            if(!in_array($r = rand(100,999), $arrayNumb)){
                array_push($arrayNumb, $r);
            }
            else $z--;
        }return $arrayNumb;
    }
    $arrayNumb1 = arraysNumb();
    $arrayNumb2 = arraysNumb();

echo '<br>---------------U7------------------<br>';

    $arrayNumb3 = [];
    foreach($arrayNumb1 as $val){
        if(!in_array($val, $arrayNumb2)) array_push($arrayNumb3, $val);
    }
    print_r($arrayNumb3);

echo '<br>---------------U8------------------<br>';

    $arrayNumb4 = [];
    for ($i=0; $i < count($arrayNumb1); $i++) { 
        if (in_array($arrayNumb1[$i], $arrayNumb2))
        array_push($arrayNumb4, $arrayNumb1[$i]);
    }
    print_r($arrayNumb4);

echo '<br>---------------U9------------------<br>';

    $arrayCombined = array_combine($arrayNumb1, $arrayNumb2);
    print_r($arrayCombined);

echo '<br>---------------U10-----------------<br>';

    $arrayFactor =[rand(5,25), rand(5,25)];
        for ($i=2; $i < 10 ; $i++) { 
            array_push($arrayFactor, ($arrayFactor[$i-1] + $arrayFactor[$i-2]));
        }

    print_r($arrayFactor);

echo '<br>---------------U11-----------------<br>';
    $array101 = [];
    while (@$q++ < 101) {
        if(!in_array($r = rand(0,300), $array101)){
            array_push($array101, $r);
        }
        else $q--;
    }
    sort($array101);
 
    $counter++;
    $array101Sorted = [];
    for ($i=0; $i < count($array101); $i+=2) { 
        array_push( $array101Sorted, $array101[$i] );
    }
    $firstPart -= end($array101Sorted);
    for ($i = count($array101)-2; $i > 0; $i-=2) { 
        array_push( $array101Sorted, $array101[$i] );
    }
    print_r($array101Sorted);

    $counter=0;
    $i1=0;
    $i2=count($array101Sorted)-1;
    do{
        $sumFirst = 0;
        $sumSecond = 0;
        $temp = $array101Sorted[$i1];
        $array101Sorted[$i1] = $array101Sorted[$i2];
        $array101Sorted[$i2] = $temp;
        foreach ($array101Sorted as $key => $value) {
            ($key < (count($array101Sorted)-1)/2) ? $sumFirst += $value : ((((count($array101Sorted)-1)/2)=== $key) ? : $sumSecond += $value);
        }
        $i1++;
        $i2--;
        $counter++;
        $difer = abs($sumFirst - $sumSecond);

    }while($difer > 30);


    echo "Pirmos dalies suma: $sumFirst<br>Antros dalies suma: $sumSecond<br>";
    echo "Skirtumas: $difer<br>";
    echo "Ciklas generuotas $counter kartą(-us).";
