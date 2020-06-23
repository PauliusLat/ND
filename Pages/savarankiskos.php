<?php
echo '1.)<br><br>';
?>
<form action="" method="get">
X:<input type="number" name="x" value= "<?= $_GET['x'] ?? '' ?>">
Y:<input type="number" name="y" value= "<?php echo $_GET['y'] ?? '' ?>">
<button type="submit" name='one'>Sumuoti</button>
</form>

<?php
if(isset($_GET['x']) && isset($_GET['y'])){
    $sum = 0;
    (int)$sum = (int)($_GET['x']) + (int)($_GET['y']);
    echo "Suma: $sum";
}
_dc($_GET);



