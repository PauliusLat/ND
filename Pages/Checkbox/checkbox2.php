<?php

if($_SERVER['REQUEST_METHOD']=='POST'){

    $inputData = file_get_contents("php://input"); //php input stream
    $inputData = json_decode($inputData, 1);
    if($inputData['answer'] == 111){
        $response = 'Pasirink varianta';
    }else{
        $response = ($inputData['answer'] == 1) ? '<span style="color:green">Teisingai' : 'Neteisingai';
    }
    $response = json_encode(['atsakymas' => $response]);
    echo $response;
die();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.js" defer></script>
    <script src="/BIT_PHP/ND/Pages/Checkbox/checkbox.js" defer></script>
    
    <title>Checkbox testas</title>
</head>
<body>
<h2 id="top">Pradekite testa</h2>
<div style="width:60%; height:40vh; margin:10px;">
    <div style="display:inline-block; width:49%; text-align:center">
        <img src="./str.png">
    </div>
    <div style="display:inline-block; width:49%">
        <form action="" method="get">
        <input type="radio" name="elnias" id="a" value = "1"><label for="a">STRING'as</label>
        <br>
        <br>
        <input type="radio" name="elnias" id="b" value = "2"><label for="b">Suo</label>
        <br>
        <br>
        <input type="radio" name="elnias" id="c" value = "3"><label for="c">Katinas</label>
        <br>
        <br>
        <input type="radio" name="elnias" id="d" value = "4"><label for="d">Ezys</label>
        <br>
        <br>
        <input type="radio" name="elnias" id="e" value = "5"><label for="e">Briedis</label>
        <br>
        <br>
        <button type="button" name="button" id="button2" value="pressed">Speti</button>
        </form>
    </div>
</div>

</body>
</html>