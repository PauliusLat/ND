<?php
echo '=== Paulius Latvenas. Week-1. Part-2: Stringai. ===<br>';
echo '<br>---------------U1------------------<br>';

    $role1 = 'Johnąčų Travolta';
    $role2 = 'Quentin Tarantino';
    $shortStr = (mb_strlen($role1) <= mb_strlen($role2)) ? $role1 : $role2;
    echo "Iš vardų: $role1, $role2 trumpesnis yra: $shortStr.";

echo '<br>---------------U2------------------<br>';

    $role1 = 'John Travolta';
    $role2 = 'Quentin Tarantino';
    $arrayR1 = explode(" ", $role1);
    strtoupper($arrayR1[0]);
    $arrayR2 = explode(" ", $role2);
    strtoupper($arrayR2[0]);
    echo strtoupper($arrayR1[0]), ' ', strtolower($arrayR1[1]);
    echo '<br>';
    echo strtoupper($arrayR2[0]), ' ', strtolower($arrayR2[1]);
    
echo '<br>---------------U3------------------<br>';
    
    $role1 = 'John Travolta';
    $arrayR1 = explode(" ", $role1);
    $role3 = (substr($role1, 0, 1)) . (substr($arrayR1[1], 0, 1));
    echo($role3);

echo '<br>---------------U4------------------<br>';

    $role1 = 'John Travolta';
    $arrayR1 = explode(" ", $role1);
    $role3 = (substr($arrayR1[0], -3)) . (substr($arrayR1[1], -3));
    echo($role3);

echo '<br>---------------U5------------------<br>';

    $str = 'An American in Paris';
    $changedStr = str_ireplace('a', '*', $str);
    echo $changedStr;

echo '<br>---------------U6------------------<br>';

    $str = 'An American in Paris';
    $array = explode('a', strtolower($str));
    echo '"' . $str . '"' . " yra " . (count($array) - 1) . " A(a) raidės.";

echo '<br>---------------U7------------------<br>';

    $str1 = 'An American in Paris';
    $str2 = "Breakfast at Tiffany's";
    $str3 = '2001: A Space Odyssey';
    $str4 = "It's a Wonderful Life";
    $arrVowels = array('a', 'i', 'o', 'u', 'e');
    foreach ($arrVowels as $key => $value) {
        $str1 = str_ireplace($value, "", $str1);
        $str2 = str_ireplace($value, "", $str2);
        $str3 = str_ireplace($value, "", $str3);
        $str4 = str_ireplace($value, "", $str4);
    }
    echo "$str1<br>$str2<br>$str3<br>$str4<br>";

echo '<br>---------------U8------------------<br>';

    $str = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
    $episodeNr = preg_replace("/[^0-9]/", '', $str);
    echo "$str<br>Epizodo numeris yra: $episodeNr";

echo '<br>---------------U9------------------<br>';

    $str1 = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
    $str2 = 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale';
    $arrStr1 = explode(' ', $str1);
    $arrStr2 = explode(' ', $str2);
    $count1 = 0;
    $count2 = 0;
    foreach ($arrStr1 as $key => $value) {
        if(mb_strlen($value) >= 5) $count1++;
    }
    foreach ($arrStr2 as $key => $value) {
        if(mb_strlen($value) >= 5) $count2++;
    }
    echo "'$str1' - yra $count1 žodžiai ilgesni nei 4 simboliai.<br>";
    echo "'$str2' - yra $count2 žodžiai ilgesni nei 4 simboliai.";

echo '<br>---------------U10-----------------<br>';

    $data = 'abcdefghijklmnopqrstuvwxyz';
    echo substr(str_shuffle($data), 0, 3);

echo '<br>---------------U11-----------------<br>';

    $str = $str1 .' '. $str2;
    $arrData = explode(' ', $str);
    shuffle($arrData);
    $arr10 = array_slice($arrData, 0, 10);
    echo implode(" ", $arr10);


    // $newStr = "";
    // for ($i=0; $i < 10; $i++) { 
    //     $newStr = $newStr ." ". $arrData[$i];
    // }
    // echo $newStr;
 
