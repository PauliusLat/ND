<?php

// require '/opt/lampp/htdocs/BIT_PHP/ND/Bankas2/app/acCount.json';
$userList = new App\User;
?>
    <h3>New Account:</h3>
<?php

if(isset($_POST['newAccount'])){

    $data = ['name' => $_POST['name'], 'surname' => $_POST['surname'], 'account' => renderAccount(), 'id' => $_POST['id'], 'balance' => 0.00];
    $userList->create($data);
}

function renderAccount(){
    
    $accCounter = json_decode(file_get_contents('/opt/lampp/htdocs/BIT_PHP/ND/Bankas2/app/acCount.json'),1);
    $newAcc = 'LT2300005'.$accCounter;
    $accCounter++;
    file_put_contents('/opt/lampp/htdocs/BIT_PHP/ND/Bankas2/app/acCount.json', json_encode($accCounter));

    return $newAcc;
}



?>
    <form action="" method="post">
        <input type="text" name="name" id="name" value="Vardas"> Vardas
        <br>
        <input type="text" name="surname" id="surname" value="Pavardė"> Pavardė
        <br>
        <input type="text" name="account" id="account" value="LT23 0000 5..." readonly> Sąsk.Nr.
        <br>
        <input type="number" name="id" id="id" value="a/k"> a/k
        <br>
        <button type="submit" name="newAccount">PRIDĖTI</button>
    
    </form>