<?php
echo '=== Paulius Latvenas. Week-2. Part-7: WEB mechanika. ===<br>';
echo '<br>---------------U1------------------<br>';

    $colorBg = 'black';
    if(!empty($_GET)){
        if ($_GET['color']==='1') $colorBg = 'red';
    }
    $link1 = '<a href="/BIT_PHP/ND/paulius_latvenas_7.php"> First Link </a>';
    $link2 = '<a href="/BIT_PHP/ND/paulius_latvenas_7.php?color=1&page=2"> Second Link </a>';

    echo "<div style=\"width:20%; height:20vh; background-color:$colorBg\">$link1 <br>$link2</div>";
    unset($colorBg);

echo '<br>---------------U2------------------<br>';

    $colorBg1 = 'grey';
    if(!empty($_GET)){
        if ($_GET['color'] !=='1') {
            $colorBg1 = $_GET['color'];
        }
    }
    $link1 = '<a href="/BIT_PHP/ND/paulius_latvenas_7.php"> First Link </a>';

    echo "<div style=\"width:20%; height:20vh; background-color:$colorBg1\">$link1</div>";

echo '<br>---------------U3------------------<br>';

    $colorBg1 = 'grey';

        if(!empty($_GET)){
            if ($_GET['color'] !=='1') {
                $colorBg1 = $_GET['color'];
            }
        }
        ?>
        <form action="" method="get">
        Color:<input type="text" name="color" id="">
        <button type="submit">Send</button>
        </form>

        <?php
        $link1 = '<a href="/BIT_PHP/ND/paulius_latvenas_7.php"> First Link </a>';
        echo "<div style=\"width:20%; height:20vh; background-color:$colorBg1\">$link1</div>";



echo '<br>---------------U4------------------<br>';

        echo 'Peradresavimo kodas lemon.php uzkomentuotas...<br>ji atkomentavus peradresavimas veikia.<br>';
        include(__DIR__.'/Pages/lemon.php');
        include(__DIR__.'/Pages/orange.php');


echo '<br>---------------U5------------------<br>';

    include(__DIR__.'/Pages/red.php');
    include(__DIR__.'/Pages/blue.php');
        
echo '<br>---------------U6------------------<br>';

    $colorBg2 ='';

    if(isset($_POST['post1']) && empty($_POST['post1'])){
        $colorBg2 = 'green';

    }
    elseif(isset($_GET['get1']) && empty($_GET['get1'])){
        $colorBg2 = 'yellow';
    }

    echo "<div style=\"width:20%; height:20vh; background-color:$colorBg2\">";
    ?>
        <form action="" method="get">
        <button name = 'get1'>GET</button>
        </form>
        <form action="" method="post">
        <button name="post1">POST</button>
        </form>
    <?php
    echo '</div>';
    unset($colorBg2);

echo '<br>---------------U7------------------<br>';


    $colorBg2 ='';

    if(isset($_POST['post2']) && empty($_POST['post2'])){
        $colorBg2 = 'green';
        header("Location:/BIT_PHP/ND/paulius_latvenas_7.php");
        die();
    }
    elseif(isset($_GET['get2']) && empty($_GET['get2'])){
        $colorBg2 = 'yellow';
    }

    echo "<div style=\"width:20%; height:20vh; background-color:$colorBg2\">";
    ?>
        <form action="" method="get">
        <button name = 'get2'>GET</button>
        </form>
        <form action="" method="post">
        <button name="post2">POST</button>
        </form>
    <?php
    echo '</div>';
    unset($colorBg2);

echo '<br>---------------U8------------------<br>';
        echo 'Peradresavimo kodas rose.php uzkomentuotas...<br>ji atkomentavus peradresavimas veikia.<br>';

        include(__DIR__.'/Pages/pink.php');
        include(__DIR__.'/Pages/rose.php');

echo '<br>---------------U9------------------<br>';

$values = 'ABCDEFGHIJKL';
$checkboxes = '<br>';
for ($i=0; $i <rand(3,10); $i++) {
    $key = substr($values, $i, 1);
    $checkboxes .= "$key<input type=\"checkbox\" name=\"$key\" id=\"$key\"><br>";
}
$checkboxes .='<button name="pushed">PUSH</button>';
$colorBg = 'black';
$checked = '';
    if(!empty($_POST)){
        if (isset($_POST['pushed'])) {
            $colorBg = 'white';
            $checkboxes = '';
            $checked = '<br><br><br>Paspausti<span style="font-size:30px"> '.(count($_POST)-1).' </span>boxai';
        }
    }
 

    echo "<div style=\"width:20%; height:30vh; color:red; text-align:center; background-color: $colorBg\">";
    echo $checked;
    ?>
    <form action="" method="post">
    <?= $checkboxes ?>
    </form>

    <?php

    echo '</div>';

echo '<br>---------------U10-----------------<br>';

    $values = 'ABCDEFGHIJKL';
    $checkboxes1 = '<br>';
    for ($j=0; $j <rand(3,10); $j++) {
        $key1 = substr($values, $j, 1);
        $checkboxes1 .= "$key1<input type=\"checkbox\" name=\"$key1\" value=\"$key1\"><br>";
    }
    $checkboxes1 .='<button name="pushed1" value="'.$j.'">PUSH</button>';
    $colorBg4 = 'black';
    $checked1 = '';
        if (isset($_POST['pushed1'])) {
            $colorBg4 = 'white';
            $checkboxes1 = '';
            $checked1 = '<br><br><br>Paspausta: <span style="font-size:30px"> '.(count($_POST)-1).'</span>,<br>sugeneruota: <span style="font-size:30px"> '.$_POST['pushed1'].' </span>';
        }

        echo "<div style=\"width:20%; height:30vh; color:red; text-align:center; background-color: $colorBg4\">";
        echo $checked1;
        ?>
        <form action="" method="post">
        <?= $checkboxes1 ?>
        </form>

        <?php

        echo '</div>';
        
echo '<br>---------------U11-----------------<br>';


    