<?php

$listUser = new App\User;
if(isset($_GET['deleteAccount'])){

  $listUser->delete((int)$_GET['deleteAccount']);
} 

$listUsers = [];
if(isset($_POST['buttonSearch'])){
  $listUsers = $listUser->search($_POST['search']);
}else{
  $listUsers = $listUser->showAll();
}

?>
  <form action="" method="post">
  <input type="search" name="search" id="">
  <button type="submit" name="buttonSearch">Search</button>
  </form>
  <?php

  $accountData = '';
  foreach($listUsers as $index => $user){
      $accountData .= 
      '<tr style="background-color:#eee;">
          <td>'.$user['name'].'</td>
          <td>'.$user['surname'].'</td> 
          <td>'.implode(' ', str_split($user['account'], 4)).'</td>
          <td>'.$user['id'].'</td>
          <td>'.money_format("%i", (float)$user['balance']).'</td>
          <td><form action="" method="get">
              <a style="color:unset; color:#444; font-size:12px", href="http://localhost:8080/BIT_PHP/ND/Bankas2/public/add-funds/'.$user['id'].'/"> ADD FUNDS</a><span style="color:#eee" > | | </span>
              <a style="color:unset; color:#444; font-size:12px", href="http://localhost:8080/BIT_PHP/ND/Bankas2/public/defund/'.$user['id'].'/"> DEFUND</a><span style="color:#eee" > | | </span>
              <button name="deleteAccount" value="'.$user['id'].'">Delete Account</button>
          </form></td>
        </tr>';
  }
  echo 
  '<div style="width:100%; padding:30px 0">
  <table style="width:99%">
  <tr style="text-align:left">
    <th>Firstname</td>
    <th>Lastname</td> 
    <th>Account</td>
    <th>ID</td>
    <th>Ballance</td>
    </tr>
    '.$accountData.'</div>';
