<?php
if(isset($_GET['link'])){
    if($_GET['link'] == 'red'){
        header("Location: /BIT_PHP/ND/Pages/red.php");
        die();
    }
}
echo '<div style="width:20%; height:20vh; background-color:aquamarine">';
echo '<a href="/BIT_PHP/ND/Pages/blue.php?link=red">Linkas i save</a>';
echo'</div>';


