<?php
if(isset($_POST['goRose'])){
    header("Location:/BIT_PHP/ND/Pages/rose.php");
    die();
}
echo '<div style="width:20%; height:20vh; background-color:pink">';
?>

<form action="" method="post">
<button name="goRose">Go to Rose</button>
</form>

<?php
echo '</div>';

