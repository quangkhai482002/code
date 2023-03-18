<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bài 1</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div class="container">
            <?php
                $x = 10;
                $y = 7;
            ?>
            <ul>
                <li><?php echo $x; ?> + <?php echo $y; ?> = <?php echo $x + $y; ?></li>
                <li><?php echo $x; ?> - <?php echo $y; ?> = <?php echo $x - $y; ?></li>
                <li><?php echo $x; ?> * <?php echo $y; ?> = <?php echo $x * $y; ?></li>
                <li><?php echo $x; ?> / <?php echo $y; ?> = <?php echo $x / $y; ?></li>
                <li><?php echo $x; ?> % <?php echo $y; ?> = <?php echo $x % $y; ?></li>
            </ul>
        </div>
    </body>
</html>