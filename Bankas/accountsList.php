<?php
require __DIR__.'/data.php'; 
require __DIR__.'/menu.php'; 

if(isset($_GET['deleteAccount'])){
  $userd = $data[findByAccount($_GET['deleteAccount'])];
  if($userd['balance']<0.0001){
    unset( $data[findByAccount($_GET['deleteAccount'])] );
    file_put_contents(__DIR__.'/data.json', json_encode($data));
    header('Location: http://localhost:8080/BIT_PHP/ND/Bankas/accountsList.php');
  }else{
    echo 'Negalima ištrinti sąskaitos! Sąskaitoje yra lėšų! <br>';
    // header('Location: http://localhost:8080/BIT_PHP/ND/Bankas/accountsList.php');
  } 

}

$accountData = '';
$sortedData = sortByName($data);
foreach($sortedData as $user){
  $accountData .= 
  '<tr style="background-color:#eeee">
      <td>'.$user['name'].'</td>
      <td>'.$user['surname'].'</td> 
      <td>'.implode(' ', str_split($user['account'], 4)).'</td>
      <td>'.$user['id'].'</td>
      <td>'.money_format("%i", (float)$user['balance']).'</td>
      <td><form action="" method="get">
          <a style="font-size:12px", href="http://localhost:8080/BIT_PHP/ND/Bankas/refund.php?acc='.$user['account'].'"> REFUND </a><span>  /  </span>
          <a style="font-size:12px", href="http://localhost:8080/BIT_PHP/ND/Bankas/defund.php?acc='.$user['account'].'"> DEFUND </a><span>  /  </span>
          <button name="deleteAccount" value="'.$user['account'].'">Delete Account</button>
      </form></td>
    </tr>';
}


echo '<table style="width:80%">
<tr>
  <th>Firstname</td>
  <th>Lastname</td> 
  <th>Account</td>
  <th>ID</td>
  <th>Ballance</td>
  </tr>
  '.$accountData;



