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
    if(count($id)===11){
        $sum=0;
        $last=0;
        for ($i=0, $j=1; $i <count($id)-1; $i++, $j++) {
            $sum+= (($id[$i]+1)*$j);
        }
        $sum+=$id[0];
        $last = $sum%11;
        echo $last;
        echo'<br>';
        echo $sum;
        if($last ==10){
            $sum=0;
            for ($i=0, $j=3; $i <count($id)-3; $i++, $j++) {
                $sum += (($id[$i]+1)*$j);
            }
            $sum+=$id[8];
            $sum+=$id[9];
            $last = $sum%11;
            if($last ==10) $last = 0;
        }
        if($id[10]==$last){
            return true;
        }else return false;
    }
    return false;
}
function checkName($name){
    if(strlen($name) >3) return true;
    return false;
}

?>
    <form action="" method="post">
        <input type="text" name="name" id="name" value="Vardas">Vardas
        <br>
        <input type="text" name="surname" id="surname" value="Pavardė">Pavardė
        <br>
        <!-- <input type="hidden" name="account" id="account" value="Sąsk.Nr.">Sąsk.Nr.
        <br> -->
        <input type="number" name="id" id="id" value="a/k">a/k
        <br>
        <button type="submit" name="newAccount">PRIDĖTI</button>
    </form>