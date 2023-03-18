<?php
    function printMessage($n) {
        switch ($n % 5) {
            case 0:
                echo "Hello";
                break;
            case 1:
                echo "How are you?";
                break;
            case 2:
                echo "I'm doing well, thank you";
                break;
            case 3:
                echo "See you later";
                break;
            case 4:
                echo "Good-bye";
                break;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bài 02</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="container">
    <?php
        $num = 10;
    ?>
    <h2><?php printMessage($num); ?></h2>
</div>
</body>
</html>