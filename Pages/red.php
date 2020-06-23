<?php

if(isset($_GET['link'])){
    if($_GET['link'] == 'blue'){
        header("Location: /BIT_PHP/ND/Pages/blue.php");
        die();
    }
}

echo '<div style="width:20%; height:20vh; background-color:red">';
echo '<a href="/BIT_PHP/ND/Pages/red.php?link=blue">Linkas i save</a>';
echo'</div>';   