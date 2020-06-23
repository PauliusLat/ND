<?php
echo '=== Paulius Latvenas. Week-2. Part-6: Funkcijos. ===<br>';
echo '<br>---------------U1------------------<br>';

    function insertH1($text){
        return "<h1>$text</h1>";
    }
    echo insertH1("Labas.");

echo '<br>---------------U2------------------<br>';

    function insertH1Tag($text, $tag){
        if($tag > 0 && $tag < 9) return "<h$tag>$text</h$tag>";
    }
    echo insertH1Tag("Labas.", 2);

echo '<br>---------------U3------------------<br>';

    function numbersToH1($text){
        $newStr ='';
        foreach (str_split($text) as $value) {
            $newStr .= (is_numeric($value)) ? insertH1($value) : $value;
        }
        return $newStr;
    } 
    _dc( numbersToH1(md5(time())));

echo '<br>---------------U4------------------<br>';

    function getDividableNum($num){
        if (is_int($num) ) {
            $count = 0;
            for ($i=2; $i<$num ; $i++) { 
                if(0 === $num%$i) $count++;
            }
            return $count;
        }
        else return "Invalid type of num!";
    }
    echo getDividableNum(72);

echo '<br>---------------U5------------------<br>';

    function arrayOfnum($qty){
        $arr = [];
        for ($i=0; $i < $qty; $i++) { 
            $arr[] = rand(33,77);
        }
        return $arr;
    }
    function sortByDivisables($arr){
        for ($i=0; $i <count($arr)-1 ; $i++) {
            for ($j=$i+1; $j <count($arr) ; $j++) { 
                if(getDividableNum($arr[$i]) > getDividableNum($arr[$j])) {
                    $temp = $arr[$i];
                    $arr[$i] = $arr[$j];
                    $arr[$j] = $temp;
                }
            }
        }
        return $arr;
    }

    _dc(sortByDivisables(arrayOfnum(100)));

echo '<br>---------------U6------------------<br>';

    function deletePrimaries($arr){
        $newArr = [];
        foreach ($arr as $key => $value) {
            if (getDividableNum($value)!== 0) {
                array_push($newArr, $value);
            }
        }
        return $newArr;
    }    
    
    _dc(deletePrimaries(arrayOfnum(100)));

echo '<br>---------------U7------------------<br>';

    function randArray20($from, $till, $times){
        $arr=[];
        $length = rand($from, $till);
        for ($i=0; $i < $length; $i++) {
            if($i === $length-1 && $times > 0){
                $arr[] = randArray20($from, $till, $times-1);
            }elseif($i === $length-1 && $times ===0 ){
                $arr[]= 0;
            }else $arr[] = rand(0,10);
        }
        return $arr;
    }
    _dc($arr1 = randArray20(10, 20, rand(10,30)));

echo '<br>---------------U8------------------<br>';

    function arrSum($arr){
        static $sum = 0;
        for ($i=0; $i <count($arr); $i++) {
            (is_array($arr[$i])) ? arrSum($arr[$i]) : $sum += $arr[$i];
        }
        return $sum;
    }
    echo arrSum($arr1);

echo '<br>---------------U9------------------<br>';

    function isPirmary($num){
        if($num === 1) return true;
        for ($i=2; $i<$num; $i++) { 
            if(0 === $num%$i) return false;
        }
        return true;
    }
    function renderArrayIfPrimary($primeSize){
        $arr = [];
        for ($i=0; $i<$primeSize; $i++) { 
            $arr[] = rand(1,33);
        }
        for ($i=count($arr)-1; $i >= count($arr)-$primeSize; $i--) { 
            if (isPirmary($arr[$i])) {
                array_push($arr,rand(1,33));
            }
        }
        return $arr;
    }
    
    _dc(renderArrayIfPrimary(2));

echo '<br>---------------U10-----------------<br>';
// parametru perduodamas masyvo gylis

function deepArray($size, $deep){
    $arr = [];
    for ($i=0; $i <$size; $i++) {
        if ($deep > 0) $arr[] = deepArray($size, $deep-1);
        else array_push($arr, rand(1,100));
    }
    return $arr;
}
function findSmallest($arr, $reset = false){
    static $min = 99999999;
    if($reset) $min = 9999999;
    for ($i=0; $i <count($arr); $i++) {
        if(is_array($arr[$i])) findSmallest($arr[$i]);
        elseif($arr[$i]<$min){
            $min = $arr[$i];
        }
    }
    return $min;
}
function replaceSmallest(&$arr, $min){
    for ($i=0; $i <count($arr); $i++) {
        if(is_array($arr[$i])) replaceSmallest($arr[$i], $min);
        elseif($arr[$i]===$min){
            $arr[$i] +=3;
        }
    }
}
function arrayAverageOfPrimaries($arr, $reset=false){
    static $sum = 0;
    static $primarriesCount = 0;
    if($reset) {
        $sum =0;
        $primarriesCount = 0;
    }
    for ($i=0; $i <count($arr); $i++) {
        if(is_array($arr[$i])){
            arrayAverageOfPrimaries($arr[$i]);
        }elseif(isPirmary($arr[$i])){
            $sum += $arr[$i];
            $primarriesCount++;
        }
    }
    return ($primarriesCount > 0) ? $sum/$primarriesCount : 0;
}

$array1 = deepArray(10,3);
$iterCount = 0;
while(arrayAverageOfPrimaries($array1, true) < 70){
    replaceSmallest($array1, findSmallest($array1, true));
    $iterCount++;
    echo "Ciklas sukasi ir didina reikšmes $iterCount kartą.<br>Primytyvų vidurkis po padininimo yra: ".arrayAverageOfPrimaries($array1, true)."<br>";
}


echo '<br>---------------U11-----------------<br>';

