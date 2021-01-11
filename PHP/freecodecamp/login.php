<?php $title = 'Login'; include ("templates/top.php"); ?>

    <form action="login.php" method="post">
        Login: <input type="text" name="username">
        Password <input type="password" name="password">
        <input type="submit" value="Submit">
    </form>
    <br>

    <?php
        echo $_POST["password"]
    ?>
</body>
</html>