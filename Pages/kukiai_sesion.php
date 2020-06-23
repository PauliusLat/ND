<?php

session_start();
$x = $_SESSION['x'] ?? 5;
$x++;
echo $x;
$_SESSION['x'] = $x;
$_SESSION['karve'] = 'pienas'.$x;
session_destroy();

