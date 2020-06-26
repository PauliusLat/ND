<?php
require __DIR__.'/data.php'; 
require __DIR__.'/menu.php';

if(isset($_POST['newAccount'])){
    if(checkID($_POST['id'])){
        if(checkName($_POST['name']) && checkName($_POST['surname'])){
            $data[] = ['name' => $_POST['name'], 'surname' => $_POST['surname'], 'account' => renderAccount(), 'id' => $_POST['id'], 'balance' => 0.00];
            file_put_contents(__DIR__.'/data.json', json_encode($data));
            echo '<br>Sąskaita sėkmingai sukurta!<br><br>';
        }else echo '<br><span style="color:red">Sąskaita nesukurta! </span>Patikslinkite vardą/pavardę.<br><br>';
    }else echo '<br><span style="color:red">Sąskaita nesukurta! </span>Patikslinkite asmens kodą.<br><br>';
}

function renderAccount(){
    
    $accCounter = json_decode(file_get_contents(__DIR__.'/acCount.json'),1);
    $newAcc = 'LT2300005'.$accCounter;
    $accCounter++;
    file_put_contents(__DIR__.'/acCount.json', json_encode($accCounter));

    return $newAcc;
}

function checkID($id1){
    $id = str_split($id1);
    $idNumber = array_map(
        function($value) { return (int)$value; },
        $id
    );
    if(isIdUniq($_POST['id'])){

        if(count($idNumber)===11 && $idNumber[0]<7 && $idNumber[0]>0 && $idNumber[3]<2 && $idNumber[4]<3 && $idNumber[5]<4){
            $sum=0;
            $last=0;
            for ($i=0, $j=1; $i <count($idNumber)-2; $i++, $j++) {
                $sum+= (($idNumber[$i])*$j);
            }
            $sum+=$idNumber[9];
            $last = $sum%11;
            echo $last;
            echo'<br>';
            if($last ==10){
                $sum=0;
                for ($i=0, $j=3; $i <count($idNumber)-3; $i++, $j++) {
                    $sum += (($idNumber[$i])*$j);
                }
                $sum+=$idNumber[7];
                $sum+=$idNumber[8];
                $sum+=$idNumber[9];
                $last = $sum%11;
                if($last ==10) $last = 0;
            }
            if($idNumber[10]==$last){
                return true;
            }else return false;
        }
    }
        return false;
}
function checkName($name){
    if(strlen($name) >3) return true;
    return false;
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