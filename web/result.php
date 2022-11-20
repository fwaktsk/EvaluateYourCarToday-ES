<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
     $price = $_GET['price'];
     $tech = $_GET['tech'];
     $doors = $_GET['doors'];
     $luggage = $_GET['luggage'];
     $security = $_GET['security'];
     echo $price, $tech, $doors, $luggage, $security; ?>
</body>

</html>