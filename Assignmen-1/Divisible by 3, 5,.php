<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        
<?php
    ##$ Divisible by 3, 5,
for ($number = 1; $number <= 30; $number++) {

    if ($number % 3 == 0 || $number % 5 == 0) {
        echo $number . "<br>";
    }
}


?>
</body>
</html