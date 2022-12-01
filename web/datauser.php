<?php

session_start();

$name = $_POST['name'];
$money = $_POST['money'];
$keperluan = $_POST['keperluan'];
$holiday = $_POST['holiday'];
$job = $_POST['job'];

$_SESSION['name'] = $name;
$_SESSION['money'] = $money;
$_SESSION['keperluan'] = $keperluan;
$_SESSION['holiday'] = $holiday;
$_SESSION['job'] = $job;

header("location:evaluate.php?success=success");

?>