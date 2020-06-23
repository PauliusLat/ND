<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game</title>
</head>
<body>
    
<div style="padding:100px">
<form action="http://localhost:8080/BIT_PHP/ND/Game_7_11/game.php" method="post">
Player1 Name:<input type="text" name="player1" value="Player1" >
<br>
Player2 Name:<input type="text" name="player2" value="Player2">
<br>
<button type="submit" name="sign">Let's Play</button>
</form>
<?= _dc($_POST); ?>
</div>
</body>
</html>