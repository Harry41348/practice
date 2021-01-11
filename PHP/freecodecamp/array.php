<?php $title = 'Arrays'; include ("templates/top.php"); ?>

<form action="array.php" method="get">
    Index: <input type="number" name="index">
    <input type="submit" value="Get Item">
</form>

<?php
    $food = array("pizza", "burger", "curry", "chocolate", "ice cream", "ferrero rocher");
    $index = $_GET["index"];
    $food[6] = "pasta";
    echo $food[$index];
?>

</body>
</html>