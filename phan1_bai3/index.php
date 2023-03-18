<!DOCTYPE html>
<html lang="vi">
<head>
    <title>Bài 03</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="container">
    <h2>Dùng vòng lặp for</h2>
    <?php
        for($i = 0; $i <= 100; $i++) {
            if($i % 2 != 0) {
                echo $i . " ";
            }
        }
    ?>
    <h2>Dùng vòng lặp while</h2>
    <?php
        $i = 0;
        while($i <= 100) {
            if($i % 2 != 0) {
                echo $i . " ";
            }
            $i++;
        }
    ?>
</div>
</body>
</html>