<?php

if(isset($_GET['elnias'])){
    if($_GET['elnias'] == 1){
        $result = 'Teisingai<br>';
    }else $result = 'Neteisingai<br>';
}else $result = 'Pradekite testa!<br>';

_dc($_GET);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2><?php echo $result ?></h2>
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
        <button type="submit" name="button">Speti</button>
        </form>
    </div>
</div>

</body>
</html>


