<?php

require __DIR__.'/bootsrap.php';

if(!empty($_POST)){
    foreach($data as $user){
        if($user['name'] === $_POST['name'] && $user['pasword'] === md5($_POST['pasword'])){
            $_SESSION['login'] =1;
            header('Location:/BIT_PHP/ND/Pages/LogIn/locked.php');
            die();
        }
    }
}

// if(isset($_GET['logout'])){
//     session_destroy();
//     header('Location:/BIT_PHP/ND/Pages/LogIn/login.php');
//     die();
// }

?>

<form action="" method="post">
User name:<input type="text" name="name" id=""><br>
Password: <input type="password" name="pasword" id=""><br>
<button type="submit">Jungtis</button>
</form>