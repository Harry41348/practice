<?php $title = 'PHP Practice'; include ("templates/top.php");

        // STRINGS 

        echo "<div class=\"container\">";
        echo "<div class=\"row\">";
        echo "<div class=\"col\">";

            echo "<p><u>PHP Strings</u></p>";

            echo nl2br(strtolower("LOWERCASE\n"));
            echo nl2br(strtoupper("uppercase\n"));
            echo strlen($name) . nl2br("\n");
            echo $name[0] . nl2br("\n");
            echo str_replace("monkey", "dog", $animal) . nl2br("\n");
            echo substr($animal, 4, 4);

        echo "</div>";

        // NUMBERS

        echo "<div class=\"col\">";

            echo "<p><u>PHP Numbers</u></p>";

            echo "5 + 9: " . (5+9) . nl2br("\n");
            echo "7 x 7: " . 7*7 . nl2br("\n");
            echo "5 / 3: " . 5/3 . nl2br("\n");
            echo "10 - 2: " . (10-2) . nl2br("\n");
            echo "10 remained 3: " . 10%3 . nl2br("\n");

            $num = 10;
            $num += 15;
            echo "num = 10 += 15: " . $num . nl2br("\n");

            echo abs(-69) . nl2br("\n"); // returns the absolute number
            echo pow(2, 4) . nl2br("\n"); // to the power of
            echo sqrt(121) . nl2br("\n"); // square root
            echo max(4, 6, 1, 5, 15) . nl2br("\n"); // min for opposite
            echo round(2.56) . nl2br("\n"); // round to a whole number, ceil() rounds up, floor rouuds down


        echo "</div>";

        // USER INPUT

        echo "<div class=\"col\">";

            echo "<p><u>User Input</u></p>";

    ?>

    <form action="index.php" method="get">
        Name: <input type="text" name="name">
        <input type="submit" value="Submit">
    </form>

    <?php

        echo $_GET["name"];

        echo "</div>";
        echo "</div>";
        echo "</div>";

    ?>
</body>
</html>