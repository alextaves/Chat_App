<?php

include("calculator_controller.php");

?>


<!DOCTYPE html>
<html>
<head>
	<style>
    h2 {
        font-family: cursive;
    }
	</style>
</head>
<body>
    <h2>Message Log</h2>
    
    <ul>
        <?php
        foreach($history_of_calculations_array as $line) {
            echo "<li>$line</li>";
        }
        ?>
    </ul>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
        <input type="submit" name="clear_history" value="clear">
    </form><br>

    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
        <input type="text" name="message_text" value="">
        <input type="submit" name="add" value="+">
    </form><br>

</body>
</html>