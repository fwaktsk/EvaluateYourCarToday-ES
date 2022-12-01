<?php

session_start();

$name = $_POST['name'];
$money = $_POST['money'];
$keperluan = $_POST['keperluan'];
$status = $_POST['status'];
$job = $_POST['job'];
$price = $_POST['price'];
$tech = $_POST['tech'];
$doors = $_POST['doors'];
$people = $_POST['people'];
$luggage = $_POST['luggage'];
$security = $_POST['security'];

$PriceValue = 0;
$techValue = 0;
$doorValue = 0;
$peopleValue = 0;
$luggageValue = 0;
$securityValue = 0;
$totalAll = 0;

$priceStatus = "";

$priceFinal = $price / $money;

if($priceFinal < 0.21){
    $priceStatus = 'vlow';
}else if($priceFinal < 0.41){
    $priceStatus = 'low';
}else if($priceFinal < 0.61){
    $priceStatus = 'med';
}else if($priceFinal < 0.81){
    $priceStatus = 'high';
}else {
    $priceStatus = 'vhigh';
}

if($priceStatus == 'vlow'){
    $priceValue = 0.20;
}else if($priceStatus = 'low'){
    $priceValue = 0.15;
}else if($priceStatus = 'med'){
    $priceValue = 0.10;
}else if($priceStatus = 'high'){
    if($keperluan == 'hobby'){
        $priceValue = 0.16;
    }else{
        $priceValue = 0.05;
    }
}else if($priceStatus = 'vhigh'){
    if($keperluan == 'hobby'){
        $priceValue = 0.12;
    }else{
        $priceValue = 0;
    }
}

$_SESSION['priceValue'] = $priceValue;

if($tech = 'vhigh'){
    $techValue = 0.15;
}else if($tech = 'high'){
    $techValue = 0.12;
}else if($tech = 'med'){
    $techValue = 0.08;
}else if($tech = 'low'){
    $techValue = 0.04;
}else{
    $techValue = 0;
}

$_SESSION['techValue'] = $techValue;


if($doors <= 3){
    if($keperluan == 'hobby'){
        $doorValue = 0.10;
    }else if($status == 'single'){
        $doorValue = 0.07;
    }else{
        $doorValue = 0.05;
    }
}else if($doors >= 4){
    $doorValue = 0.10;
}

$_SESSION['doorValue'] = $doorValue;

if($people < 4){
    if($keperluan == 'hobby'){
        $peopleValue = 0.20;
    }else if($status == 'single' || $status == 'dating'){
        $peopleValue = 0.18;
    }else if($job == 'driver'){
        $peopleValue = 0.05;
    }else{
        $peopleValue = 0.10;
    }
}else if($people >= 4){
    $peopleValue = 0.20;
}

$_SESSION['peopleValue'] = $peopleValue;

if($luggage == 'big'){
    $luggageValue = 0.15;
}else if($luggage == 'med'){
    $luggageValue = 0.10;
}else{
    if($keperluan == 'hobby'){
        $luggageValue = 0.10;
    }else{
        $luggageValue = 0.05;
    }
}

$_SESSION['luggageValue'] = $luggageValue;

if($security == 'high'){
    $securityValue = 0.20;
}else if($security == 'med'){
    $securityValue = 0.10;
}else{
    $securityValue = 0;
}

$_SESSION['securityValue'] = $securityValue;

echo $priceValue . ' ' . $doorValue . ' ' .$techValue .' '. $peopleValue .' ' . $luggageValue . ' ' . $securityValue;

$totalAll = $priceValue + $doorValue + $techValue + $peopleValue + $luggageValue + $securityValue;

if($totalAll < 0.21){
    $result = 'unacc';
}else if($totalAll < 0.41){
    $result = 'acc';
}else if($totalAll < 0.61){
    $result = 'ok';
}else if($totalAll < 0.81){
    $result = 'good';
}else {
    $result = "vgood";
}

echo $result . ' ' . $totalAll;

$_SESSION['result'] = $result;

header("location:evaluate.php?hasil=yes");

?>