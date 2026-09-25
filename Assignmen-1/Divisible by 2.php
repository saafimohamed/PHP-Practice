<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    

$num = 50;

while ($num >= 2) {

    if ($num % 2 == 0 && $num % 5 == 0) {
        echo $num . " ";
    }

    $num--;
}


    ?>
</body>
</html>