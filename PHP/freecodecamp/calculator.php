<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <ul>
        <li><a class="active" href="index.php">Home</a></li>
    </ul>

    <form action="calculator.php" method="get">
        <input type="number" name="num1">
        <br>
        <input type="number" name="num2">
        <input type="submit">
    </form>

    Answer: <?php echo $_GET["num1"] + $_GET["num2"]; ?>
</body>
</html>