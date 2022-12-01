<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <?php require "./navbar.php" ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Result</title>
</head>

<body style="background: url(../assets/homecar.jpg); background-repeat: repeat; background-size: 15%;">
    <?php echo $navbar ?>
    <div class="m-4 p-3 shadow rounded bg-light">
        <div class="m-3">
        <?php
        $price = $_GET['price'];
        $tech = $_GET['tech'];
        if($_GET['doors'] > 4)
        {
            $doors = '5more';
        }
        else {
            $doors = $_GET['doors'];
        }
        if($_GET['people']>4)
        {
            $seats = 'more';
        }
        else
        {
            $seats = $_GET['people'];
        }
        $luggage = $_GET['luggage'];
        $security = $_GET['security'];
        //  echo $price, $tech, $doors, $luggage, $security;
        
        $host = "localhost";
        $uname = "root";
        $dbname = "UAS_expert";
        $password = "";

        $db_connect = new mysqli($host, $uname, $password, $dbname);
        $query = "SELECT result from car_attributes WHERE price = '$price' AND tech = '$tech' AND luggage = '$luggage' AND security = '$security'";
        $result = $db_connect->query($query);

        if($result->fetch_assoc()['result'] == 'unacc')
        {
            echo "<p>It seems like your car of choice is <strong>unacceptably not worth it</strong>.
                    We recommend not getting the car if you're just still planning to at all costs.</p>";
        }
        else if($result->fetch_assoc()['result'] == 'acc')
        {
            echo "<p>We think your future car is <strong>acceptable, but not that worth it</strong>.
                    We recommend to look for alternatives if you're just still planning to.
                    However if everything falls short, it's still okay to go for.</p>";
        }
        else if($result->fetch_assoc()['result'] == 'good')
        {
            echo "<p>Your future car is <strong>pretty worth it</strong>.
                    We think this car seems good enough for you if you like it.</p>";
        }
        else if($result->fetch_assoc()['result'] == 'vgood')
        {
            echo "<p>No need to worry, your option is <strong>immaculate</strong>!
                    It's a very good deal that if you have the funds to go, we'd urge you to get it immediately</p>";
        }
        //objectivity certainty factor for MCDM, in the scale of 0 to 1 instead of -1 to 1
        //price: maybe not, people who lack money will likely see things as expensive and people who have more will likely to see things as cheap (0.25)
        //tech: probably, even people who are less versed with technology won't be so amused if a car isn't much of an upgrade to older (0.75)
        //luggage size: almost certainly, people has a general standard on what's big (0.9)
        //security: maybe, people may just gobble up what the manufacturers think

        //
        //Ini kayaknya certainty factor + mcdm + bayes lol, ku ngerasa kayak ngacak2 algoritma

        //unacc = 1210
        //unacc>vhigh = 

        switch ($result->fetch_assoc()['result']) {
            case 'unacc':
                if($price == 'vhigh')
                {
                    $pricecf = 0.25;
                }
                else if($price == 'high')
                {
                    $pricecf = 0.25;
                }
                break;
            
            case 'acc':
                # code...
                break;

            case 'good':
                # code...
                break;
            
            case 'vgood':
                # code...
                break;
        }
        ?>
        </div>
    </div>
</body>

</html>