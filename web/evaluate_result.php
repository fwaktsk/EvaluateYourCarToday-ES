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
    $priceString = "Your low pricing scored 20 points. It's full marks for you.";
}else if($priceStatus == 'low'){
    $priceValue = 0.15;
    $priceString = "Your car pricing scored 15 points, a p nice price.";
}else if($priceStatus == 'med'){
    $priceValue = 0.10;
}else if($priceStatus == 'high'){
    $priceValue = 0.05;
}else if($priceStatus == 'vhigh'){
    $priceValue = 0;
    $priceString = "The car is expensive for you, not sure why you considered it. Hence it gets 0 points";
}

$_SESSION['priceValue'] = $priceValue;

if($tech == 'vhigh'){
    $techValue = 0.15;
    $techString = "You believe the car is high tech, then let's believe your judgement on this with 15 points";
}else if($tech == 'high'){
    $techValue = 0.12;
}else if($tech == 'med'){
    $techValue = 0.08;
}else if($tech == 'low'){
    $techValue = 0.04;
}else{
    $techValue = 0;
    $techString = "Since it's a low tech car, the technology drops the judgement process, so 0 points";
}

$_SESSION['techValue'] = $techValue;


if($doors <= 3){
    if($keperluan == 'hobby'){
        $doorValue = 0.10;
        $doorString = "You don't have that many doors, but it's sufficient for you so you still get fully 10 points";
    }else if($status == 'single'){
        $doorValue = 0.07;
    }else{
        $doorValue = 0.05;
        $doorString = "The lack of doors won't be convinient for you, consider getting more";
    }
}else if($doors >= 4){
    $doorValue = 0.10;
    $doorString = "You have more than sufficient doors for everyone. a whole 10 points";
}

$_SESSION['doorValue'] = $doorValue;

if($people < 4){
    if($keperluan == 'hobby'){
        $peopleValue = 0.20;
        $peopleString = "You're just keeping the car as a hobby, so people capacity may not be worrying hence it's 20 points";
    }else if($status == 'single' || $status == 'dating'){
        $peopleValue = 0.18;
        $peopleString = "You're only bringing yourself and one more at most. I think you can settle with that. 18 points";
    }else if($job == 'driver'){
        $peopleValue = 0.05;
        $peopleString = "You're a driver but you are considering a non-carrying car? You definitely should reconsider, 5 points";
    }else{
        $peopleValue = 0.10;
    }
}else if($people >= 4){
    $peopleValue = 0.20;
    $peopleString = "I believe that's enough for you and your family and peers' necessities. 20 points for the car";
}

$_SESSION['peopleValue'] = $peopleValue;

if($luggage == 'big'){
    $luggageValue = 0.15;
    $luggageString = "Big luggage will always be nice, 15 points";
}else if($luggage == 'med'){
    $luggageValue = 0.10;
    $luggageString = "Medium sized luggage may be less comfy but it can carry some stuffs at least, 10 points";
}else{
    if($keperluan == 'hobby'){
        $luggageValue = 0.10;
    }else{
        $luggageValue = 0.05;
        $luggageString = "Honestly? Getting a motorcycle is cheaper and easier than a low luggage car, 5 points";
    }
}

$_SESSION['luggageValue'] = $luggageValue;

if($security == 'high'){
    $securityValue = 0.20;
    $securityString = "Security is the best policy, try to keep wary still but your car gets the full mark pass of 20";
}else if($security == 'med'){
    $securityValue = 0.10;
}else{
    $securityValue = 0;
    $securityString = "Are you sure you can compromise your security? That's risky. 0 points";
}

$_SESSION['securityValue'] = $securityValue;

echo $priceValue . ' ' . $doorValue . ' ' .$techValue .' '. $peopleValue .' ' . $luggageValue . ' ' . $securityValue;

$totalAll = $priceValue + $doorValue + $techValue + $peopleValue + $luggageValue + $securityValue;

if($totalAll < 0.21){
    $result = 'unacc<br />The car has low quality and moreover the high price. You may as well look for another';
}else if($totalAll < 0.41){
    $result = 'acc';
}else if($totalAll < 0.61){
    $result = 'ok';
}else if($totalAll < 0.81){
    $result = 'good';
}else {
    $result = "vgood<br />The car seems like a wonderful deal with it being affordable to you and nice quality. Go get it if you're wanting to!";
}

// $techValue
// $doorValue
// $peopleValue
// $luggageValue
// $securityValue

echo $result . ' ' . $totalAll;

$_SESSION['result'] = $result;

header("location:evaluate.php?hasil=yes");

?>