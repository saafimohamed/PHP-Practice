<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$a = 18;
$b = 24;

while ($b != 0) {
    $remainder = $a % $b;
    $a = $b;
    $b = $remainder;
}

echo "HCF = $a";

?>
</body>
</html>