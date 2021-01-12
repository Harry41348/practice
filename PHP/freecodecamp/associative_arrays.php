<?php $title = 'Associative Arrays'; include ("templates/top.php"); ?>

<form action="associative_arrays.php" method="post">
    <input type="text" name="student">
    <input type="submit" value="Get Grade">
</form>

<?php
    $grades = array("Harry"=>"90%", "Dan"=>"69%", "Zain"=>"99%");
    echo $grades[$_POST["student"]];
?>

</body>
</html>