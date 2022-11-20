<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="result.php" method="get">
        <label for="price">Car price:</label>
        <select id="price" name="price">
            <option value="high">High</option>
            <option value="med">Medium</option>
            <option value="low">Low</option>
        </select>
        <br>
        <label for="tech">Technology:</label>
        <select id="tech" name="tech">
            <option value="high">High</option>
            <option value="med">Medium</option>
            <option value="low">Low</option>
        </select>
        <br>
        Number of Doors<input type="number" name="doors">
        <br>
        <label for="luggage">Luggage Size:</label>
        <select id="luggage" name="luggage">
            <option value="big">Big</option>
            <option value="med">Medium</option>
            <option value="small">Small</option>
        </select>
        <br>
        <label for="security">Security:</label>
        <select id="security" name="security">
            <option value="high">High</option>
            <option value="med">Medium</option>
            <option value="low">Low</option>
        </select>
        <br>
        <input type="submit">
    </form>
</body>

</html>