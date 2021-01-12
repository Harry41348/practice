<?php $title = 'Template'; include ("templates/top.php"); ?>

    <?php

        function sayHi($name){
            echo "Hello $name <br> ";
        }

        function cube($num){
            return $num * $num * $num;
        }

        sayHi("Harry");
        sayHi("Rachel");
        sayHi("Josh");

        echo(cube(5) . "<br>")

    ?>

</body>
</html>