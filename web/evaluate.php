<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <?php include './navbar.php'; ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <title>Evaluate Car</title>
</head>

<body>

    <?php session_start();
    echo $navbar; 
    ?>
    <?php

    if(isset($_GET['success']) != 'success' && isset($_GET['hasil']) != 'yes'){

    ?>
    <div class="modal fade"  id="myModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="datauser.php" method="POST">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Information About You</h5>
                    </div>
                    <div class="modal-body">
                        <div class="input-group mt-2">
                            <label style="width:20%;" for="name" class="form-label d-flex justify-content-center align-items-center">Name</label>
                            <input type="text" name="name" id="name" class="form-control ms-3" required>
                        </div>
                        
                        <div class="input-group mt-2">
                            <label style="width:20%;" for="money" class="form-label d-flex justify-content-center align-items-center">Your money</label>
                            <input type="number" name="money" id="money" class="form-control ms-3" required>
                        </div>

                        <div class="input-group mt-2">
                            <label style="width:20%;" for="keperluan" class="form-label d-flex justify-content-center align-items-center">Necessity</label>
                            <select name="keperluan" class="form-control ms-3" id="keperluan" required>
                                <option value=""></option>
                                <option value="holiday">Holiday</option>
                                <option value="work">Work</option>
                                <option value="hobby">Hobby</option>
                            </select>
                        </div>

                        <div class="input-group mt-2">
                            <label style="width:20%;" for="holiday" class="form-label d-flex justify-content-center align-items-center">Status</label>
                            <select name="holiday" class="form-control ms-3" id="holiday" required>
                                <option value=""></option>
                                <option value="married">Married</option>
                                <option value="single">Single</option>
                                <option value="dating">Dating</option>
                            </select>
                        </div>

                        <div class="input-group mt-2">
                            <label style="width:20%;" for="job" class="form-label d-flex justify-content-center align-items-center">Job</label>
                            <select name="job" class="form-control ms-3" id="job" required>
                                <option value=""></option>
                                <option value="officer">Officer</option>
                                <option value="driver">Driver</option>
                                <option value="enterpreneur">Enterpreneur</option>
                            </select>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php
    }else if(isset($_GET['hasil'])){
    

    ?>
        <div class="modal fade"  id="myModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="index.php" method="GET">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">RESULT</h5>
                        </div>
                        <div class="modal-body">
                            <p>Hasil desc <?php echo $_SESSION['result'] ?></p>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <?php
        }
        ?>
    <div class="container">
            <h1 class="text-center">Evaluate Your To Be Car</h1>
            <div class="d-flex justify-content-center">
                <form class="col-4 m-4 p-3 shadow rounded bg-light" action="evaluate_result.php" method="POST">
                    <input type="hidden" value="<?php echo $_SESSION['name'] ?>" name="name">
                    <input type="hidden" value="<?php echo $_SESSION['money'] ?>" name="money">
                    <input type="hidden" value="<?php echo $_SESSION['keperluan'] ?>" name="keperluan">
                    <input type="hidden" value="<?php echo $_SESSION['holiday'] ?>" name="status">
                    <input type="hidden" value="<?php echo $_SESSION['job'] ?>" name="job">
            
                    <label class="form-label" for="price">Car price:</label>
                    <input type="number" name="price" id="price" class="form-control" required>
                    <br>
                    <label class="form-label" for="tech">Technology:</label>
                    <select class="form-select" id="tech" name="tech">
                        <option value="vhigh">Very High</option>
                        <option value="high">High</option>
                        <option value="med">Medium</option>
                        <option value="low">Low</option>
                        <option value="vlow">Very sLow</option>
                    </select>
                    <br>
                    <label class="form-label" for="doors">Number of Doors: </label>
                    <input class="form-control" type="number" name="doors" placeholder="Number of Doors" required>
                    <br>
                    <label class="form-label" for="people">Seat Capacity: </label>
                    <input class="form-control" type="number" name="people" placeholder="Seat Capacity" required>
                    <br>
                    <label class="form-label" for="luggage">Luggage Size:</label>
                    <select class="form-select" id="luggage" name="luggage">
                        <option value="big">Big</option>
                        <option value="med">Medium</option>
                        <option value="small">Small</option>
                    </select>
                    <br>
                    <label class="form-label" for="security">Security:</label>
                    <select class="form-select" id="security" name="security">
                        <option value="high">High</option>
                        <option value="med">Medium</option>
                        <option value="low">Low</option>
                    </select>
                    <br>
                    <input class="btn btn-primary" type="submit">
                </form>
            </div>
    </div>
</body>
</html>

<script>
    $(window).on('load', function() {
        $('#myModal').modal('show');
    });
</script>