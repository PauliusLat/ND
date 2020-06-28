<?php

$userList = new App\User;
$uriArray = explode('/', str_replace(DIR, '', $_SERVER['REQUEST_URI']));
$userId = (int)$uriArray[1];
$user = $userList->findById($userId);
$userData = $userList->show($user);

echo '<h3>Nuskaityti lėšas:</h3>'.$userData["name"].' '.$userData["surname"].'<br>'.$userData['account'];
if(isset($_POST['defund'])){
    if($_POST['qty']>0 && is_numeric($_POST['qty'])){

        
        if(($userData['balance'] - (float)$_POST['qty']) >-0.001 ){
            $userData['balance'] -= $_POST['qty'];
            $userList->update($user, $userData);
            echo '<br>Likutis: '.$userData["balance"].' Eur';

            echo '<br><br><span style="color:green">Nuskaityta sėkmingai:</span> '.$_POST['qty'].' Eur';
            unset($_POST);
        }else echo '<br><br><span style="color:red">Nepakankamas likutis!</span> Suma nenurašyta.';
    }else echo '<br><br><span style="color:red">Įvyko klaida: suma nenurašyta!</span>(neteisingai perduoti parametrai)';
}
?>  

<form action="" method="post">
    <br>
    <br>
    Eur:<input type="number" name="qty" >
    <br>
    <button type="submit" name="defund">DEFUND</button>
    <br>
</form> 