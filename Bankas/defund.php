<?php
require __DIR__.'/data.php'; 
require __DIR__.'/menu.php';

$user = $data[findByAccount($_GET['acc'])]; 
echo'<br><br><br>';
echo $user['name'].' '.$user['surname'].'<br>';
echo 'Account: '.$user['account'] .'<br>';

if(isset($_POST['defund'])){
    if($_POST['qty']>0 && is_numeric($_POST['qty'])){
        if(($user['balance'] - (float)$_POST['qty']) >0 ){
            $data[findByAccount($_GET['acc'])]['balance'] -= (float)$_POST['qty'];
            file_put_contents(__DIR__.'/data.json', json_encode($data));
            echo 'Nuskaityta sėkmingai: '.$_POST['qty'].' Eur';
        }else echo "Nepakankamas likutis! Suma nenurašyta.";
    }else echo 'Įvyko klaida: suma nenurašyta!(neteisingai perduoti parametrai)';
}
?>  

<form action="" method="post">
    <br>
    Eur:<input type="number" name="qty" >
    <br>
    <button type="submit" name="defund">DEFUND</button>
    <br>
</form> 