<?php
session_start();

// $data = [
//     ['name' => 'Jonas', 'surname' => 'Jonaitis', 'account' => 'LT070000111122223333', 'id' => '12345678910', 'balance' => 0.00],
//     ['name' => 'Petras', 'surname' => 'Petraitis', 'account' => 'LT070000099999999949', 'id' => '12345678911', 'balance' => 3.40],
//     ['name' => 'Saulius', 'surname' => 'Saulaitis', 'account' => 'LT070034526266246443', 'id' => '12345678912', 'balance' => 0.00],
// ];
// file_put_contents(__DIR__.'/data.json', json_encode($data));

$data = json_decode(file_get_contents(__DIR__.'/data.json'),1);

function findByAccount($acc){
    global $data;
    foreach( $data as $index => $user){
        if($user['account'] === $acc) return $index;
    }
    return -1;
} 
function sortByName($acc){
    global $data;
    $sortedData = [];
    foreach($data as $val){
        if (isset($val)) {
            $sortedData[] = $val;
        }
    }
    for ($i=0; $i <(count($sortedData)-1); $i++) {
        for ($j=$i+1; $j < count($sortedData); $j++) {
            if(strcmp($sortedData[$i]['name'], $sortedData[$j]['name'])>0){
                $temp = $sortedData[$i];
                $sortedData[$i] = $sortedData[$j];
                $sortedData[$j] = $temp;
            }
            
        }
    }
    return $sortedData;
}