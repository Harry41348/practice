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
        echo "<hr>";
    ?>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="calculator.php">Calculator</a></li>
    </ul>