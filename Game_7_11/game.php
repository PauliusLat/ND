<?php
session_start();

_dc($_SESSION);

$playerName1 = $_SESSION['p1Name'] ?? $_POST['player1'];
$playerName2 = $_SESSION['p2Name'] ?? $_POST['player2'];
$player1Points = $_SESSION['p1points'] ?? 0;
$player2Points = $_SESSION['p2points'] ?? 0;

$_SESSION['p2name'] = $playerName1;
$_SESSION['p1name'] = $playerName2;
$_SESSION['p1points'] = $player1Points;
$_SESSION['p2points'] = $player2Points;


?>
<form action="" method="post">
    <button type="submit">Mesk kauliuka</button>
</form>
<?php

// _dc($_SESSION);



// session_destroy(); 