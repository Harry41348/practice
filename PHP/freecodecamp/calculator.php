<?php $title = 'Calculator'; include ("templates/top.php"); ?>

    <form action="calculator.php" method="post">
        First Num:<input type="number" name="num1"><br>
        OP: <input type="text" name="op"><br>
        Second Num:<input type="number" name="num2"><br>
        <input type="submit"><br>
    </form>

    Answer:
    <?php
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $op = $_POST["op"];

        if($op == "+"){
            echo $num1 + $num2;
        }elseif($op == "-"){
            echo $num1 - $num2;
        }elseif($op == "*"){
            echo $num1 * $num2;
        }elseif($op == "/"){
            echo $num1 / $num2;
        }else{
            echo "Invalid operator";
        }
    ?>
</body>
</html> 