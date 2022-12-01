<!DOCTYPE html>
<html lang="en">

<head>
    <?php require './navbar.php' ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Home</title>
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <?= $navbar ?>
    <div class="d-flex w-100 banner_background">
        <div class="d-flex justify-content-center col-lg-8">
            <div class="left_banner d-flex flex-column justify-content-center align-items-center">
                <h2 class="judul white">Ev-Car</h2>
                <h4 class="white">Evaluate Car Before Buy</h4>
                <p class="desc white text-center">Ev-Car is a website that is used to determine whether a car is suitable and worth it to buy. We will become system experts for users who want to know whether they are eligible or not eligible to buy a car with certain features and prices.</p>
                <div class="d-flex justify-content-center">
                    <a href="./evaluate.php" class="btn btn-danger">Start Evaluate</a>
                </div>
            </div>
        </div>
        <div class="car_banner col-lg-4 relative">
            <div class="absolute right_banner"></div>
            <img src="../assets/bannercar.jpg" alt="" width="100%">
        </div>   
    </div>

    <div class="section-2 mt-3 w-100" id="our-team">
        <div class="d-flex flex-column align-items-center">
            <h1>Our Team</h1>
            <div class="w-100 row">
                <div class="col-lg-4 d-flex flex-column justify-content-center align-items-center">
                    <img src="../assets/foto.jpg" class="image-team mb-5" alt="">
                    <h3>Feliciano Surya Marcello</h3>
                    <h3>000000 43255</h3>
                </div>
                <div class="col-lg-4 d-flex flex-column justify-content-center align-items-center">
                    <img src="../assets/vj.jpg" class="image-team mb-5" alt="">
                    <h3>Vincent Jonanthan</h3>
                    <h3>000000 47831</h3>
                </div>
                <div class="col-lg-4 d-flex flex-column justify-content-center align-items-center">
                    <img src="../assets/greg.jpg" class="image-team mb-5" alt="">
                    <h3>Gregorius Lai</h3>
                    <h3>000000 45410</h3>
                </div>
            </div>
            <div class="w-100 row d-flex justify-content-center">
            <div class="col-lg-4 d-flex flex-column justify-content-center align-items-center">
                    <img src="../assets/sv.png" class="image-team mb-5" alt="">
                    <h3>Steven Vincent Hendrawan</h3>
                    <h3>000000 43664</h3>
                </div>
                <div class="col-lg-4 d-flex flex-column justify-content-center align-items-center">
                    <img src="../assets/pasha.jpg" class="image-team mb-5" alt="">
                    <h3>Farren Yazid Pasha Anugrah</h3>
                    <h3>000000 44665</h3>
                </div>
            </div>
        </div>
    </div>
    <footer class="w-100 mt-5 d-flex justify-content-center p-3" style="background-color:black">
        <p class="white m-0">Expert System Kelompok 1</p>
    </footer>
</body>

</html>