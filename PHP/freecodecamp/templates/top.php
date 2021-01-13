<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php

        $name = "Harry";
        $animal = "monkey";

        echo "<h1>$name's Webpage</h1>";
    ?>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="calculator.php">Calculator</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="array.php">Arrays</a></li>
        <li><a href="checkbox.php">Checkbox</a></li>
        <li><a href="associative_arrays.php">Associative Arrays</a></li>
        <li><a href="function.php">Function</a></li>
    </ul>