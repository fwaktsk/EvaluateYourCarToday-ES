<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <?php include './navbar.php'; ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Evaluate Car</title>
</head>

<body>
    <?php echo $navbar ?>
    <div class="m-3">
        <h1 class="text-center">Evaluate Your To Be Car</h1>
        <div class="d-flex justify-content-center">
            <form class="col-4 m-4 p-3 shadow rounded bg-light" action="result.php" method="get">
                <label class="form-label" for="price">Car price:</label>
                <select class="form-select" id="price" name="price">
                    <option value="high">High</option>
                    <option value="med">Medium</option>
                    <option value="low">Low</option>
                </select>
                <br>
                <label class="form-label" for="tech">Technology:</label>
                <select class="form-select" id="tech" name="tech">
                    <option value="high">High</option>
                    <option value="med">Medium</option>
                    <option value="low">Low</option>
                </select>
                <br>
                <label class="form-label" for="doors">Number of Doors: </label>
                <input class="form-control" type="number" name="doors" placeholder="Number of Doors">
                <br>
                <label class="form-label" for="people">Seat Capacity: </label>
                <input class="form-control" type="number" name="people" placeholder="Seat Capacity">
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